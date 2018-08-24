<?php
/**
 * The credentials are manually specified by passing in a keyFilePath.
 */
require_once __DIR__ . '/../../../configuration.php';
require_once __DIR__ . '/../../../library/vendor/autoload.php';


use Google\Cloud\Storage\StorageClient;
use League\Flysystem\Filesystem;
use Superbalist\Flysystem\GoogleStorage\GoogleStorageAdapter;


$storageClient = new StorageClient([
    'projectId' => '{}',
    'keyFilePath' => CREDENTIALS . "/credentials.json",
]);
$bucket = $storageClient->bucket('dishitpala');
$adapter = new GoogleStorageAdapter($storageClient, $bucket);
$filesystem = new Filesystem($adapter);
?>