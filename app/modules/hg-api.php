<?php

class HG_API {

    private $key = null;
    private $error = false;
    

    function __construct($key = null)
    {
        if (!empty($key)) $this->key = $key;
    }


    function request ($endpoint = '' , $params = array() )
    {
        $url = "https://api.hgbrasil.com/" . $endpoint . "?key=" . $this->key . "&format=json";

        if ( is_array($params) )
        {
            foreach($params as $key => $value)
            {
                if (empty($value)) continue;
                $url .= $key . "=" . urlencode($value) . '&';
            }
            $url        = substr($url, 0 , -1);
            $response   = @file_get_contents($url); 
            $this->error = false;
            return json_decode($response , true);

        } else {
            $this->error = true;
            return false;
        }

    }



    function is_error ()
    {
        return $this->error;
    }

    function dolar_quotation()
    {
        $data = $this->request('finance/quotations');

        if (!empty($data) && is_array( $data['results']['currencies']['USD'])){
            $this->error = false;
            return $data['results']['currencies']['USD'];
        } else {
            $this->error = true;
            return false;
        }
    }
}

?>