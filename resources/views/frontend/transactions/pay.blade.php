@extends('layouts.frontend')
@section('content')

  <section class="section promo-primary">
    <picture>
        <source srcset="/img/donation.jpg" media="(min-width: 992px)"><img class="img--bg" src="/img/donation.jpg" alt="img">
    </picture>
    <div class="container">
        <div class="row">
            <div class="col-auto">
                <div class="align-container">
                    <div class="align-container__item">
                        <h1 class="promo-primary__title"><span>Check </span> <span>Out</span></h1>
                        <span class="promo-primary__pre-title">Make payment</span>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</br>

<div class="container">
  
    <div class="row justify-content-center mb-4">

        <div class="col-md-8">
            <div class='nav flex-row'>
                <div class="row justify-content-center">

                    <div class="col-md-3">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" style='width: 100px' role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-mpesa" role="tab" aria-controls="v-pills-home" aria-selected="true">MPesa</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Vooma</a>
                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Visa/MasterCard</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Lipa na Mpesa</a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-mpesa" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <h2> Mpesa </h2>

                                <form method="POST" class="form"  action="{{ route('lipa') }}">
                                    @csrf
                                    <div class="auth-message font-semibold">Enter your MPESA number below to receive STK Push and enter your password on your mobile phone</div>
                                    <div class="row card-body">
                                        <div class="col-12-sm">
                                            <div class="form-group">
                                                <div class="input-wrap">
                                                    <input type="tel" name="phone" autocomplete="cc-number" placeholder="2547XXXXXXXX" required="" class="input input--card " value="0721914771"> <label forhtml="cardNumber" class="label label--floating input-group-prepend">Mpesa Number</label>
                                                    <input type="hidden" name="amount" value="1">
                                                    <input type="hidden" name="account" value="{{ $transaction->ref }}">
                                                    <div class="pesapay-card-logo icon icon-mpesa"></div>
                                                    <div class="form-group-error"></div>

                                                </div>

                                            </div>

                                        </div>
  <div class="pay-section">
                                        <button class="form-control" type="submit" name="mpesa">Send payment request for KES {{ $transaction->amount*108 }}</button>
                                    </div>
                                    </div>
                                  
                                </form>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <h2>KCB Vooma</h2>
                                  <div class="card">
  <div class="card-body">
      <p>To pay go to vooma app paybill option enter details below.</p>
      <p>PAYBILL NO.: 98989</p>
      <p>Account:   {{ $transaction->ref }}</p>
       <p>Amount:   {{ $transaction->amount }}</p>
  </div>
