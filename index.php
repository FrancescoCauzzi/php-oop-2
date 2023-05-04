<?php




?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pet Shop Products</title>
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