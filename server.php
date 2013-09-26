<?php

if(!extension_loaded("soap")){
  dl("php_soap.dll");
}

ini_set("soap.wsdl_cache_enabled","0");
$oSoapServer = new SoapServer("service.wsdl");

class MeuServico{
    /**
     * Retorna uma string
     * @return string
     */
    public function hello(){
        $msg = "Hello, Diego";
        return  $msg;
    }
}

$oSoapServer->setClass("MeuServico");
$oSoapServer->handle();

?>