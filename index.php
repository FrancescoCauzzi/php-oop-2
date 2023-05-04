<?php

require_once './Models/Item.php';
require_once './Models/ItemDogs.php';
require_once './Models/ItemCats.php';




?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pet Shop Products</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css" integrity="sha512-FOV7TfTJXOY3COVBjK+/l8pJlRkcygMKa2j4aGx8s6enEcnXeBh6+0f6Kz1pwfybf1hL0p0o+EGxMjcjps/gIw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        }

        nav {
            height: 60px;
        }

        main {
            height: calc(100vh - 116px);
            background-color: #DCDCDC;
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

        <div class="container py-4 __my-ctn">
            <?php
            // Start the session
            session_start();

            // Include the db.php file
            require_once('db.php');


            $_SESSION['allItems'] = $allItems;


            foreach ($_SESSION['allItems'] as $index => $item) {
                var_dump($item);
            }
            ?>

            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>




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