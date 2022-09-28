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
                <a class="nav-link text-light" aria-current="page" href="#">Active</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="#">Home</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link text-light" href="#">Bestellen</a>
            </li>
        </ul>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <img src="img/sushi0.png" height="250">
    </div>
</div>
<div class="container mt-3">
    <div class="row">
        <form method="post">
            <h2>Klantgegevens</h2>
            <div class="mb-2">
                <label for="voornaam" class="form-label">Voornaam</label>
                <input type="text" class="form-control" id="voornaam">
            </div>
            <div class="mb-2">
                <label for="achternaam" class="form-label">Achternaam</label>
                <input type="text" class="form-control" id="achternaam">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="text" class="form-control" id="email">
            </div>
            <div class="mb-2">
                <label for="adres" class="form-label">Adres</label>
                <input type="text" class="form-control" id="adres">
            </div>
            <div class="mb-2">
                <label for="postcode" class="form-label">Postcode</label>
                <input type="text" class="form-control" id="postcode">
            </div>
            <div class="mb-1">
                <label for="woonplaats" class="form-label">Woonplaats</label>
                <input type="text" class="form-control" id="woonplaats">
            </div>
            <br><br>
            <input type="submit" name="Verzenden" value="Verzenden">
        </form>
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


<?php
