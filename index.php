<?php
/* if, switch, match */
$stock =0;
$orderd=3;

//IF문
if ($stock>0){
    $message="In stock";
}
elseif($orderd>0){
    $message="coming soon";
}
else{
    $message ="Sold out!";
}

//SWITCH문
$day ='tuesday';

switch($day){
    case 'monday':
        $offer='20% off chocolate';
        break;
    case 'tuesday':
        $offer='20% off mints';
    break;
        defualt:
        $offer='3+1 mints';
}
//MATCH
$month='march';

$mth_offer=match($month){
    'january, february' =>'20% off mints',
    'march'             =>'30% off chocolate',
    default             =>'10% off whole order',
}


?>
<link rel="stylesheet" href="css/styles.css">

        <?php require_once 'includes/header.php' ?>

        <h2>Chocolate</h2>
        <p><?=$message ?></p>

        <h2>offers on <?= $day; ?></h2>
        <p><?= $offer; ?></p>

        <h2>offers in <?= $month; ?></h2>
        <p><?= $mth_offer; ?></p>

        
        <?php include 'includes/footer.php'?>
