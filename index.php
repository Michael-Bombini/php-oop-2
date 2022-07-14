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


$userUno = new User("Mario" , "Rossi" , "mariorossi@gmail.com"  , "MarioRossi111" , true , "1237637384272632" , "100" , "2026");

$userDue = new User("Luigi" , "Verdi" , "luigiverdi@gmail.com"  , "LuigiVerdi222" , false , "6292173483261275" , "166" , "2020");


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

echo "<h1>";
if(($userUno->isExpired($userUnoExpire))){
    echo "La carta di userUno è scaduta";
}
else 
    echo "La carta di userDue non è scaduta";

echo "<br>";

    if(($userDue->isExpired($userDueExpire))){
        echo "La carta di userDue è scaduta";
        
    }
    else 
        echo "La carta di userDue non è scaduta";
    

echo "</h1>";

echo "<h2>Utente Uno</h2>";
var_dump($userUno);
echo "<h2>Utente Due</h2>";
var_dump($userDue);



    
    

?>



