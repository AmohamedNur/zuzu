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
                <a class="nav-link active" aria-current="page" href="#">Active</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Bestellen</a>
            </li>
        </ul>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <img src="img/sushi-36.jpg" height="250">
    </div>
</div>
<div class="container mt-3">
    <div class="row">
        <form>
            <h2>Klantgegevens</h2>
            <div class="mb-2">
                <label for="exampleInputVoornaam" class="form-label">Voornaam</label>
                <input type="Voornaam" class="form-control" id="exampleInputVoornaam">
            </div>
            <div class="mb-2">
                <label for="exampleInputachternaam" class="form-label">Achternaam</label>
                <input type="Achternaam" class="form-control" id="exampleInputAchternaam">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-2">
                <label for="exampleInputAdres" class="form-label">Adres</label>
                <input type="adres" class="form-control" id="exampleInputAdres">
            </div>
            <div class="mb-2">
                <label for="exampleInputPostcode" class="form-label">Postcode</label>
                <input type="postcode" class="form-control" id="exampleInputPostcode">
            </div>
            <div class="mb-1">
                <label for="exampleInputWoonplaats" class="form-label">Woonplaats</label>
                <input type="Woonplaats" class="form-control" id="exampleInputWoonplaats">
            </div>
            <button type="button" class="btn btn-dark btn-sm">
                <a href="sushipagina.php"> Ga naar sushi's</a>
            </button>
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
