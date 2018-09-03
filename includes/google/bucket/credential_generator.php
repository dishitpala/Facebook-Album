<?php
require_once __DIR__ . '/../../../configuration.php';
require_once __DIR__ . '/../../../library/vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(CREDENTIALS,"credentials.env");
$dotenv->load();

$credentials = '{
  "type": "'.getenv("GOOGLE-BUCKET_TYPE").'",
  "project_id": "'.getenv("GOOGLE-BUCKET_PROJECTID").'",
  "private_key_id": "'.getenv("GOOGLE-BUCKET_PRIVATEKEYID").'",
  "private_key": "'.getenv("GOOGLE-BUCKET_PRIVATEKEY").'",
  "client_email": "'.getenv("GOOGLE-BUCKET_CLIENTEMAIL").'",
  "client_id": "'.getenv("GOOGLE-BUCKET_CLIENTID").'",
  "auth_uri": "'.getenv("GOOGLE-BUCKET_AUTHURI").'",
  "token_uri": "'.getenv("GOOGLE-BUCKET_TOKENURI").'",
  "auth_provider_x509_cert_url": "'.getenv("GOOGLE-BUCKET_AUTHPROVIDERx509CERTURL").'",
  "client_x509_cert_url": "'.getenv("GOOGLE-BUCKET_CLIENTx509CERTURL").'"
}';

//open or create the file
$handle = fopen('credentials/bucket_credentials.json','w+');

//write the data into the file
fwrite($handle,$credentials);

//close the file
fclose($handle);
