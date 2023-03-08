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
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\Donation;
Use App\Models\CrmCustomer;
Use App\Models\Transaction;
use App\Models\ContactCompany;
use App\Models\Adoption;
use App\Models\MpesaTransaction;
use App\Http\Controllers\Controller;
use app\Http\Controllers\payments\cyberaource\ExternalConfiguration;
use Log;
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

        $keyResponse = list($response, $statusCode, $httpHeader) = null;
        $jwkJSON = '{}';

        try {
            $keyResponse = $api_instance->generatePublicKey($format = 'legacy', $flexRequestArr);

            $jwkArray = $keyResponse[0]["jwk"];
            // print_r($jwkArray);
            // NOTE json_encode is not working because the array is protected
            $jwk = json_encode($jwkArray, JSON_FORCE_OBJECT);
            // print_r($jwk);
            // SO that's why we're string handling the JSON object
            $jwkJSON = '{"kty":"' . $jwkArray['kty'] . '","kid":"' . $jwkArray['kid'] . '","use":"' . $jwkArray['use'] . '","n":"' . $jwkArray['n'] . '","e":"' . $jwkArray['e'] . '"}';
            // print_r($jwkJSON);
            return $jwkJSON;
        } catch (Cybersource\ApiException $e) {
            print_r($e->getResponseBody());
            print_r($e->getMessage());
        }
    }

    public function confirm() {
        
    }

    public function reciept() {
        
    }
    Public static function generateRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
    public function proceedPaymentHNB(Request $request) {

        $order_ref = $request->input("account");
        $order_id = $request->input("tid");
        $order = Transaction::where("id", $order_id)->first();

        if ($order_id != null && $order != null) {

            $transaction_ref = $order->ref;
            if ($transaction_ref != null) {
                // Transaction  created
                $signed_field_names='access_key,profile_id,transaction_uuid,signed_field_names,unsigned_field_names,signed_date_time,locale,transaction_type,reference_number,amount,currency';
                 $donor= CrmCustomer::where('id', HomeController::getdonerd($order->id))->first();
                $transaction_type='sale';
                $locale='en';
                $currency='KES';
                $access_key="46377ecc8ab633cab965f0212e97b208";
                $profile_id="F8E9DA58-7E7F-4FA6-A7F4-AC44E243519B";
                $reference_number = $transaction_ref;
                $amount = $order->amount;
                $bill_to_address_line1 = $donor->address;
                $bill_to_address_city = 'Nairobi';
                $bill_to_address_country = 'Kenya';
                $bill_to_address_postal_code = $donor->address;
                $bill_to_forename = $donor->first_name;
                $bill_to_surname = $donor->last_name ;
                $bill_to_email = $donor->email;
                $bill_to_phone = '+254721914771';
                //$signed_date_time = Carbon::now()->toIso8601ZuluString(); //Carbon::now()->format("Y-m-dTh:i:sZ");
                $signed_date_time= gmdate("Y-m-d\TH:i:s\Z");
                $transaction_uuid = VisaController::generateRandomString(30);

                $request_form_data = [
                    "access_key" => $access_key,
                    "profile_id" => $profile_id,
                    "transaction_type" => $transaction_type,
                    "reference_number" => $reference_number,
                    "amount" => $amount,
                    "locale" => $locale,
                    "transaction_uuid" => $transaction_uuid,
                    "signed_date_time" => $signed_date_time,
                    "signed_field_names" => $signed_field_names,
                    "unsigned_field_names" => "",
                    "currency" => $currency,
                    "payment_method" => 'card',
                    //"bill_to_forename" => $bill_to_forename,
                    //"bill_to_surname" => $bill_to_surname,
                    //"bill_to_email" => $bill_to_email,
                    //"bill_to_phone" => $bill_to_phone,
                    //"bill_to_address_line1" => $bill_to_address_line1,
                    //"bill_to_address_city" => $bill_to_address_city,
                    //"bill_to_address_country" => $bill_to_address_country,
                    //"bill_to_address_postal_code" => $bill_to_address_postal_code,
                ];

                $signature = $this->makeSignature($request_form_data);
                $request_form_data["signature"] = $signature;

                $log_data = ["ACTION" => "PAYMENT REQUEST", "FULL_REQUEST" => $request_form_data];
                //$this->apiLog($log_data);
                $ker=csrf_field();
               $data ='
                
                        <h1 align="center">Processing your Transaction</h1>
                        <form method="post" action="https://testsecureacceptance.cybersource.com/pay" name="checkout_form" style="display:none;"> 
                        
                        ' . $ker  . '
                           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <div align="center">
                                <input id="access_key" type="hidden" value="' . $access_key . '" name="access_key">
                                <input id="profile_id" type="hidden" value="' . $profile_id . '" name="profile_id">
                                <input id="transaction_type" type="hidden" value="' . $transaction_type . '" name="transaction_type">
                                <input id="reference_number" type="hidden" value="' . $reference_number . '" name="reference_number">
                                <input id="amount" type="hidden" value="' . $amount . '" name="amount" >
                                <input id="locale" type="hidden" value="' . $locale . '" name="locale" >
                                <input id="transaction_uuid" type="hidden" value="' . $transaction_uuid . '" name="transaction_uuid">
                                <input id="signed_date_time" type="hidden" value="' . $signed_date_time . '" name="signed_date_time" >
                                <input id="signed_field_names" type="hidden" value="' . $signed_field_names . '" name="signed_field_names" >
                                <input id="unsigned_field_names" type="hidden" value="' .   $request_form_data['unsigned_field_names'] . '" name="unsigned_field_names" >
                                <input id="currency" type="hidden" value="' . $currency . '" name="currency" >
                                <input id="signature" type="hidden" value="' . $signature . '" name="signature">
                                
                               
                                <h3 align="center"> Please click on the Submit button to continue processing.<br>
                                <input type="submit" value="Submit">
                            </div>
                        </form>
                        <script>document.forms["checkout_form"].submit();</script>
                  

                ';
              return view('frontend.transactions.visa', compact('data','this'));  
            } else {
                // Transaction not created
                Log::critical("Transaction not created for oder_id=" . $order_id);
                 return redirect()->route('checkout', ['sds' => $order->id,'result'=>'error']);
                //return redirect()->to(web_base_path('show-payment-response?result=error'));
            }
        } else {
            // Invalid order id
            Log::critical("Invalid order id - oder_id=" . $order_id);
             return redirect()->route('checkout', ['sds' => $order->id]);
            //return redirect()->to(web_base_path('show-payment-response?result=error'));
        }
    }

    public function getPaymentGatewayResponseHNB(Request $request) {
        $ResponseCode = $request->input('decision');
        $ReasonCode = $request->input('payer_authentication_reason_code');
        $ReasonCodeDesc = $request->input('message');
        //$signature = $request->input('signature');
        $OrderID = $request->input('req_reference_number');
        $transaction = Transaction::where("ref", $OrderID)->first();
        $log_data = ["ACTION" => "PAYMENT RESPONSE", "DECISION" => $request->input('decision'), "ReasonCode" => $request->input('reason_code'), "ReasonCodeDesc" => $request->input('message'), "FULL_RESPONSE" => $request->input()];
        $this->apiLog($log_data);

        if (isset($ResponseCode)) {

            if ($ResponseCode == "ACCEPT") {
                if ($ReasonCode == 100) {

                    // Transaction Approved.
                    if ($transaction != null) {
                        $transactions = Transaction::where('ref', $OrderID)->update(['status' => 'COMPLETED','channel'=>'CARD']);
              //$transaction->status = 'COMPLETED';
            $transactions=Transaction::where('ref', $OrderID)->get();
            $transactionz=Transaction::where('ref', $OrderID)->first();
                        
                        //$db_signature = $this->makeSignature($request);
                        //$transaction->pg_response_code = $ResponseCode;
                        //$transaction->pg_response_desc = $ReasonCodeDesc;
                        //$transaction->pg_full_response = json_encode($request->input());
                        //$transaction->save();
                        // Check signatures
                 MpesaController::getdoner($transactionz->id);

//                        if ($db_signature == $request->signature) {
//                            // Success transaction and Signature matched
//                            $transaction->order->success_transaction_id = $transaction->id;
//                            $transaction->order->payment_status = 1;
//                            $transaction->order->save();
//                            $transaction->order->cart->status = 1;
//                            $transaction->order->cart->completed_at = now()->toDateTimeString();
//                            $transaction->order->cart->save();
//
//                            //Reduce Stock
//                            //$reduceStock = new ProductController();
//                            //$reduceStock->reduceStock($transaction->order->cart->id);
//
//                            //Change Status of Giftcard as 'purchased'
////                            $cart_giftcards = CartGiftCard::where(['cart_id' => $transaction->order->cart->id])->get();
////                            foreach ($cart_giftcards as $cart_giftcard) {
////                                GiftCardController::purchaseGiftCard($cart_giftcard->gift_card_id);
////                            }
//
//                            MpesaController::getdoner($transactionz->id);
//                            // Order confirmation email to customer
//                           // Mail::to($transaction->order->user->user_email)->send(new CustomerOrderConfirmation($transaction->order));
//
//                            // Order confirmation email to backend
//                            //Mail::to(config('shayInt.BACKEND_MAIL_ADDRESS'))->send(new BackendOrderConfirmation($transaction->order));
//
//                            return redirect()->to(web_base_path('show-payment-response?result=success&message=' . $ReasonCodeDesc));
//                        } else {
//                            // Success transaction but Signature not match (BOGUS TRANSACTION)
//                            Log::critical("Success transaction but Signature not match (BOGUS TRANSACTION) - Signatures=> " . $db_signature . "!=" . $signature . " Response=>" . json_encode($request->input()));
//                            $transaction->order->success_transaction_id = $transaction->id;
//                            $transaction->order->payment_status = 3;
//                            $transaction->order->save();
//                            $transaction->order->cart->status = 3;
//                            $transaction->order->cart->completed_at = now()->toDateTimeString();
//                            $transaction->order->cart->save();
//                            return redirect()->to(web_base_path('show-payment-response?result=error&message=' . $ReasonCodeDesc));
//                        }
                    
                 echo'hey';
                    } else {
                        // Response OrderID not use as transaction_reference in transaction data.
                        Log::critical("Response OrderID not use as transaction_reference in transaction data.");
                        return redirect()->to(web_base_path('show-payment-response?result=error&message=' . $ReasonCodeDesc));
                    }
                }
            } elseif ($ResponseCode == "CANCEL") {
                // Transaction Declined.
                Log::critical("Transaction Cancelled");
                if ($transaction != null) {
                     $transaction = Transaction::where('ref', $OrderID)->update(['status' => 'CANCELLED','channel'=>'CARD']);
              
                 //$transaction->status = 'COMPLETED';
            $transactions=Transaction::where('ref', $account)->get();
            $transactionz=Transaction::where('ref', $account)->first();
                    
//                    $transaction->pg_response_code = $ResponseCode;
//                    $transaction->pg_response_desc = $ReasonCodeDesc;
//                    $transaction->pg_full_response = json_encode($request->input());
//                    $transaction->save();
//                    return redirect()->to(web_base_path('show-payment-response?result=error&message=' . $ReasonCodeDesc));
                } else {
                    // Response OrderID not use as transaction_reference in transaction data.
                    Log::critical("Response OrderID not use as transaction_reference in transaction data.");
                    return redirect()->to(web_base_path('show-payment-response?result=error&message=' . $ReasonCodeDesc));
                }
            } elseif ($ResponseCode == "DECLINE") {
                // Transaction Decline.
                Log::critical("Transaction Declined");
                 $transaction = Transaction::where('ref', $OrderID)->update(['status' => 'DECLINED','channel'=>'CARD']);
              
//                if ($transaction != null) {
//                    $transaction->pg_response_code = $ResponseCode;
//                    $transaction->pg_response_desc = $ReasonCodeDesc;
//                    $transaction->pg_full_response = json_encode($request->input());
//                    $transaction->save();
//                    if ($ReasonCode == 234 || $ReasonCode == 236 || $ReasonCode == 481) {
//                        return redirect()->to(web_base_path('show-payment-response?result=error&message='));
//                    } else {
//                        return redirect()->to(web_base_path('show-payment-response?result=error&message=' . $ReasonCodeDesc));
//                    }
                } else {
                    // Response OrderID not use as transaction_reference in transaction data.
                    Log::critical("Response OrderID not use as transaction_reference in transaction data.");
                    return redirect()->to(web_base_path('show-payment-response?result=error&message='));
                }
            } else {
                // Transaction Error.
                Log::critical("Transaction Error");
//                if ($transaction != null) {
//                    $transaction->pg_response_code = $ResponseCode;
//                    $transaction->pg_response_desc = $ReasonCodeDesc;
//                    $transaction->pg_full_response = json_encode($request->input());
//                    $transaction->save();
//                    return redirect()->to(web_base_path('show-payment-response?result=error&message='));
//                } else {
//                    // Response OrderID not use as transaction_reference in transaction data.
//                    Log::critical("Response OrderID not use as transaction_reference in transaction data.");
//                    return redirect()->to(web_base_path('show-payment-response?result=error&message='));
//                }
            } 
//            else{
//            // Invalid response from CyberSource
//            Log::critical("Invalid response from CyberSource");
//            return redirect()->to(web_base_path('show-payment-response?result=error&message=' . $ReasonCodeDesc));
//        }
    }

    private function addTransactionEntry($order_id, $currency_code = "USD") {
        try {

            $order = Order::where('id', $order_id)->first();

            $client_ip = request()->ip();

            if ($order != null) {
                // order exists
                $transaction_ref = (string) round(microtime(true) * 1000) . rand(100, 999);

                $transaction = new Transaction();
                $transaction->order_id = $order_id;
                $transaction->user_id = $order->user_id;
                $transaction->currency_code = $currency_code;
                $transaction->amount = $order->total_amount;
                $transaction->transaction_reference = $transaction_ref;
                $transaction->pg_response_code = null;
                $transaction->pg_response_desc = null;
                $transaction->pg_full_response = null;
                $transaction->client_ip = $client_ip;
            } else {
                // order not exists
                $log_text = ["ACTION" => "PAYMENT GATEWAY INVALID ORDER ID", "CLIENT_IP" => $client_ip, "ORDER_ID" => $order_id];
                apiSecurityLog($log_text);
                return null;
            }

            if ($transaction->save()) {
                return $transaction_ref;
            } else {
                return null;
            }
        } catch (\Exception $e) {
            Log::critical("PaymentGatewayController addTransactionEntry ERROR - Client IP = " . $client_ip);
            Log::critical($e);
            return null;
        }
    }

    private function makeSignature($request_form_data) {
        //define ('HMAC_SHA256', 'sha256');
 //$secret_key= '1577933d04474944a2085f269b4301c0fad43d08bcda4f8e8816e93ba8069bd06413e36cc67d4232be6e34035af6e88f027e506240204f9a9193108929226541cb948a84a9604c46adb995762013efd26e3b3ec2be6c4c829489dce1620d5b2875fa6bf638474c7c9ba651d39ff8c15a3d58d08fe0e54cf09948ba48be5fa65b';
//$secret_key="1577933d04474944a2085f269b4301c0fad43d08bcda4f8e8816e93ba8069bd06413e36cc67d4232be6e34035af6e88f027e506240204f9a9193108929226541cb948a84a9604c46adb995762013efd26e3b3ec2be6c4c829489dce1620d5b2875fa6bf638474c7c9ba651d39ff8c15a3d58d08fe0e54cf09948ba48be5fa65b";
$secret_key="0d269a667f004740bda044b4c60d88489eedbb8e41444b45b5bf5ad0099f54907c7bc55e084f43438b946350dbccd7b020648a0b28a14d01a8d7bb2e4fdb1ea05375b0c3a9f34e48ba99fb1c7b17fa6e1669b270ae2f42698aebbc30d8b4d314d7da42c0d4d34709be233528f1e12e93f0b27cebc72f4448872e14cb132376ad";       

return $this->signData($this->buildDataToSign($request_form_data), $secret_key);
    }

    private function signData($data, $secret_key) {
        return base64_encode(hash_hmac('sha256', $data, $secret_key, true));
    }

    private function buildDataToSign($request_form_data) {
        $signedFieldNames = explode(",", $request_form_data["signed_field_names"]);
        foreach ($signedFieldNames as $field) {
            $dataToSign[] = $field . "=" . $request_form_data[$field];
        }
        return $this->commaSeparate($dataToSign);
    }

    private function commaSeparate($dataToSign) {
        return implode(",", $dataToSign);
    }

    private static function apiLog($log_text) {
        $log_file_path = storage_path('logs/payment_gateway/payment.log');
        $log = [$log_text];
        //$orderLog = new Logger("HNB");
        //$orderLog->pushHandler(new StreamHandler($log_file_path), Logger::INFO);
        //$orderLog->info('Log', $log);
    }

}
