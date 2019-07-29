<?php
$DUZA = 999;

function podzielne($mala, $duza) {
  $wynikUlamkowy = $duza / $mala;
  $wynik = floor($wynikUlamkowy);
  return $wynik;
}

function ostatniaPodzielna($mala, $duza) {
  $ostatnia = $duza - ($duza % $mala);
  return $ostatnia;
}

function sumaCiagu($mala, $duza) {
  $pierwsza = $mala;
  $ostatnia = ostatniaPodzielna($mala, $duza);
  $ilosc = podzielne($mala, $duza);

  $suma = (($pierwsza + $ostatnia) / 2) * $ilosc;
  return $suma;
}

$suma3 = sumaCiagu(3, $DUZA);
$suma5 = sumaCiagu(5, $DUZA);
$suma15 = sumaCiagu(15, $DUZA);

$wyniczek = $suma3 + $suma5 - $suma15;
echo "$wyniczek\n";
