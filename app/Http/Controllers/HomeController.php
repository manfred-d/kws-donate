<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;
Use App\Models\CrmCustomer;
Use App\Models\Transaction;
use App\Models\ContactCompany;
use App\Models\Adoption;
use App\Models\Product;
use Gathuku\Mpesa;
use App\Models\Campaign;
//use App\Http\Controllers\payments\cyberaource\ExternalConfiguration;
use App\Http\Controllers\payments\cyberaource\VisaController;

//use Gathuku\Mpesa\Facades\Mpesa;
define('HMAC_SHA256', 'sha256');
define('SECRET_KEY', '1449d0dbac7242eb973b3f0113a8c392d6d235d8140e46dd9af66bf4a458e666f5446976f2b442b4bcfaaca21c61e0aa69e776f242b2479f85293779300c550adae69fe1a1b24e53a7635fda0ff4bdb0274cee404de74d7987270f7e2d0b7564f6c903a0b71d46ed84ac1d9ad72e9ac57aafe839640446eaaa15a145ebe61664');

class HomeController extends Controller {

    public static function sign($params) {
        return HomeController::signData(HomeController::buildDataToSign($params), SECRET_KEY);
    }

    public static function signData($data, $secretKey) {
        return base64_encode(hash_hmac('sha256', $data, $secretKey, true));
    }

    public static function buildDataToSign($params) {
        $signedFieldNames = explode(",", $params["signed_field_names"]);
        foreach ($signedFieldNames as $field) {
            $dataToSign[] = $field . "=" . $params[$field];
        }
        
        return HomeController::commaSeparate($dataToSign);
    }

    public static function commaSeparate($dataToSign) {
        return implode(",", $dataToSign);
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
       $campaigns = Campaign::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('home',compact('campaigns'));
    }

    public function corporate() {

        $campaigns = Campaign::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('corporate', compact('campaigns'));
        //return view('corporate');
    }

    public function adopt() {

        $title = 'Latest News';
        $products = Product::with('categories')
                ->orderBy('id', 'desc')
                ->paginate(5);
        return view('frontend.pages.adopts', compact('products', 'title'));
    }

    public function adoptA(Request $request) {

        $ai = $request->get('id');
        $article = Product::with(['categories', 'tags', 'media'])->where('id', $ai)->get();
        return view('frontend.pages.adopta', compact('article', 'ai'));
    }

    public function adoptp() {

        $title = 'Latest News';
        $products = Product::with('categories')
                ->orderBy('id', 'desc')
                ->paginate(5);
        //return view('frontend.pages.adopts', compact('products', 'title'));
        return view('frontend.pages.adopt', compact('products', 'title'));
    }
  public function tembo() {
        $products = Product::with('categories')
                ->orderBy('id', 'desc')
                ->paginate(5);
        return view('frontend.pages.tembo',compact('products'));
    }
    public function fund() {

        return view('fund');
    }

    public function funddonate(Request $request) {
        $rules = [
            'first_name' => 'required',
            //'ticket_id'  => 'required|exists:tickets,id,account_id,' . \Auth::user()->account_id,
            'email' => 'email|required',
            'g-recaptcha-response' => 'required|recaptcha'
        ];
        $doners = CrmCustomer::where('email', $request->get('email'))->get();
        if (count($doners) > 0) {
            $doner = $doners;
            $donate = New Donation();
            $donate->donor_id = $doner[0]->id;
            $donate->currency = $request->get('currency');
            $donate->amount = $request->get('amount');
            $donate->campaign_id = 2;
            $donate->status = 'unpaid';
            $donate->type = 'individual';
            $donate->save();

            $transaction = new Transaction();
            $transaction->donation_id = $donate->id;

            $transaction->ref = 'KWS-D-EF-' . rand();
            $transaction->status = 'PENDING';
            $transaction->amount = $donate->amount;
            $transaction->channel = '';
            $transaction->save();
            return redirect()->route('checkout', ['sds' => $transaction->id]);
        } else {
            $doner = New CrmCustomer();
            $doner->first_name = $request->get('first_name');
            $doner->last_name = $request->get('last_name');
            $doner->status_id = 1;
            $doner->email = $request->get('email');
            //$doner->phone
            $doner->address = $request->get('address');
            $doner->save();
            $donate = New Donation();
            $donate->donor_id = $doner->id;
            $donate->currency = $request->get('currency');
            $donate->amount = $request->get('amount');
            $donate->campaign_id = 2;
            $donate->status = 'unpaid';
            $donate->type = 'individual';
            $donate->save();

            $transaction = new Transaction();
            $transaction->donation_id = $donate->id;

            $transaction->ref = 'KWS-D-EF-' . rand();
            $transaction->status = 'PENDING';
            $transaction->amount = $donate->amount;
            $transaction->channel = '';
            $transaction->save();
            return redirect()->route('checkout', ['sds' => $transaction->id]);
        }



        //return view('frontend.transactions.pay', compact('transaction'));
    }

