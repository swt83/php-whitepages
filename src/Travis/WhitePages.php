<?php

namespace Travis;

class WhitePages
{
    /**
     * Method for handling API calls.
     *
     * @param   string  $apikey
     * @param   string  $method
     * @param   array   $payload
     * @return  object
     */
    public static function run($apikey, $method, $args = [])
    {
        // set endpoint
        $endpoint = 'https://proapi.whitepages.com/3.0/'.$method.'?';

        // add apikey to arguments
        $args['api_key'] = $apikey;

        // build payload
        $payload = '';
        foreach ($args as $key => $value)
        {
            $payload .= urlencode($key) . '=' . urlencode($value) . '&';
        }

        // attach query
        $endpoint .= $payload;

        // setup curl request
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $endpoint);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        $response = curl_exec($ch);

        // catch error...
        if (curl_errno($ch))
        {
            // report
            #$errors = curl_error($ch);

            // close
            curl_close($ch);

            // return false
            return false;
        }

        // close
        curl_close($ch);

        // return array
        return json_decode($response);
    }
}