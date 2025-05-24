<?php

class WasabiFileSystem extends S3FileSystem {

	protected function urlPostfix()
	{
		if ($this->region) {
			return '.s3.' . $this->region . '.wasabisys.com';
		}
		return '.s3.wasabisys.com';
	}

	public function directUpload()
	{
		return false;
	}
};

?>