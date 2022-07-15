<?php

require_once __DIR__ .  "/Classes/Product.php";
require_once __DIR__ .   "./Classes/FoodProduct.php";
require_once __DIR__ .   "./Classes/PetBedProduct.php";
require_once __DIR__ .   "./Classes/GameProduct.php";
require_once __DIR__ .   "./Classes/User.php";
require_once __DIR__ .   "./Classes/CreditCard.php";


/*
CREAZIONE INSTANZE CLASSI
*/

$crocchetteCani = new FoodProduct
("crocchette" , "4.99€" , 
"Crocchette per cani prodotte dalla migliore azienda di crocchette d'italia" , "23/11/2024" , 
["Ingrediente 1" , "Ingrediente 2" , "Ingrediente 3"]);

$crocchetteGatti = new FoodProduct("crocchette" , "4.99€" , 
"Crocchette per gatti prodotte dalla migliore azienda di crocchette d'italia" , "05/03/2023" , 
["Ingrediente 1" , "Ingrediente 2" , "Ingrediente 3"]);

$cucciaCani = new PetBedProduct
("Cuccia" , "27.99" , 
"Cuccia di grande dimensioni lavabile per cani" , 
"Grigio" , "Poliestere" );

$pallaRimbalzante = new GameProduct
("Palla" , "7.99€" , "Palla per cani rimbalzante resistente in gomma naturale" , "Verde" , "Gomma Naturale");


$userUno = new User("Mario" , "Rossi" , "mariorossi@gmail.com"  , "MarioRossi111" , true , "1237637384272632" , "100" , "2020");

$userDue = new User("Luigi" , "Verdi" , "luigiverdi@gmail.com"  , "LuigiVerdi222" , false , "6292173483261275" , "166" , "2023");

$userTre = new User("giacomo" , "gialli" , "giacomogialli@gmail.com"  , "giacomogialli6" , true , "7652747615627422" , "123" , 2020);

$userUno->setCart($crocchetteCani);
$userUno->setCart($crocchetteGatti);
$userUno->setCart($pallaRimbalzante);
$userUno->setCart($pallaRimbalzante);
$userDue->setCart($crocchetteGatti);
$userDue->setCart($cucciaCani);
$userDue->setCart($pallaRimbalzante);
$userDue->setCart($pallaRimbalzante);

$userUnoExpire = $userUno->getExpiryDate();
$userDueExpire = $userDue->getExpiryDate();
$userTreExpire = $userTre->getExpiryDate();


echo "<h1>";

try{

    if(($userUno->isExpired($userUnoExpire))){
    echo "La carta di userUno non è scaduta";
}
else 
echo "La carta di userUno è scaduta";

}

catch(Exception $e){
    echo "I dati passati non sono di tipo stringa" ;
}



echo "<br>";

try{
    if(($userDue->isExpired($userDueExpire))){
        echo "La carta di userDue non è scaduta";
        
    }
    else 
    echo "La carta di userDue è scaduta";
    
}
catch(Exception $e){
    echo "I dati passati non sono di tipo stringa" ;
}

echo "<br>";

try{
    if(($userTre->isExpired($userTreExpire))){
        echo "La carta di userTre non è scaduta";
        
    }
    else 
    echo "La carta di userTre è scaduta";
    
}
catch(Exception $e){
    echo "I dati passati non sono di tipo stringa" ;
}





echo "</h1>";

echo "<h2>Utente Uno</h2>";
var_dump($userUno);
echo "<h2>Utente Due</h2>";
var_dump($userDue);



    
    

?>



