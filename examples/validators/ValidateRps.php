<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once __DIR__ . '/../../vendor/autoload.php';

$xml = __DIR__ . "/../xml/Rps.xml";
$xsd = __DIR__ . "/../scheme/v2-03/nfse.xsd";
$content = file_get_contents($xml);

try {
    \NFePHP\Common\Validator::isValid($content, $xsd);
    echo "XML Validado com sucesso.";
} catch (\NFePHP\Common\Exception\ValidatorException $e) {
    print_r($e->getMessage());
}



