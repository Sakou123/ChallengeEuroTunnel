<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=stylesheet href="assets/css/style.css" type="text/css"/>
    <title>Eurotunnel Test</title>
</head>
<body>

<?php

$dirname = './SimplonBoulogne/Json';
$dir = opendir($dirname);
$jsonfinal = [];
class Passage {
    public $matricule = "";
    public $adAccountID = "";
    public $currentStep = "";
}

while($file = readdir($dir)) {

    if (pathinfo($dirname.$file)['extension'] == 'json') {
        $string = file_get_contents($dirname.'/'.$file);
        $array = json_decode($string,true);
        $pas = new Passage();

        $pas->matricule = $array['PERNR'];
        $pas->adAccountID = $array['ObjectSID'];
        $pas->currentStep = $array['Current_Step']['Name'];
        // print_r($pas);
        $pas = json_encode($pas);
        echo '<br>'.$pas;
        array_push($jsonfinal, $pas);

        $url = 'http://localhost:5000/api/v1/ITAccount/';
        $data = explode(' ',$pas);
        $options = array(
            'http' => array(
            'header'  => "Content-type: application/json",
            'method'  => 'POST',
            'content' => $pas,
            'ignore_errors' => true,
            )
        );
        $context  = stream_context_create($options);
        file_get_contents($url, false, $context);
    }
}
closedir($dir);

echo '<br><br>';
print_r($jsonfinal);

?>

<script>
</script>

</body>
</html>