    public function donate(Request $request) {
        $rules = [
            'first_name' => 'required',
            //'ticket_id'  => 'required|exists:tickets,id,account_id,' . \Auth::user()->account_id,
            'email' => 'email|required',
            'g-recaptcha-response' => 'required|recaptcha'
        ];
        $email = $request->get('email');
        $doners = CrmCustomer::where('email', $email)->get();
        if (count($doners) > 0) {
            $doner = $doners;
            $donate = New Donation();
            $donate->donor_id = $doner[0]->id;
            $donate->currency = $request->get('currency');
            $donate->amount = $request->get('amount');
            $donate->campaign_id = 1;
            $donate->status = 'unpaid';
            $donate->type = 'individual';
            $donate->save();

            $transaction = new Transaction();
            $transaction->donation_id = $donate->id;

            $transaction->ref = 'KWS-D-' . rand();
            $transaction->status = 'PENDING';
            $transaction->amount = $donate->amount;
            $transaction->channel = '';
            $transaction->save();
            return redirect()->route('checkout', ['sds' => $transaction->id]);
        } else {
            $doner = New CrmCustomer();
            $doner->first_name = $request->get('first_name');
            $doner->last_name = $request->get('last_name');
            $doner->status_id = 1;
            $doner->email = $request->get('email');
            //$doner->phone
            $doner->address = $request->get('address');
            $doner->save();

            $donate = New Donation();
            $donate->donor_id = $doner->id;
            $donate->currency = $request->get('currency');
            $donate->amount = $request->get('amount');
            $donate->campaign_id = 1;
            $donate->status = 'unpaid';
            $donate->type = 'individual';
            $donate->save();

            $transaction = new Transaction();
            $transaction->donation_id = $donate->id;

            $transaction->ref = 'KWS-D-' . rand();
            $transaction->status = 'PENDING';
            $transaction->amount = $donate->amount;
            $transaction->channel = '';
            $transaction->save();
            return redirect()->route('checkout', ['sds' => $transaction->id]);
        }


        //return view('frontend.transactions.pay', compact('transaction'));
    }

    public function Cdonate(Request $request) {
        $rules = [
            'first_name' => 'required',
            //'ticket_id'  => 'required|exists:tickets,id,account_id,' . \Auth::user()->account_id,
            'email' => 'email|required',
            'g-recaptcha-response' => 'required|recaptcha'
        ];


        $doners = CrmCustomer::where('email', $request->get('email'))->get();
        if (count($doners) > 0) {
            $doner = $doners;
            $company = New ContactCompany();

            $company->company_name = $request->get('company');
            $company->company_address = $request->get('address');
            $company->company_website = $request->get('website');
            $company->company_email = $request->get('email');
            $company->save();

            $donate = New Donation();
            $donate->donor_id = $doner[0]->id;
            $donate->currency = $request->get('currency');
            $donate->amount = $request->get('amount');
            $donate->campaign_id = $request->get('campaign_id');
            $donate->status = 'unpaid';
            $donate->type = 'COMPANY';
            $donate->save();

            $transaction = new Transaction();
            $transaction->donation_id = $donate->id;

            $transaction->ref = 'KWS-D-CD-' . rand();
            $transaction->status = 'PENDING';
            $transaction->amount = $donate->amount;
            $transaction->channel = '';
            $transaction->save();
            return redirect()->route('checkout', ['sds' => $transaction->id]);
        } else {
            $company = New ContactCompany();

            $company->company_name = $request->get('company');
            $company->company_address = $request->get('address');
            $company->company_website = $request->get('website');
            $company->company_email = $request->get('email');
            $company->save();
            $doner = New CrmCustomer();
            $doner->first_name = $request->get('first_name');
            $doner->last_name = $request->get('last_name');
            $doner->status_id = 1;
            $doner->email = $request->get('email');
            $doner->phone = $request->get('phone');
            $doner->address = $request->get('address');
            $doner->save();

            $donate = New Donation();
            $donate->donor_id = $doner->id;
            $donate->currency = $request->get('currency');
            $donate->amount = $request->get('amount');
            $donate->campaign_id = $request->get('campaign_id');
            $donate->status = 'unpaid';
            $donate->type = 'COMPANY';
            $donate->save();
            $transaction = new Transaction();
            $transaction->donation_id = $donate->id;

            $transaction->ref = 'KWS-D-CD-' . rand();
            $transaction->status = 'PENDING';
            $transaction->amount = $donate->amount;
            $transaction->channel = '';
            $transaction->save();
            return redirect()->route('checkout', ['sds' => $transaction->id]);
        }

        //return view('frontend.transactions.pay', compact('transaction'));
    }

