<?php

define ('HMAC_SHA256', 'sha256');
define ('SECRET_KEY', '20e1d24adeeb4259afb1fdec47fdc06487d5cd8f4fbe43938dbda9f11a505a4f443367d09b9144ceab5f3895b2bf70591c64dc62faf5416f8a2d05a5bd5788f7793e4b5a17aa41a9b6cdf25f9b80ffedfbf7ba7ed727473a8cf48e54899d9238ee0c1373e5ea4c3ebb828bc5f411a2015e0b34f59d1f4d79919cc6a357f98b38');

function sign ($params) {
  return signData(buildDataToSign($params), SECRET_KEY);
}

function signData($data, $secretKey) {
    return base64_encode(hash_hmac('sha256', $data, $secretKey, true));
}

function buildDataToSign($params) {
        $signedFieldNames = explode(",",$params["signed_field_names"]);
        foreach ($signedFieldNames as $field) {
           $dataToSign[] = $field . "=" . $params[$field];
        }
        return commaSeparate($dataToSign);
}

function commaSeparate ($dataToSign) {
    return implode(",",$dataToSign);
}

?>
