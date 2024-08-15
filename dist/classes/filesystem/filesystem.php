<?php

/**
 * 	Common function parameter description
 *  userFilename {string} - filename as shown to the enduser
 *  fileId {string} - file identifier, a string that unambiguously identifies a file within the file system.
 *  data {string or array of bytes} - file contents
 */
class RunnerFileSystem {

	protected $errorMessage;

	protected $uniqueFileAttempts = 10;
	protected $stubFileData = "RunnerFileSystem";

	function __construct(&$params) {

	}


	/**
	 * Move uploaded file and return fileid
	 * @param Array uploadFile
	 * 		element of array returned by uploadFiles() function
	 * 		in PHP it is $_FILES array element
	 * 		in .NET uploadedFile["file"] is HttpPostedFile object
	 * @return String fileId
	 */
	public function saveUploadedFile( $uploadFile, $userFilename ) {

	}

	/**
	 * Save file and return fileid
	 */
	public function saveData( $data, $userFilename ) {
	}

	/**
	 * Move local file to the filesystem
	 */
	public function moveFile( $file, $userFilename ) {
	}

	/**
	 * Copy file
	 * @return String - new fileId or null
	 */
	public function copyFile( $fileId, $userFilename ) {
		return null;
	}

	/**
	 * Delete a file
	 */
	public function delete( $fileId ) {

	}

	/**
	 * send the file to the output
	 * @return nothing
	 */
	public function printPartial( $fielId, $seek_start = 0, $seek_end = -1 ) {

	}


	/**
	 * @return FileResult or null
	 */
	public function get( $userFilename, $path, $data ) {
		return null;
	}

	/**
	 * Return unified file information
	 * Null if the file doesn't exist
	 * @return Array (
	 * 	 "fullPath" => $fileId. If the passed $fileId was incomplete, fix it and return in fullPath
	 * 	 "size" => file size
	 * 	 "returnContent" => boolean. When true the filesystem can return file contents. Otherwise only the link
	 * )
	 */
	public function getFileInfo( $fileId ) {
			return null;
	}

	public function lastError() {
		return $this->errorMessage;
	}

	protected function setLastError( $str ) {
		$this->errorMessage = $str;
	}

	/**
	 * @return String - uploaded file contents
	 */
	public static function uploadedFileContent( $uploadFile ) {
					return myfile_get_contents( $uploadFile["tmp_name" ]);
	}

	/**
	 * @return Boolean - when true, calls to getFileInfo and similar functions are relatively fast and can be used freely
	 */
	public function fast() {
		return false;
	}

	/**
	 * @return Boolean - when true, browser uploads files directly to the filesystem skipping the PHP code.
	 */
	public function directUpload() {
		return false;
	}

	/**
	 * Filesystem creates thumbnails automatically
	 */
	public function autoThumbnails() {
		return $this->directUpload();
	}
	
	/**
	 * Return false when fail
	 */
	public function redirectToFile( $fileId, $thumbnail ) {
	}


	protected function tryCreateFile( $path ) {
		return false;
	}

	public static function generateFilename( $filename ) {
		$dotPos = strrpos( $filename, '.' );
		if( $dotPos !== false ) {
			$name = substr( $filename, 0, $dotPos );
			$extension = substr( $filename, $dotPos );
		} else {
			$name = $filename;
		}

		return $name."_".generatePassword(8).$extension;
	}

	/**
	 * @return String - filename only or false
	 */
	public function tryCreateUniqueFile( $filename, $path ) {
		$attempt = 0;
		do { 
			//	physical file name always differs from the original one for security reason.
			//	possible exploit - upload x.php file to /files and then open site.com/files/x.php
			$filename = RunnerFileSystem::generateFilename( $filename );

			$filepath = $path . $filename;
			if( $this->tryCreateFile( $filepath ) )
				return $filename;
		} while( ++$attempt < $this->uniqueFileAttempts ); 

		return false;
	}
}

define( 'frDATA', 0 );
define( 'frLINK', 0 );

class FileResult {
	/**
	 * Either frDATA or frLINK
	 */
	public $type;
	/**
	 * Used with frLINK
	 */
	public $url;
	/**
	 * Used with frDATA
	 */
	public $data;
}

require_once( getabspath("classes/filesystem/disk.php") );
require_once( getabspath("classes/filesystem/oauthfilesystem.php") );
require_once( getabspath("classes/filesystem/googledrive.php") );
require_once( getabspath("classes/filesystem/s3.php") );
require_once( getabspath("classes/filesystem/onedrive.php") );
require_once( getabspath("classes/filesystem/dropbox.php") );
?>