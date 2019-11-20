<!DOCTYPE html>
<html>

<head>
    <meta http-equiv='Content-Type' content='Type=text/html; charset=utf-8'>
    <title>Primer</title>
</head>

<body>
    <?php
    $apiKljuc = "611b337e360348da9ff120030191811";
    $url = "http://api.worldweatheronline.com/premium/v1/weather.ashx?key=$apiKljuc&q=Belgrade&format=json";

    // koristimo ekstenziju cURL za rad sa HTTP zahtevima

    // da li je uspešno izvršen zahtev
    if (true) {
        // uzimamo statusni kod iz HTTP odgovora
        $httpStatusniKod = "";
        // zatvaramo cURL sesiju

        // ako je statusni kod 200
        if (true) {
            // uzimamo primljene podatke u json formatu i pretvaramo ih u php promenljivu
            $parsiranJson = "";
            $temperatura = "";
            ?>
            <h2>Rezultat:</h2>
            <p>Trenutna temperatura u Beogradu je <?php echo $temperatura; ?> &#176C.</p>
    <?php
        }
    }
    ?>
</body>

</html>