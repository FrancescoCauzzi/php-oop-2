<?php

require_once './Models/Item.php';

// Include the db.php file
require_once('db.php');

function printCard($item)
{


    echo "<div class='card __card' style='width: 18rem;'>";
    echo "     <img src='" . $item->getImage() . "' class='card-img-top' alt='...'>";
    echo  "<div class='card-body'>";
    echo   "<h5 class='card-title'>" . $item->getName() . "</h5>";
    echo        "<p class='card-text'>" . $item->getDescription() . "</p>";
    echo "<p><span><i class='fa-solid " . $item->getCategory()->getIcon() . "'></i></span><strong> " . $item->getPrice() . " €</strong></span></p>";
    echo "<p><span><i>";
    switch (get_class($item)) {

        case 'Food':
            echo "Ingredients: " . $item->getIngredients();
            break;

        case 'Accessory':
            echo "Utility: " .  $item->getAccessory();
            break;

        default:
            echo "<br>";
            break;
    };
    echo "</i></span>";



    echo        "</div>";
    echo      "</div>";
};








?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pet Shop Products</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 56px;
            z-index: 2;

        }

        header {
            height: 60px;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 2;
        }

        main {
            padding: 50px 0 100px 0;
            overflow-y: hidden;
            background-color: #DCDCDC;
            min-height: calc(100vh - 116px);

        }

        .__card {
            width: calc(100% / 4 * 1 - (10px / 4 *3));
            min-width: 150px;
        }

        .__my-ctn {
            gap: 10px;
        }
    </style>

</head>

<body>
    <header>

        <?php
        include './Views/partials/header.php';
        ?>
    </header>
    <main>

        <div class="d-flex flex-wrap container py-4 __my-ctn justify-content-center">
            <?php
            // Start the session
            session_start();


            $_SESSION['allItems'] = $allItems;


            foreach ($_SESSION['allItems'] as $index => $item) {
                printCard($item);
            };
            ?>





        </div>
    </main>
    <footer>
        <?php
        include './Views/partials/footer.php';
        ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>