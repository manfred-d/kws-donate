<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;


/**
 * Description of VisaController
 *
 * @author DELL 14
 */



/**
 * Description of VisaController
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
use App\Http\Controllers\Controller;
use App\Http\Controllers\payments\cyberaource\ExternalConfiguration;

class VisaController extends Controller {
    //put your code here
    public static function getToken() {
        $commonElement = new ExternalConfiguration();
	$config = $commonElement->ConnectionHost();
	$merchantConfig = $commonElement->merchantConfigObject();
	$apiclient = new CyberSource\ApiClient($config, $merchantConfig);
	$api_instance = new CyberSource\Api\KeyGenerationApi($apiclient);
	$flexRequestArr = [
	"encryptionType" => "RsaOaep256",
	"targetOrigin" => "https://kws-donate.kikosi.com/",
	];
	
	$keyResponse = list($response, $statusCode, $httpHeader)=null;
	$jwkJSON = '{}';

	try {
		$keyResponse = $api_instance->generatePublicKey($format = 'legacy', $flexRequestArr);
		
		$jwkArray = $keyResponse[0]["jwk"];
		// print_r($jwkArray);

        // NOTE json_encode is not working because the array is protected
		$jwk = json_encode($jwkArray,JSON_FORCE_OBJECT);
        // print_r($jwk);

		// SO that's why we're string handling the JSON object
        $jwkJSON = '{"kty":"'.$jwkArray['kty'].'","kid":"'.$jwkArray['kid'].'","use":"'.$jwkArray['use'].'","n":"'.$jwkArray['n'].'","e":"'.$jwkArray['e'].'"}';
        // print_r($jwkJSON);
        return $jwkJSON;
	} catch (Cybersource\ApiException $e) {
		print_r($e->getResponseBody());
        print_r($e->getMessage());
	}
    }
    
}
