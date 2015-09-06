<?php

return array(
	/**
	 * Mod Respository Location
	 *
	 * This is the location of your mod reposistory. INCLUDE a trailing slash!
	 * This can be a URL or an absolute file location.
	 *
	 **/
	'repo_location' => 'http://mirror.technicpack.net/Technic/',

	/**
	 * Mirror Location
	 *
	 * This is where the launcher will be told to search for your files. If your
	 * repo location is already a URL you can use the same location here.
	 *
	 **/
	'mirror_url' => 'http://mirror.technicpack.net/Technic/',

	/**
	 * MD5 Hashing Timeout
	 *
	 * This is the amount of time Solder will wait before giving up trying to
	 * calculate the MD5 checksum.
	 *
	 **/
	'md5filetimeout' => 30,

	/**
	 * Amazon S3 Integration
	 *
	 * If you would like to use Amazon S3 for serving your pack resources set this to
	 * true and fill in your AWS information below.
	 */
	'use_s3' => $_ENV['USE_S3'],

	/**
	 * Amazon AWS Access Key
	 */
	'access_key' => $_ENV['AWS_ACCESS_KEY'],

	/**
	 * Amazon AWS Secret Key
	 */
	'secret_key' => $_ENV['AWS_SECRET_KEY'],

	/**
	* Amazon S3 Bucket
	*
	* This is the bucket that will be used to store your pack resources
	*/
	'bucket' => $_ENV['AWS_S3_BUCKET'],

	/**
	* Amazon S3 Bucket URL
	*
	* Publically accessible URL to your bucket. Including trailing slash!
	*/
	's3_url' => $_ENV['AWS_S3_BUCKET_URL'],

);

?>
