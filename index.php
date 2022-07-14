<?php

require_once __DIR__ .  "/Classes/Product.php";
require_once __DIR__ .   "./Classes/FoodProduct.php";
require_once __DIR__ .   "./Classes/PetBedProduct.php";
require_once __DIR__ .   "./Classes/GameProduct.php";

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




?>



