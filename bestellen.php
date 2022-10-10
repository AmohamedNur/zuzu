
<?php
if (isset($_POST['validation'])){
    if (empty($_POST ['vnaam']) && empty($_POST['anaam']) && empty($_POST['email'])
        && empty($_POST['adres']) && empty($_POST['postcode']) && empty($_POST['woonplaats'])) {
        $vnaam = filter_input(INPUT_POST,'vnaam', FILTER_SANITIZE_STRING);
        $anaam=filter_input(INPUT_POST, 'anaam', FILTER_SANITIZE_STRING);
        $email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $adres=filter_input(INPUT_POST, 'adres', FILTER_SANITIZE_STRING);
        $postcode=filter_input(INPUT_POST, 'postcode', FILTER_SANITIZE_STRING);
        $woonplaats=filter_input(INPUT_POST, 'woonplaats', FILTER_SANITIZE_STRING);
        echo "vul jouw gevens in!";

        header("loaction sushipagina.php");
    }
   //JdJ: echo "test op werking";
}
?>

<!DOCTYPE>
<html lang="nl">
<head>
    <title>Bestellen</title>
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid bg-dark">
        <div class="row">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link text-light" href="Home.php">Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-light" href="bestellen.php">Bestellen</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <img src="img/sushi.jpg" height="250">
        </div>
    </div>
    <div class="container mt-3">
        <div class="row">
            <form method="post">
                <h2>Klantgegevens</h2>

                <div class="mb-2">
                    <label for="vnaam" class="form-label">Voornaam</label>
                    <input type="text"   name="vnaam" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="anaam" class="form-label">Achternaam</label>
                    <input type="text"  name="anaam" class="form-control" name="anaam">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="adres" class="form-label">Adres</label>
                    <input type="text" name="adres" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="postcode" class="form-label">Postcode</label>
                    <input type="text" name="postcode" class="form-control">
                </div>
                <div class="mb-1">
                    <label for="woonplaats" class="form-label">Woonplaats</label>
                    <input type="text" name="woonplaats" class="form-control">
                </div>
                <br><br>
                <input type="submit" name="validation" class="btn btn-secondary btn-sm">
        </div>
    </div>
    <div class="container-fluid  bg-dark mt-5">
        <div class="row">
            <div class="col-4 open">
                <h5 class="">Contactgegevens</h5>
                <p>Restaurant ZuZu</p>
                <p>Applestraat</p>
                <p>1111AA fruit</p>
                <p>zuzu@gmail.com</p>
                <p>06-12345678</p>
            </div>
            <div class="col-4 ope">
                <h5 class="">Openinstijden</h5>
                <p>maandag:Gesloten</p>
                <p>Dinsdag:16:00-22:00</p>
                <p>Woensdag:16:00-22:00</p>
                <p>Donderdag:16:00-22:00</p>
                <p>Vrijdag:15:00-22:00</p>
                <p>Zaterdag:15:00-22:00</p>
                <p>Zondag:Gesloten</p>
            </div>
        </div>
    </div>
</body>
</html>



