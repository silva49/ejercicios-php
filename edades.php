<?php



if(isset($_POST["calcular"])) {

    $edad1 = $_POST["txtnumero1"];

    if($edad1 <=10){
        echo "<br>" . "Es un niño, y su edad es :" . $edad1 . "años";
    } elseif($edad1 <=14){
        echo "<br>" . "Es un pre-adolescente, y su edad es :" . $edad1 . "años";
    } elseif($edad1 <=18) {
        echo "<br>" . "Es un adolescente, y su edad es :" . $edad1 . "años";
    } elseif ($edad1 <=25) {
        echo "<br>" . "Es un joven, y su edad es :" . $edad1 . "años";

    } elseif($edad1 <=65){
        echo "<br>" . "Es un adulto, y su edad es :" . $edad1 . "años";
     }
     elseif($edad1 >65) {
        echo "<br>" . "Es un anciano, y su edad es :" . $edad1 . "años";
     }

}

?>