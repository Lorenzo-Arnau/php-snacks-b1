<?php 
// snack1
// <!-- PHP Snack 1:
// Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
// Stampiamo a schermo tutte le partite con questo schema:
// Olimpia Milano - Cantù | 55 - 60 -->
$matches = [
    0 => [
        "squadraCasa" => "Brasil",
        'squadraOspite' => 'France',
        'resultsSqCasa' => '20',
        'resultsSqOspite' => '35',],

    1 => [
        "squadraCasa" => "Italy",
        'squadraOspite' => 'Spain',
        'resultsSqCasa' => '80',
        'resultsSqOspite' => '65',],
    
    2 => [
        "squadraCasa" => "England",
        'squadraOspite' => 'Ireland',
        'resultsSqCasa' => '55',
        'resultsSqOspite' => '55',],
];
for ($i=0; $i < sizeof($matches); $i++) { 
    print_r($matches[$i]['squadraCasa'] . ' - ' . $matches[$i]['squadraOspite'] . ' / ' . $matches[$i]['resultsSqCasa'] . ' - ' . $matches[$i]['resultsSqOspite'] . '</br>');
}
// PHP Snack 2:
// Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
// conosciamo nella documentazione) che:
// 1. name sia più lungo di 3 caratteri,
// 2. mail contenga un punto e una chiocciola
// 3. age sia un numero.
// Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

$userName = $_GET['name'];
$userMail = $_GET['mail'];
$userAge = $_GET['age'];


if(strlen($userName) > 3 && strpos($userMail, '@')!== false && strpos($userMail, '.')!== false &&  is_nan($userAge) === false) {
    $answer = 'Accesso riuscito!';
}else{
    $answer = 'Accesso negato!';
}

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <div><?php echo $answer ?></div>
</body>
</html>


