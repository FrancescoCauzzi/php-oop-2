<?php

$dogKibble = new ItemAnimal("Dog Kibble", 55, 10.00, 200, 34, "https://medias.ultrapremiumdirect.com/italy/production/catalog/products/001005/1.jpg?tr=w-2000,h-2000&v=2118014580", "Food", "Best choice for your dog", "Dogs", "<i class='fa-solid fa-dog'></i>");

$cannedCatMeat = new ItemAnimal("Canned Meat for Cats", 44, 8.00, 150, 23, "https://shop-cdn-m.mediazs.com/bilder/whiskas/lattine/x/g/6/800/cans_12_1000x1000_6.jpg", "Food", "High quality meat for your cat", "Cats", "<i class='fa-solid fa-cat'></i>");

// Example 1
$hamsterCage = new ItemAnimal("Hamster Cage", 23, 30.00, 50, 15, "https://cdn.shopify.com/s/files/1/0437/8866/4988/products/1-0180017814_1200x1200.jpg?v=1665671735", "Housing", "A cozy home for your hamster", "Hamsters", "<i class='fa-solid fa-hamster'></i>");

// Example 2
$fleaShampoo = new ItemAnimal("Flea Shampoo", 77, 12.00, 100, 45, "https://assets.petco.com/petco/image/upload/f_auto,q_auto/1597949-center-1", "Grooming", "Get rid of fleas on your dog or cat", "Dogs, Cats", "<i class='fa-solid fa-bug'></i>");

// Example 3
$birdCage = new ItemAnimal("Bird Cage", 15, 25.00, 30, 10, "https://m.media-amazon.com/images/I/81vSey3QLrL.jpg", "Housing", "A comfortable home for your bird", "Birds", "<i class='fa-solid fa-dove'></i>");

// Example 4
$fishFood = new ItemAnimal("Fish Food", 32, 5.00, 300, 50, "https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcSEz6OFrf_q6MZUOKRD4kk16j2c4FKXzPb30l5W8dCMa6qGMJOvRHV7OaL3zt4QwElGnvlKzBFOUxNyvuXyH4kIhlN6FCQaVkEx-Fp2epFGuFsAckOGgt5Dvg&usqp=CAE", "Food", "High quality food for your fish", "Fish", "<i class='fa-solid fa-fish'></i>");

// Example 5
$rabbitHutch = new ItemAnimal("Rabbit Hutch", 12, 80.00, 20, 8, "https://images.thdstatic.com/productImages/01d019ca-a2bb-4d2e-8dc5-1a572d251665/svn/coziwow-beds-cages-cw12f0417-c3_600.jpg", "Housing", "A spacious home for your rabbit", "Rabbits", "<i class='fa-solid fa-rabbit'></i>");

// Example 6
$birdSeed = new ItemAnimal("Bird Seed", 48, 8.00, 200, 30, "https://images.heb.com/is/image/HEBGrocery/002023494-1", "Food", "Nutritious food for your bird", "Birds", "<i class='fa-solid fa-dove'></i>");


$allItems = [$dogKibble, $cannedCatMeat, $hamsterCage, $fleaShampoo, $birdCage, $fishFood, $rabbitHutch, $birdSeed];
