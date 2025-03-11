<?php 
/**
 * $fileId passwed to the functions of this class can be aither relative or absolute file path
 * Alsways use = DiskFileSystem::normalizeFilePath on it.
 */
class DiskFileSystem extends RunnerFileSystem {
	
	
	/**
	 * When true, functions of the class return absolute path. 
	 * Relative otherwise
	 */
	public $absolutePath = false;

	/**
	 * Absolute or relative path where to save the files
	 * This parameter is ignored when reading the file or file info.
	 * For those purposes path must be supplied in the fileId
	 */
	public $path = "";

	function __construct(&$params) {
		$this->absolutePath = $params["absolutePath"];
		$this->path = $params["path"];
	}

	/**
	 * @param String $userFilename
	 * Return absolute filename
	 */
	public function saveUploadedFile( $uploadFile, $userFilename ) {
		$path = DiskFileSystem::normalizePath( $this->path );
		if( !$path ) {
			return null;
		}
		if(!makeSurePathExists( $path )) {
			$this->errorMessage = "Upload folder doesn't exist";
			return null;
		}
	
		$filename = $this->tryCreateUniqueFile( simplify_file_name( $userFilename ), $path );
		if( !$filename ) {
			$this->errorMessage = "Unable to create file in " . $path; 
			return null;
		}
		upload_File( $uploadFile, $path.$filename );
		
		if( $this->absolutePath )
			return $path.$filename;
		else
			return DiskFileSystem::normalizeRelativePath( $this->path ) . $filename;
	}

	/**
	 * Move local file to filesystem
	 */
	public function moveFile( $file, $userFilename ) {
		$path = DiskFileSystem::normalizePath( $this->path );
		if( !$path ) {
			return null;
		}
		if(!makeSurePathExists( $path )) {
			$this->errorMessage = "Upload folder doesn't exist";
			return null;
		}
	
		$filename = $this->tryCreateUniqueFile( simplify_file_name( $userFilename ), $path );
		if( !$filename ) {
			$this->errorMessage = "Unable to create file in " . $path; 
			return null;
		}
		rename( $file, $path.$filename );
		if( $this->absolutePath )
			return $path.$filename;
		else
			return DiskFileSystem::normalizeRelativePath( $this->path ) . $filename;
	}


	public function saveData( $data, $userFilename ) {
		$path = DiskFileSystem::normalizePath( $this->path );
		if( !$path ) {
			return null;
		}
		$filename = $this->tryCreateUniqueFile( $userFilename, $path );
		runner_save_file( $path.$filename, $data );
		if( $this->absolutePath )
			return $path.$filename;
		else
			return DiskFileSystem::normalizeRelativePath( $this->path ) . $filename;
	}

	public function copyFile( $fileId, $userFilename ) {
		$path = DiskFileSystem::normalizePath( $this->path );
		if( !$path ) {
			return null;
		}
		$filename = $this->tryCreateUniqueFile( $userFilename, $path );
		if( !$filename ) {
			return null;
		}
		runner_copy_file( DiskFileSystem::normalizeFilePath( $fileId ), $path.$filename );
		if( $this->absolutePath )
			return $path.$filename;
		else
			return DiskFileSystem::normalizeRelativePath( $this->path ) . $filename;
	}


	public function delete( $fileId ) {
		$fileId = DiskFileSystem::normalizeFilePath( $fileId );
		unlink( $fileId );
	}

	public function get( $userFilename, $path, $data ) {
	}

	public function printPartial( $fileId, $seek_start = 0, $seek_end = -1) {
		if( !$fileId ) {
			return;
		}
		$fileId = DiskFileSystem::normalizeFilePath( $fileId );
		if( !$seek_start && $seek_end < 0 ) {
			printfile( $fileId );
		}
		printfileByRange($fileId, $seek_start, $seek_end );
	}

	/**
	 * @return String Path always ends with "/"
	 */
	static public function normalizePath( $path ) {
		$path = DiskFileSystem::normalizeRelativePath( $path );
		
		if( !isAbsolutePath( $path ) ) {
			$path = getabspath( $path );
		}
		return $path;
	}

	static public function normalizeFilePath( $path ) {
		if( !isAbsolutePath( $path ) ) {
			$path = getabspath( $path );
		}
		return $path;
	}


	/**
	 * @return String Path always ends with "/"
	 */
	static public function normalizeRelativePath( $path ) {
		if( !$path ) {
			return '';
		}
		$lastSymbol = substr( $path, strlen( $path ) - 1, 1 );
		if( $lastSymbol != '/' && $lastSymbol !== '\\' ) {
			$path .= '/';
		}
		return $path;
	}


	/**
	 * Return unified file information
	 * Null if the file doesn't exist
	 * @return Array (
	 * 	 "fullPath" => $fileId. If the passed $fileId was incomplete, fix it and return in fullPath
	 * 	 "size" => file size
	 * 	 "lastModified" => optional last-modified time
	 * )
	 */
	public function getFileInfo( $fileId ) {
		$fileId = DiskFileSystem::normalizeFilePath( $fileId );
		if( !myfile_exists( $fileId ) ) {
			return null;
		}
		return array( 
			"fullPath" => $fileId, 
			"size" => filesize( $fileId ),
			"returnContent" => true,
			"lastModified" => filemtime( $fileId )
		);
	}

	/**
	 * @return Boolean - when true, calls to getFileInfo and similar functions are relatively fast and can be used freely
	 */
	public function fast() {
		return true;
	}

	protected function tryCreateFile( $path ) {
		return try_create_new_file( $path );
	}

	public static function uniqueFilename( $filename, $path ) {
		$params = array();
		$fs = new DiskFileSystem( $params );
		return $fs->tryCreateUniqueFile( $filename, $path );
	}
}

?>