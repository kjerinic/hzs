<?php
// učitavanje skripte sa podacima o konekciji
// komande include ili require
require "";

// promenljiva u kojoj čuvamo SQL upit za bazu 
$upit = "";

// da li je upit uspešno izvršen
if (true) {
    // ako dođe do greške
    // pravimo promenljivu (tipa string) koja čuva json podatke o grešci
    $jsonString = '{ }';
} else {
    //ako je izvršen upit
    // da li rezultat koji je vraćen iz baze ima više od 0 redova
    if (true) {
        // pravimo promenljivu (tipa string) koja čuva json podatke iz baze
        $jsonString = '{ ';

        // inicijalizujemo prazan niz u kom ćemo čuvati predmete
        $niz = array();

        while (true) {
            // dodajemo sledeći element u niz
            $niz[] = "";
        }

        // dodajemo postojećoj promenljivoj $jsonString niz koji smo napravili u prethodnoj petlji
        $jsonString .= "";
        // dodajemo promenljivoj zatvorenu vitićastu zagradu
        $jsonString .= '}';
    } else {
        //ako nema rezultata u bazi
        $jsonString = '{"greska":"Nema rezultata."}';
    }
}
// otvaranje novog fajla
// da li je uspešno otvoren
if (true) {
    // upis podataka u fajl
    if (true) {
        //zatvaranje fajla

    }
}