</div>
                                <form class="form">
                                    <div class="auth-message font-semibold">Enter your Vooma number below to complete transaction</div>

                                    <div class="row card-body">
                                        <div class="col-12-sm">
                                            <div class="form-group">
                                                <div class="input-wrap">
                                                    <input type="text" name="transactionID" autocomplete="cc-number" placeholder="FT20114BG8" required="" class="input input--card " value=""> <label forhtml="cardNumber" class="label label--floating">Vooma transactionID</label>
                                                    <div class="pesapay-card-logo icon icon-mpesa"></div>
                                                    <div class="form-group-error"></div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                    <div class="pay-section">
                                        <button class="form-control" type="submit">Validate payment request for KES {{ $transaction->amount }}</button>
                                    </div>
                                </form>


                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                  <div class="row ">
                                <h2>Visa/MasterCard </h2>
                                <div class="auth-message font-semibold">You will be redirected to payment page</div>
                                <div class="panel-body">    
                                    <form class="form form-horizontal" id="payment_confirmation" action="/proceedPaymentHNB" method="post"/>

                                    @csrf
                                  
                                        <div class="col-xs-12 card-body p-6 mb-4">
                                            <div class="form-group">
                                                <div class="input-wrap">
                                                    <input type="hidden" name="access_key" value="c37637f56a37346fb28b848f2fc8606c">
                                                    <input type="hidden" name="profile_id" value="kcb_00387099_kes">
                                                    <input type="hidden" name="transaction_uuid" value="<?php echo uniqid() ?>">
                                                    <input type="hidden" name="signed_field_names" value="access_key,profile_id,transaction_uuid,signed_field_names,unsigned_field_names,signed_date_time,locale,transaction_type,reference_number,amount,currency">
                                                    <input type="hidden" name="email" value="<?php echo $donor->email ?>">
                                                     <input type="hidden" name="unsigned_field_names">
                                                      <input type="hidden" name="email" value="<?php echo $donor->email ?>">
                                                      <input type="hidden" name="tid" value="{{ $transaction->id }}">
                                                    <input type="hidden" name="signed_date_time" value="<?php echo gmdate("Y-m-d\TH:i:s\Z"); ?>">
                                                    <input type="hidden" name="locale" value="en">
                                                    <fieldset>
                                                        <legend>Payment Details</legend>
                                                        <div id="paymentDetailsSection" class="section">
                                                            <span class="form__label-text">Transaction Type:</span><input class="form__field" type="hidden" name="transaction_type" value="authorization"  size="25" readonly><br/>
                                                            <span class="form__label-text">Reference Number:{{ $transaction->ref }}</span><input class="form__field" type="hidden" name="reference_number" value="{{ $transaction->ref }}" size="25"readonly><br/>
                                                            <span class="form__label-text">Amount:{{ $transaction->amount }}</span><input class="form__field" type="hidden" name="amount" size="25" value="{{ $transaction->amount }}" readonly><br/>
                                                            <span class="form__label-text">Currency:{{ $transaction->donation->currency ?? '' }}</span><input class="form__field" type="hidden" value="{{ $transaction->donation->currency ?? '' }}" name="currency" size="25" readonly><br/>

                                                            <input type="hidden" id="signature" name="signature" value="bPwPo0C6e1mct082EZaTnso3hix6KVhCcAoVcrvWRKA="/>
                                                            <input class="submit-btn" type="submit" value="Pay Via Card">
                                                        </div>

                                                    </fieldset>

                                                    </diiv>
                                                </div>              
                                            </div>

                                        </div>

                                    </div>
                                    
                                    
                                        </form>

                                    </div>
                                </div>
                           
                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                   <div class="panel">
                                <div class="panel panel-info">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-lock"></span> Payment Form
                </div>
                <div class="pb-80">
                    <div class="form-row ">
                                        <div class="col-12">
                    <form class="form-horizontal" accept-charset="UTF-8" action="receipt.php" autocomplete="off" method="post" novalidate="novalidate" id="payment-form">
                         @csrf
                        <div class="form-group">
                            <label for="cardType">Card Type</label>
                            <select class="form-control" id="cardType" name="cardType">
                                <option value="001">VISA</option>
                                <option value="002">MASTERCARD</option>
                                <option value="003">AMEX</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cardNumber">Card number</label>
                            <input type="text" id="cardNumber" class="form-control" maxlength="19" />
                        </div>
                        <div class="form-group">
                            <label for="cvn">Security code</label>
                            <input type="text" id="cvn" name="cvn" class="form-control" maxlength="4" />
                        </div>
                        <div class="form-group">
                            <label for="cardExpirationMonth">Expiration Date</label>
                            <div class="row">
                                <div class="col-xs-6">
                                    <select class="form-control" name="expiryMonth" id="expiryMonth">
                                        <option value="01">01 (JAN)</option>
                                        <option value="02">02 (FEB)</option>
                                        <option value="03">03 (MAR)</option>
                                        <option value="04">04 (APR)</option>
                                        <option value="05">05 (MAY)</option>
                                        <option value="06">06 (JUN)</option>
                                        <option value="07">07 (JUL)</option>
                                        <option value="08">08 (AUG)</option>
                                        <option value="09">09 (SEP)</option>
                                        <option value="10">10 (OCT)</option>
                                        <option value="11">11 (NOV)</option>
                                        <option value="12">12 (DEC)</option>
                                    </select>
                                </div>
                                <div class="col-xs-6">
                                    <select class="form-control" name="expiryYear" id="expiryYear">
                                        <option>2020</option>
                                        <option>2021</option>
                                        <option>2022</option>
                                        <option>2023</option>
                                        <option>2024</option>
                                        <option>2025</option>
                                        <option>2026</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!--HIDDEN INPUT FOR TOKENISED RESPONSE-->
                        <input type="hidden" id="flexresponse" name="flexresponse">

                        <!-- Button to attach our tokenise handler to. Note that it is NOT a submission input or button -->
                        <button type="button" id="pay-btn" class="btn btn-lg btn-block btn-primary">Pay Now</button>
                    </form>
                </div>
            </div>
        
             </div>
            </div>                    

        <!-- For production usage we recommend retrieving and validating the SDK from a validated source to your own servers -->
        <script src="https://cdn.jsdelivr.net/npm/@cybersource/flex-sdk-web"></script>
        <script>
            console.log(window.FLEX.version);

            var jwk = <?php echo $jwkJSON; ?> ;
            console.log('Key generated: '+jwk);
            console.log('Key ID: '+jwk.kid);
            console.log(JSON.stringify(jwk));

            var payButton = document.querySelector('#pay-btn');
            var flexResponse = document.querySelector('#flexresponse');


            var responseHandler = function (response) {
                if (response.error) {
                    alert('There has been an error!');
                    console.log(response);

                    payButton.disabled = false;
                    payButton.innerHTML = 'Pay Now';
                    return;
                }

                console.log('Token generated: ');
                console.log(JSON.stringify(response));

                // At this point the token may be added to the form
                // as hidden fields and the submission continued
                flexResponse.value = JSON.stringify(response);
                document.querySelector('#payment-form').submit();

            }

            payButton.onclick = function () {
                payButton.disabled = true;
                payButton.innerHTML = "Processing...";

                var options = {
                    kid: jwk.kid,
                    keystore: jwk,
                    cardInfo: {
                        cardNumber: document.querySelector('#cardNumber').value,
                        cardType: document.querySelector('#cardType').value,
                        expiryMonth: document.querySelector('#expiryMonth').value,
                        expiryYear: document.querySelector('#expiryYear').value
                    },
                    encryptionType: 'rsaoaep256'
                    // production: true // without specifying this tokens are created in test env
                };

                FLEX.createToken(options, responseHandler);
            };
         </script>
                                
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>


            </div>




            <div class="col-md-4">

                <div class="card">
                    <div class="card-header">
                        {{ trans('Make Payment') }} {{ trans('cruds.transaction.title') }}
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <div class="form-group">

                            </div>
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.transaction.fields.id') }}
                                        </th>
                                        <td>
                                            {{ $transaction->id }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.transaction.fields.donation') }}
                                        </th>
                                        <td>
                                            {{ $transaction->donation->donation_id ?? '' }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.transaction.fields.ref') }}
                                        </th>
                                        <td>
                                            {{ $transaction->ref }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.transaction.fields.status') }}
                                        </th>
                                        <td>
                                            {{ $transaction->status }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.transaction.fields.amount') }}
                                        </th>
                                        <td>
                                            {{ $transaction->donation->currency ?? '' }} {{ $transaction->amount }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.transaction.fields.channel') }}
                                        </th>
                                        <td>
                                            {{ $transaction->channel }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="form-group">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endsection