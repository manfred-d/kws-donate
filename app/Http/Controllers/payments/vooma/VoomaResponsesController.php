<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\Http\Controllers\payments\vooma;

/**
 * Description of VoomaResponsesController
 *
 * @author DELL 14
 */
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use App\Models\Donation;
Use App\Models\CrmCustomer;
Use App\Models\Transaction;
use App\Models\ContactCompany;
use App\Models\Adoption;
use App\Models\MpesaTransaction;

class VoomaResponsesController extends \App\Http\Controllers\Controller  {
    
    //put your code here
      public function newAccessToken() {
        $consumerKey = "8E0pvRQGeY7D7M0gcMG7rfAqfMYa";
        $consumerSecret = "op823c0He2WaJutTfd63FlOhlh8a";
        $credentials = base64_encode($consumerKey . ":" . $consumerSecret);
        $url = "https://kcb-wso2gw.apps.test.aro.kcbgroup.com/token?grant_type=client_credentials";

           $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array("Authorization: Basic " . $credentials, "Content-Type:application/json"));
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $curl_response = curl_exec($curl);
        $access_token = json_decode($curl_response);
        curl_close($curl);

        return $access_token->access_token;
    }
    public function voomaTransactionStatus(Request $request)
    {
        $body =  array(
            'Initiator' => env('MPESA_B2C_INITIATOR'),
            'SecurityCredential' => env('MPESA_B2C_PASSWORD'),
            'CommandID' => 'TransactionStatusQuery',
            'TransactionID' => $request->transactionid,
            'PartyA' => env('MPESA_SHORTCODE'),
            'IdentifierType' => '4',
            //'ResultURL' => env('MPESA_TEST_URL'). '/api/transaction-status/result_url',
            //'QueueTimeOutURL' => env('MPESA_TEST_URL'). '/api/transaction-status/timeout_url',
            'Remarks' => 'CheckTransaction',
            'Occasion' => 'VerifyTransaction'
          );

        $url =  '/transactionInfo/203/';
        $response = $this->makeHttp($url, $body);

        return $response;
    }
}
