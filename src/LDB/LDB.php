<?php

namespace RailBoard;


class LDB implements LDBInterface
{

    /**
     * [$wsdl description]
     * @var mixed
     */
    private $wsdl;


    /**
     * [$token description]
     * @var string
     */
    private $token;


    /**
     * [$trace description]
     * @var string
     */
    private $trace = 0;


    /**
     * [$soapClient description]
     * @var SoapClient
     */
    private $soapClient;


    /**
     * [__construct description]
     * @param [type] $wsdl  [description]
     * @param [type] $token [description]
     */
    public function __construct($wsdl, $token)
    {
      $this->wsdl = $wsdl;
      $this->token = $token;

      // Client
      $soapOptions = [
        "trace" => $this->trace,
        "compression"=> SOAP_COMPRESSION_ACCEPT|SOAP_COMPRESSION_GZIP
      ];
      $this->soapClient = new SoapClient($this->wsdl, $soapOptions);

      // Auth Headers
      $tokenVar = new SoapVar(array("ns2:TokenValue" => $this->token), SOAP_ENC_OBJECT);
      $authHeader = new SoapHeader("http://thalesgroup.com/RTTI/2017-10-01/ldb/", "AccessToken", $tokenVar, FALSE);
      $this->soapClient->__setSoapHeaders($authHeader);
    }

    // @TODO - ...

}
