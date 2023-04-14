<?php
//zadanie 10, sprawdzanie miesiąca.
echo "<p> Zadanie 10 </p>";
$nr = 4;

switch ($nr) {
    case 1: echo "styczeń";
    break;
    case 2: echo "luty";
    break; 
    case 3: echo "marzec";
    break;
    case 4: echo "kwiecień";
    break;
    case 5: echo "maj";
    break;
    case 6: echo "czerwiec";
    break;
    case 7: echo "lipiec";
    break;
    case 8: echo "sierpień";
    break;
    case 9: echo "wrzesień";
    break;
    case 10: echo "październik";
    break;
    case 11: echo "listopad";
    break;
    case 12: echo "grudzień";
    break;
    default:
    echo "Nie podano miesiąca";
    break;
}
//zadanie 11, sprawdzanie oceny i czy dostajesz się do nastepnej klasy
echo "<p> Zadanie 11 </p>";
$ocena = 3;

switch ($ocena) {
    case 1: echo "Brak promocji do następnej klasy";
    break;
    case 2:
    case 3:
    case 4:
    case 5: echo "Promocja do następnej klasy";
    break;
    case 6: echo "Promocja z oceną celującą";
    break;
    default: echo "Nie ma takiej oceny";
    break;
}
//zadanie 12, sprawdzanie oceny i wypisywanie jej słownie
echo "<p> Zadanie 12 </p>";
$oc = 3;

switch ($oc) {
    case 1: echo "niedostateczna";
    break;
    case 2: echo "dopuszczająca";
    break;
    case 3: echo "dostateczna";
    break;
    case 4: echo "dobra";
    break;
    case 5: echo "bardzo dobra";
    break;
    case 6: echo "celująca";
    break;
    default: echo "Błędna ocena";
    break;
}
//zadanie 13, przeliczanie na inne waluty
echo "<p> Zadanie 13 </p>";
$pln = 10;
$waluta = 'funt';

switch ($waluta)
{
    case "euro": echo $pln, 'zł w euro to ', $pln * 0.22, 'euro';
    break;
    case "funt": echo $pln, 'zł w funtach to ', $pln * 0.19, ' funtów';
    break;
    case "dolar": echo $pln, 'zł w dolarach to ', $pln * 0.24, '$';
    break;
}
//zadanie 14, przeliczanie na inne jednostki miary
echo "<p> Zadanie 14 </p>";
$metr = 40;
$miara = "cm";
switch ($miara)
{
case "cm": echo $metr, "m w cm to ", $metr * 100, "cm";
    break;
case "dm": echo $metr, "m w dm to ", $metr * 10, "dm";
    break;
case "km": echo $metr, "m w km to ", $metr / 1000, "km";
    break;
case "mm": echo $metr, "m w mm to ", $metr * 1000, "mm";
    break;
default:
echo $metr;
}
//zadanie 15, sprawdzanie czy zmienna jest większa czy mniejsza od 20.
echo "<p> Zadanie 15 </p>";
$x = 65;
if ($x > 20)
{
    echo "Zmienna jest większa od 20";
}
else
{
    echo "Zmienna jest mniejsza lub równa 20";
}
//zadanie 16, sprawdza czy zmienna jest liczbą trzycyfrową, czy nie
echo "<p> Zadanie 16 </p>";
$z = 256;

if ($z > 99 && $z < 1000)
{
    echo "Zmienna jest liczbą trzycyfrową";
}
else {
    echo "Zmienna nie jest liczbą trzycyfrową";
}
//zadanie 18, wypisywanie odpowiedniej ilości plusów do liczby podanej w zmiennej
echo "<p> Zadanie 18 </p>";
$ile = 8;

switch ($ile) {
    case 1:
        echo "+";
        break;
    case 2:
        echo "++";
        break;
    case 3:
        echo "+++";
        break;
    case 4:
        echo "++++";
        break;
    case 5:
        echo "+++++";
        break;
    case 6:
        echo "++++++";
        break;
    case 7:
        echo "+++++++";
        break;
    case 8:
        echo "++++++++";
        break;
    case 9: echo "+++++++++";
    break;
    default: echo "Wartość poza zakresem";
    break;
}
//zadanie 19, kwartały
echo "<p> Zadanie 19 </p>";
$miesiac = 9;
switch ($miesiac) {
    case 1:
    case 2:
    case 3: echo "Kwartał I";
    break;
    case 4:
    case 5:
    case 6: echo "Kwartał II";
    break;
    case 7:
    case 8:
    case 9: echo "Kwartał III";
    break;
    case 10:
    case 11:
    case 12: echo "Kwartał IV";
    break;
    default: echo "Błedny numer miesiąca";
    break;
}
?>