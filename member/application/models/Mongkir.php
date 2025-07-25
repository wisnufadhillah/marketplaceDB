<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mongkir extends CI_Model
{
    function biaya($origin, $destination, $weight)
    {

        $data['origin'] = $origin;
        $data['destination'] = $destination;
        $data['weight'] = $weight;
        $data['courier'] = 'jne';
        $data['price'] = 'lowest';


        $url = "https://rajaongkir.komerce.id/api/v1/calculate/domestic-cost";
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_HTTPHEADER => array(
                'accept: application/json',
                "key: ZgnHFACk4479713ed12434350Eo3nFHu"
            ),
            CURLOPT_POSTFIELDS => http_build_query($data)
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $response = json_decode($response, TRUE);
            if (isset($response['data']) && !empty($response['data'])) {
                return $response['data'];
            } else {
                return array();
            }
        }
    }
}