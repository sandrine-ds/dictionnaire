<?php


$traducteurFrToEn = array(
    "un" => "the",
    "chien" => "dog",
    "moche" => "ugly"
);
$traducteurEnToFr = array_flip($traducteurFrToEn);

$lhtmlmot = "";


if (!empty($_POST['mot']))
    {
        if($traducteurFrToEn = $traducteurEnToFr) //pas encore correcte
        {
        if (array_key_exists ($_POST["mot"], $traducteurFrToEn))
         {

            $chaine = $_POST['mot'];
            $sens = $traducteurFrToEn[$chaine];
    
            echo "$chaine signifie $sens";
        }
        

    }
   
}

?>