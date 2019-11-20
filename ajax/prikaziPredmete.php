<?php
// proveravamo da li je prosleđen parametar pod ključem ID u GET zahtevu
if (!isset($_GET['id'])) {
    echo "Parametar ID nije prosleđen!";
} else {
    // ako jeste prosleđen, čuvamo ga u promenljivoj $pomocna
    if ($_GET["id"] == -1) {
        echo "";
    } else {
        $pomocna = $_GET["id"];
        //uspostavljanje konekcije
        include "../konekcija.php";

        //upit za vraćanje podataka o predmetu koja je selektovan (preko ID-ja)
        $upit = "";

        // čuvamo rezultat prethodnog upita
        $rezultat = "";

        //ispis naziva kolona u tabeli
        echo "<table>
                <thead>
                    <tr>
                        <th>Naziv</th>
                        <th>Semestar</th>
                        <th>Vrsta</th>
                        <th>Broj prijavljenih</th>
                    </tr>
                </thead>
                <tbody>";

        //ispis podataka o predmetu
        while ($red = $rezultat->fetch_object()) {
            echo "<tr>";
            // dodati odgovarajuće vrednosti između tagova za elemente reda
            echo "<td>" . "" . "</td>";
            echo "<td>" . "" . "</td>";
            echo "<td>" . "" . "</td>";
            echo "<td>" . "" . "</td>";
            echo "</tr>";
        }
        echo "</tbody></table>";
    }


}
