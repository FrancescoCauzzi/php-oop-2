<?php

require_once __DIR__ . "/Models/Item.php";
require_once __DIR__ . "/Models/Food.php";
require_once __DIR__ . "/Models/Accessory.php";
require_once __DIR__ . "/Traits/Discountable.php";

$categories = [
    new Category("dog", "fa-dog"),
    new Category("cat", "fa-cat"),
    new Category("fish", "fa-cat"),
    new Category("hamster", "fa-mouse-field"),
    new Category("bird", "fa-dove"),
    new Category("rabbit", "fa-rabbit"),
];

$dogKibble = new Food("Dog Kibble", 55, 10.00, "https://medias.ultrapremiumdirect.com/italy/production/catalog/products/001005/1.jpg?tr=w-2000,h-2000&v=2118014580", "Best choice for your dog", $categories[0], 'Meat');

$dogKibble->setDiscount(40);

$cannedCatMeat = new Food("Canned Meat for Cats", 44, 8.00, "https://shop-cdn-m.mediazs.com/bilder/whiskas/lattine/x/g/6/800/cans_12_1000x1000_6.jpg", "High quality meat for your cat", $categories[1], "Meat, seeds");

try {
    $cannedCatMeat->setDiscount(10);
} catch (Exception $e) {
    echo "Errore nel settare lo sconto: " . $e->getMessage();
}

$hamsterCage = new Accessory("Hamster Cage", 23, 30.00, "https://cdn.shopify.com/s/files/1/0437/8866/4988/products/1-0180017814_1200x1200.jpg?v=1665671735",  "A cozy home for your hamster", $categories[3], "Housing");


$fleaShampoo = new Accessory("Flea Shampoo", 77, 12.00, "https://assets.petco.com/petco/image/upload/f_auto,q_auto/1597949-center-1", "Get rid of fleas on your dog ", $categories[0], "Grooming");


$birdCage = new Accessory("Bird Cage", 15, 25.00, "https://m.media-amazon.com/images/I/81vSey3QLrL.jpg", "A comfortable home for your bird", $categories[4], "Housing");

// Example 4
$fishFood = new Food("Fish Food", 32, 5.00, "https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcSEz6OFrf_q6MZUOKRD4kk16j2c4FKXzPb30l5W8dCMa6qGMJOvRHV7OaL3zt4QwElGnvlKzBFOUxNyvuXyH4kIhlN6FCQaVkEx-Fp2epFGuFsAckOGgt5Dvg&usqp=CAE", "High quality food for your fish", $categories[2], "Seeds, krill");

// Example 5
$rabbitHutch = new Accessory("Rabbit Hutch", 12, 80.00, "https://images.thdstatic.com/productImages/01d019ca-a2bb-4d2e-8dc5-1a572d251665/svn/coziwow-beds-cages-cw12f0417-c3_600.jpg", "A spacious home for your rabbit", $categories[5], "Housing");

$rabbitHutch->setDiscount(5);

// Example 6
$birdSeed = new Food("Bird Seed", 48, 8.00, "https://images.heb.com/is/image/HEBGrocery/002023494-1", "Nutritious food for your bird", $categories[4], "Seeds");


$allItems = [$dogKibble, $cannedCatMeat, $hamsterCage, $fleaShampoo, $birdCage, $fishFood, $rabbitHutch, $birdSeed];
