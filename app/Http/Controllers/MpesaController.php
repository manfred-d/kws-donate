<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use App\Models\Donation;
Use App\Models\CrmCustomer;
Use App\Models\Transaction;
use App\Models\ContactCompany;
use App\Models\Adoption;
use App\Models\MpesaTransaction;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailNotify;
use App\Models\Email;

class MpesaController extends Controller {

    //Create password

    public function lipaNaMpesaPassword() {
        //timestamp
        $timestamp = Carbon::rawParse('now')->format('YmdHms');
        //passkey
        //$testpasskey = "bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";
        $passkey="3c6352935670e08d8d39e79068ebe43e2e5859cf8ad964e3eae8ac72b4135c3e";
        //businessShortCode
        $bussinessShortCode = 520522;
        //generate password
        $mpesaPassword = base64_encode($bussinessShortCode . $passkey . $timestamp);

        return $mpesaPassword;
    }

    public function newAccessToken() {
        $consumerKeytest = "zcHIjMYOD6FH8C0b27J38NCTMx9BNGMA";
        $consumerKey="5ihttF4Kin56wyD2wzSznJcrwmO3LWUj";
        $consumerSecrettest = "GWMEFGZOLzyJT47t";
        $consumerSecret="hj9w3Sp9GxG55v65";
        $credentials = base64_encode($consumerKey . ":" . $consumerSecret);
        $url = "https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials";

        // Http request
        // $request = new HttpRequest();
        // $request->setUrl('https://sandbox.safaricom.co.ke/oauth/v1/generate');
        // $request->setMethod(HTTP_METH_POST);
        // $request->setQueryData(array(
        //         'grant_type' => 'client_credentials'
        //     ));
        // $request->setHeaders(array(
        //     'Content-Type:application/json',
        //     'Authorization:Bearer '.$this->newAccessToken())
        // );
        // try {
        //      $response = $request->send();
        //       echo $response->getBody();
        //     }       
        //     catch (HttpException $ex) {
        //         echo $ex;
        //     }
        //curl http request
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

    public function stkPush(Request $request) {
        // dd($request);  
        // dynamism

        $phone = $request->phone;
        $account = $request->account;
        $amount = $request->amount;
        
        $formatedPhone = substr($phone, 1);
        $code = "254";
        $phoneNumber = $code . $formatedPhone;

        $url = "https://api.safaricom.co.ke/mpesa/stkpush/v1/processrequest";
        $time=Carbon::rawParse('now')->format('YmdHms');
        $mpesapasses=$this->lipaNaMpesaPassword();
        $curl_post_data = [
            'BusinessShortCode' => 520522,
            'Password' => $mpesapasses,
            'Timestamp' => $time,
            'TransactionType' => 'CustomerPayBillOnline',
            'Amount' => $amount,
            'PartyA' => $phoneNumber,
            'PartyB' => 174379,
            'PhoneNumber' => $phoneNumber,
            'CallBackURL' => 'https://kws-donate.kikosi.com/api/stk/callback',
            'AccountReference' => $account,
            'TransactionDesc' => "Till Lipa na Mpesa"
        ];

        $data_string = json_encode($curl_post_data);

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Authorization:Bearer ' . $this->newAccessToken()));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
        // curl_setopt($curl, CURLOPT_TIMEOUT_MS, 200);
        $curl_response = curl_exec($curl);
        $result= json_decode($curl_response);
        curl_close($curl);
        sleep(25);
        $responce= $this->confirm(174379,$mpesapasses,$time,$result->CheckoutRequestID); 
        $results= json_decode($responce);
        
        if(isset($results->ResultCode)&&$results->ResultCode==0){
             $transaction = Transaction::where('ref', $account)->update(['status' => 'COMPLETED','channel'=>'MPESA']);;
              //$transaction->status = 'COMPLETED';
            $transactions=Transaction::where('ref', $account)->get();
            $transactionz=Transaction::where('ref', $account)->first();
            //$transaction->channel = 'MPESA';
             //$transaction->save();
           
          //$donete = Donation::where('id', $doners->donation_id)->get();
          //$donor= CrmCustomer::where('id', $donete->donor_id)->get();
          //$email=$donor->email;
           //$data = array('name'=>$account);
    
           MpesaController::getdoner($transactionz->id);
             $responce='PayMent Recieved';
            return view('frontend.transactions.confirm', compact('transactions','responce'));
            //return $responce;
        } else {
            $transaction = Transaction::where('ref', $account)->update(['status' => 'FAILED','channel'=>'MPESA']);;
            $transactions=Transaction::where('ref', $account)->get();
            $transactionz=Transaction::where('ref', $account)->first(); 
            MpesaController::getdoner($transactionz->id);
              $responce='PayMent failed';
            return view('frontend.transactions.failed', compact('transactions','responce'));
            
        }
        
        
        
        

        // $curl_response = curl_exec($curl);
        // if($curl_response = curl_exec($curl))curl_close($curl);{
        //     return $curl_response;
        //  }
        //  return "STK PUSH FAILED";
    }
    
    public static function senfMail($param) {
            $details = [
        'title' => 'Mail from KWS Donations',
        'body' => 'Thank you for your Donation. PayMent Recieved'
    ];
   
    Mail::to($param)->send(new Email($details));
   
    }
    public static function  getdoner($param) {
        $doners = Transaction::where('id', $param)->first();
        if(!empty($doners)){
          $donete = Donation::where('id', $doners->donation_id)->first();
          $donor= CrmCustomer::where('id', $donete->donor_id)->first();
           MpesaController::senfMail($donor->email);
           
           
        }
    }
    public function MpesaResponse(Request $request) {
        $response = $request->getContent();

        $transaction = new MpesaTransaction;
        $transaction->response = json_encode($response);
        $transaction->save();
    }

    public function submit_request($endpoint_url, $json_body) { // Returns cURL response
        $access_token = $this->newAccessToken();

        if ($access_token != '' || $access_token !== false) {
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $endpoint_url);
            curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token));

            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $json_body);

            $response = curl_exec($curl);
            curl_close($curl);
            return $response;
        } else {
            throw new Exception("Access token is invalid");
            return false;
        }
    }

    public function confirm($mpesacode,$password,$time,$chec) {
        $url = 'https://api.safaricom.co.ke/mpesa/stkpushquery/v1/query';
        
        $curl_post_data = array(
	  //Fill in the request parameters with valid values
	  'BusinessShortCode' =>$mpesacode,
	  'Password' => $password,
	  'Timestamp' =>$time,
	  'CheckoutRequestID' =>$chec
	);
        
        $json_body = json_encode($curl_post_data);
         $responsce=$this->submit_request($url, $json_body);
         
         return $responsce;
    }
  
}
