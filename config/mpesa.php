<?php

return [

     //Specify the environment mpesa is running, sandbox or production
     'mpesa_env' => 'sandbox',
    /*-----------------------------------------
    |The App consumer key
    |------------------------------------------
    */
    'consumer_key'   => 'A35a0jwh97yf3h4DG7HnVvYNeD9mlrhb',

    /*-----------------------------------------
    |The App consumer Secret
    |------------------------------------------
    */
    'consumer_secret' => 'U4xr7uC18ijVa1sC',

    /*-----------------------------------------
    |The paybill number
    |------------------------------------------
    */
    'paybill'         => 600982,

    /*-----------------------------------------
    |Lipa Na Mpesa Online Shortcode
    |------------------------------------------
    */
    'lipa_na_mpesa'  => '174379',

    /*-----------------------------------------
    |Lipa Na Mpesa Online Passkey
    |------------------------------------------
    */
    'lipa_na_mpesa_passkey' => 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919',

    /*-----------------------------------------
    |Initiator Username.
    |------------------------------------------
    */
    'initiator_username' => 'testapi',

    /*-----------------------------------------
    |Initiator Password
    |------------------------------------------
    */
    'initiator_password' => 'Safaricom982!',

    /*-----------------------------------------
    |Test phone Number
    |------------------------------------------
    */
    'test_msisdn ' => '254721914771',

    /*-----------------------------------------
    |Lipa na Mpesa Online callback url
    |------------------------------------------
    */
    'lnmocallback' => 'https://kws-donate.kikosi.com/api/validate?key=ertyuiowwws',

     /*-----------------------------------------
    |C2B  Validation url
    |------------------------------------------
    */
    'c2b_validate_callback' => 'https://kws-donate.kikosi.com/api/validate?key=ertyuiowwws',

    /*-----------------------------------------
    |C2B confirmation url
    |------------------------------------------
    */
    'c2b_confirm_callback' => 'https://kws-donate.kikosi.com/api/confirm?key=ertyuiowwws',

    /*-----------------------------------------
    |B2C timeout url
    |------------------------------------------
    */
    'b2c_timeout' => 'https://kws-donate.kikosi.com/api/validate?key=ertyuiowwws',

    /*-----------------------------------------
    |B2C results url
    |------------------------------------------
    */
    'b2c_result' => 'https://kws-donate.kikosi.com/api/validate?key=ertyuiowwws'

];
