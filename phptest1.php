<?php
#zmienne, czyli imie, nazwisko oraz wiek
$imie = "Oliwier";
$nazwisko = "Galert";
$wiek = 17;

#skrypt który sprawdza wiek i umieszcza dany napis dla danego wieku
if ($wiek >= 18 && $wiek < 21) {
    echo $imie, " ", $nazwisko, " Możesz tylko głosować.";
}
else if ($wiek >= 21 && $wiek < 30) {
    echo $imie, " ", $nazwisko, " Możesz głosować i kandydować do Sejmu.";
}
else if ($wiek >= 30 && $wiek < 35) {
    echo $imie, " ", $nazwisko, " Możesz głosować i kandydować do Sejmu i Senatu.";
}
else if ($wiek >=35) {
    echo $imie, " ", $nazwisko, " Możesz głosować i kandydować do Sejmu i Senatu oraz na Prezydenta.";
}
else {
    echo $imie, " ", $nazwisko, " Nie możesz jeszcze głosować.";
}
?>
