$a = $_POST['a'];
$b = $_POST['b'];

echo $a + $b;

$a = $_POST['a'];
$b = $_POST['b'];

echo $a - $b;
echo $a * $b;
echo $a / $b;

if ($dzialanie == "suma") {
    $wynik = $a + $b;
} elseif ($dzialanie == "roznica") {
    $wynik = $a - $b;
} elseif ($dzialanie == "iloczyn") {
    $wynik = $a * $b;
} elseif ($dzialanie == "iloraz") {
    $wynik = $a / $b;
}

echo "<div id='wynik'>$wynik</div>";


echo max($a, $b, $c);

if ($wzrost < 150) {
    echo "niski";
} elseif ($wzrost > 180) {
    echo "wysoki";
} else {
    echo "średni";
}


if ($bmi < 18.5) {
    echo "$bmi za mało!";
} elseif ($bmi > 25) {
    echo "$bmi za dużo!";
} else {
    echo "$bmi OK!";
}

if (strtotime($data1) < strtotime($data2)) {
    echo "Pierwsza osoba jest starsza";
} else {
    echo "Druga osoba jest starsza";
}

