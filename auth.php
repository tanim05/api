<?php

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://idra-ump.com/test/app/extern/v1/authenticate',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => '{
"client_id": "pragati",
"client_secret": "admin"
}
',
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'Accept: application/json'
    ),
));

$response = curl_exec($curl);

curl_close($curl);
?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API authentication</title>
</head>

<body>
    <div id="1">
        <?php echo $response;
        ?>
    </div>

    <script src="js/api.js"></script>
</body>

</html> -->