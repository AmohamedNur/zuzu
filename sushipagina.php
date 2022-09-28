<!DOCTYPE>
<html lang="nl">
<head>
    <title>sushipigna</title>
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
                <a class="nav-link active text-light" aria-current="page" href="#">Active</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="#">Home</a>
            </li>
            <li class="nav-item">
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
        <form>
            <h2>Sudshi's bestellen</h2>
            <div class="mb-2">
                <label for="exampleInputMaki" class="form-label">Maki Komkommer (max = 5)</label>
                <input type="Voornaam" class="form-control" id="exampleInputVoornaam">
            </div>
            <div class="mb-2">
                <label for="exampleInputMaki" class="form-label">Maki Avocado (max = 10)</label>
                <input type="Achternaam" class="form-control" id="exampleInputAchternaam">
            </div>
            <div class="mb-3">
                <label for="exampleInputNigiri" class="form-label">Nigiri zalm (max = 10)</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-2">
                <label for="exampleInputPhila" class="form-label">Pliadelphia Roll (max = 5)</label>
                <input type="adres" class="form-control" id="exampleInputAdres">
            </div>
            <div class="mb-2">
                <label for="exampleInputSpicy" class="form-label">Spicy Tuna Roll (max = 5)</label>
                <input type="postcode" class="form-control" id="exampleInputPostcode">
            </div>
            <div class="mb-1">
                <label for="exampleInputCali" class="form-label">California Roll (max = 8)</label>
                <input type="Woonplaats" class="form-control" id="exampleInputWoonplaats">
            </div>
            <button type="button" class="btn btn-dark btn-sm">Verzend</button>
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
