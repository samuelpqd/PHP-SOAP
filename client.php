<?php

$url = 'http://10.8.33.44/phpsoap';

$oSoapClient = new SoapClient("$url/service.wsdl", array(
	'soap_version'   => SOAP_1_1,
	'trace' => 1,
    'exceptions' => true,
    'cache_wsdl' => WSDL_CACHE_NONE,
    'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
	));

echo $oSoapClient->hello();

?>


