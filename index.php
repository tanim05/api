<?php
include "auth.php";
// echo $response;
$obj = json_decode($response);
// echo '<br>';
// echo "Access Token : '" . $obj->access_token . "'";
// echo '<br>';
// echo "Token Type : " . $obj->token_type;
// echo '<br>';
// echo "Access Token Expire in : " . $obj->access_token_expire_in;
// echo '<br>';
// echo "Refresh Token Expire in : " . $obj->refresh_token_expire_in;
// echo '<br>';

$token_type = $obj->token_type;
$access_token = $obj->access_token;

if (false) {
    // if (isset($_POST['submit'])) {
    //$sql = "SELECT * FROM students";          
    //while($row = mysqli_fetch_array($sql)){


    $mrSerialNumber[0] = 111235;
    $officeBranchCode[0] = 11214;
    $officeBranchName[0] = 11125;
    $mrNumber[0] = 11246;
    $mrDate[0] = "1112-01-02";
    $classInsurance[0] = 11;
    $insuredName[0] = 11;
    $insuredAddress[0] = 11;
    $insuredMobile[0] = 11;
    $insuredEmail[0] = 11;
    $modeOfPayment[0] = 11;
    $paymentDetail[0] = 11;
    $coverNoteNumber[0] = 11;
    $policyNumber[0] = 11;
    $addendumNumber[0] = 11;
    $endorsementNumber[0] = 11;
    $netPremium[0] = 11;
    $vat[0] = 11;
    $stamp[0] = 11;
    $totalPremium[0] = 11;
    $chequeDrawnOn[0] = 11;
    $chequeDate[0] = "2021-01-02";
    $depositDate[0] = "2021-01-02";
    $depositedToBank[0] = "2021-01-02";
    $depositedToBranch[0] = "2021-01-02";
    $depositedToAccountNumber[0] = 11;
    $mfs[0] = 11;
    $mfsAccountNumber[0] = 11;
    $isCoInsurance[0] = 11;
    $isLeader[0] = 11;
    $financingBankName[0] = 11;
    $financingBankAddress[0] = 11;
    $financingBankEmail[0] = 11;
    $financingBankMobile[0] = 11;
    $isMultiDocument[0] = 11;
    $bankGuaranteeNumber[0] = 11;

    $mrSerialNumber[1] = 111235;
    $officeBranchCode[1] = 11214;
    $officeBranchName[1] = 11125;
    $mrNumber[1] = 11250;
    $mrDate[1] = "1112-01-02";
    $classInsurance[1] = 11;
    $insuredName[1] = 11;
    $insuredAddress[1] = 11;
    $insuredMobile[1] = 11;
    $insuredEmail[1] = 11;
    $modeOfPayment[1] = 11;
    $paymentDetail[1] = 11;
    $coverNoteNumber[1] = 11;
    $policyNumber[1] = 11;
    $addendumNumber[1] = 11;
    $endorsementNumber[1] = 11;
    $netPremium[1] = 11;
    $vat[1] = 11;
    $stamp[1] = 11;
    $totalPremium[1] = 11;
    $chequeDrawnOn[1] = 11;
    $chequeDate[1] = "2021-01-02";
    $depositDate[1] = "2021-01-02";
    $depositedToBank[1] = "2021-01-02";
    $depositedToBranch[1] = "2021-01-02";
    $depositedToAccountNumber[1] = 11;
    $mfs[1] = 11;
    $mfsAccountNumber[1] = 11;
    $isCoInsurance[1] = 11;
    $isLeader[1] = 11;
    $financingBankName[1] = 11;
    $financingBankAddress[1] = 11;
    $financingBankEmail[1] = 11;
    $financingBankMobile[1] = 11;
    $isMultiDocument[1] = 11;
    $bankGuaranteeNumber[1] = 11;






    for ($i = 0; $i <= 1; $i++) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://idra-ump.com/test/app/extern/v1/money-receipt',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
        "mrSerialNumber": "' . $mrSerialNumber[$i] . '",
        "officeBranchCode": "' . $officeBranchCode[$i] . '",
        "officeBranchName": "' . $officeBranchName[$i] . '",
        "mrNumber": "' . $mrNumber[$i] . '",
        "mrDate": "' . $mrDate[$i] . '",
        "classInsurance": "' . $classInsurance[$i] . '",
        "insuredName": "' . $insuredName[$i] . '",
        "insuredAddress": "' . $insuredAddress[$i] . '",
        "insuredMobile": "' . $insuredMobile[$i] . '",
        "insuredEmail": "' . $insuredEmail[$i] . '",
        "modeOfPayment": "' . $modeOfPayment[$i] . '",
        "paymentDetail": "' . $paymentDetail[$i] . '",
        "coverNoteNumber": "' . $coverNoteNumber[$i] . '",
        "policyNumber": "' . $policyNumber[$i] . '",
        "addendumNumber": "' . $addendumNumber[$i] . '",
        "endorsementNumber": "' . $endorsementNumber[$i] . '",
        "netPremium": "' . $netPremium[$i] . '",
        "vat": "' . $vat[$i] . '",
        "stamp": "' . $stamp[$i] . '",
        "totalPremium": "' . $totalPremium[$i] . '",
        "chequeDrawnOn": "' . $chequeDrawnOn[$i] . '",
        "chequeDate": "' . $chequeDate[$i] . '",
        "depositDate": "' . $depositDate[$i] . '",
        "depositedToBank": "' . $depositedToBank[$i] . '",
        "depositedToBranch": "' . $depositedToBranch[$i] . '",
        "depositedToAccountNumber": "' . $depositedToAccountNumber[$i] . '",
        "mfs": "' . $mfs[$i] . '",
        "mfsAccountNumber": "' . $mfsAccountNumber[$i] . '",
        "isCoInsurance": "' . $isCoInsurance[$i] . '",
        "isLeader": "' . $isLeader[$i] . '",
        "financingBankName": "' . $financingBankName[$i] . '",
        "financingBankAddress": "' . $financingBankAddress[$i] . '",
        "financingBankEmail": "' . $financingBankEmail[$i] . '",
        "financingBankMobile": "' . $financingBankMobile[$i] . '",
        "isMultiDocument": "' . $isMultiDocument[$i] . '",
        "bankGuaranteeNumber": "' . $bankGuaranteeNumber[$i] . '"
        }',
            CURLOPT_HTTPHEADER => array(
                'Content-Type:  application/json',
                'Accept:  application/json',
                'Authorization: ' . $token_type . ' ' . $access_token . ''
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);

        echo '<br>';
        echo 'Data Number : ' . $i;
        echo '<br>';
        $obj = json_decode($response);
        if ($obj->status == true) {
            echo "mrTrackingId : " . $obj->mrTrackingId;
            echo '<br>';
            echo "Status : True";
        } else
            echo "Status : False";
        echo '<br>';
        echo "Code : " . $obj->code;
        echo '<br>';
        echo "Message : " . $obj->message;
        echo '<br>';



        //echo $response;
    }
}