    public function Adbobt(Request $request) {
        $rules = [
            'first_name' => 'required',
            //'ticket_id'  => 'required|exists:tickets,id,account_id,' . \Auth::user()->account_id,
            'email' => 'email|required',
            'g-recaptcha-response' => 'required|recaptcha'
        ];

        $doners = CrmCustomer::where('email', $request->get('email'))->get();
        if (count($doners) > 0) {
            $doner = $doners;
            $donate = New Donation();
            $donate->donor_id = $doner[0]->id;
            $donate->currency = $request->get('currency');
            $donate->amount = $request->get('amount');
            $donate->campaign_id = 4;
            $donate->status = 'unpaid';
            $donate->type = 'individual';
            $donate->save();

            $transaction = new Transaction();
            $transaction->donation_id = $donate->id;

            $transaction->ref = 'KWS-AD-' . rand();
            $transaction->status = 'PENDING';
            $transaction->amount = $donate->amount;
            $transaction->channel = '';
            $transaction->save();
            $transactions= Transaction::where('donation_id',$donate->id)->get();
            if(count($transactions)>0){
            $adobt = New Adoption();
            $adobt->adpotee_id=$doner[0]->id;
            //'adpotee_id',
            //$adopt->transaction_id=$donate->id;
            $adobt->animal_id=$request->get('animalid');
            $adobt->save();
            
            }
            return redirect()->route('checkout', ['sds' => $transaction->id]);
        } else {
            $doner = New CrmCustomer();
            $doner->first_name = $request->get('first_name');
            $doner->last_name = $request->get('last_name');
            $doner->status_id = 1;
            $doner->email = $request->get('email');
            //$doner->phone
            $doner->address = $request->get('address');
            $doner->save();
            $donate = New Donation();
            $donate->donor_id = $doner->id;
            $donate->currency = $request->get('currency');
            $donate->amount = $request->get('amount');
            $donate->campaign_id = 1;
            $donate->status = 'unpaid';
            $donate->type = 'individual';
            $donate->save();

            $transaction = new Transaction();
            $transaction->donation_id = $donate->id;

            $transaction->ref = 'KWS-AD-' . rand();
            $transaction->status = 'PENDING';
            $transaction->amount = $donate->amount;
            $transaction->channel = '';
            $transaction->save();

            $adobt = New Adoption();
            $adobt->adpotee_id = $doner->id;
            //'adpotee_id',
            $adopt->transaction_id = $transaction->id;
            $adobt->animal_id = $request->get('animalid');
            $adobt->save();
            return redirect()->route('checkout', ['sds' => $transaction->id]);
        }


        //return view('frontend.transactions.pay', compact('transaction'));
    }
    public function getdoner($param) {
        $doners = Transaction::where('id', $param)->get();
        if(!empty($doners)){
          $donete = Donation::where('id', $doners->donation_id)->get();
          $donor= CrmCustomer::where('id', $donete->donor_id)->get();
          
          return $donor->email ;
        }
    }
    public static function getdonerd($param) {
        $doners = Transaction::where('id', $param)->first();
        if(!empty($doners)){
          $donete = Donation::where('id', $doners->donation_id)->first();
          $donor= CrmCustomer::where('id', $donete->donor_id)->first();
          
          return $donor->id ;
        }
    }
    public function checkout(Request $request, $sds) {

        $transaction = Transaction::findOrFail($sds);
        if ($transaction->status == 'COMPLETED') {
            $responce = 'Transaction Already completed';
            return view('frontend.transactions.confirm', compact('transaction', 'responce'));
        } else {
            $donor= CrmCustomer::where('id', HomeController::getdonerd($transaction->id))->first();
          
            //$jwkJSON= VisaController::getToken(); 
            $jwkJSON = '';
            return view('frontend.transactions.pay', compact('transaction','jwkJSON', 'donor'));
        }
    }

    public function mpesa(Request $request) {
        /// Mpesa\Mpesa::
        // $simulateResponse=Mpesa::simulateC2B(100, "254708374149", "Testing");
        if ($request->input('mpesa')) {
            $registerUrlsResponse = Mpesa::c2bRegisterUrls();

            //$simulateResponse = Mpesa::simulateC2B(100, "254721914771", "Testing");
            $expressResponse = Mpesa::express(1, $request->input('phone'), '24242524', 'Testing Payment');

            return view('frontend.transactions.confirm', compact('expressResponse'));
        }
    }

    public function makeHttp($url, $body) {
        $url = 'https://uat.buni.kcbgroup.com/querytransaction/1.0.0/' . $url;
        $curl = curl_init();
        curl_setopt_array(
                $curl,
                array(
                    CURLOPT_URL => $url,
                    CURLOPT_HTTPHEADER => array('Content-Type:application/json', 'Authorization:Bearer !@#$%&*K1k2'),
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_POST => true,
                    CURLOPT_POSTFIELDS => json_encode($body)
                )
        );
        $curl_response = curl_exec($curl);
        curl_close($curl);
        return $curl_response;
    }

    public function voomaTransactionStatus(Request $request) {
        $body = array(
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

        $url = '/transactionInfo/203/';
        $response = $this->makeHttp($url, $body);

        return $response;
    }

}
