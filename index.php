<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Algoritmid</h1>
<h2>Anagramm</h2>
<form action="" method="get">
    <label for="wordOne">Esimene sõne</label><br>
    <input type="text" name="wordOne"><br><br>
    <label for="wordTwo">Teine sõne</label><br>
    <input type="text" name="wordTwo"><br><br>
    <input type="submit" value="Kontrolli">
</form>
<br><br>
<?php

// Takes the entered word from first input
$a = $_GET['wordOne'];

// Takes the entered word from second input
$b = $_GET['wordTwo'];

// Function for anagram, two words from inputs are given as parameters
function is_anagram($a, $b)
{

    // Comparing if two given words have same number of occurrences of every byte-value
    if (count_chars($a, 1) == count_chars($b, 1)) {

        // If the do have same number of occurrences then they are anagrams
        echo "On anagramm";
    } else {

        // If the do not have same number of occurrences then they are not anagrams
        echo "Ei ole anagramm";
    }
}

// Calling the function
is_anagram($a, $b);
?>
<h2>Iga tähe järel punkt ja sõna suur tähtedeks</h2>
<form action="" method="get">
    <label for="sisend">Sõna</label><br>
    <input type="text" name="sisend"><br><br>
    <input type="submit" value="Muuda">
</form>
<?php

// Take the word from input field
$sisend1 = $_GET['sisend'];

// Get the given word length
$strLen = strlen($sisend1);

// Loop through the word, echo each letter and add a dot and make the letter uppercase
for ($i = 0; $i < $strLen; $i += 1) {
    echo strtoupper(substr($sisend1, $i, 1) . '.');
}
?>
<h2>Emaili tegemine</h2>
<h3>Töötab kui sisestada kaks sõna</h3>
<form action="" method="get">
    <label for="nimijaperenimi">Ees- ja perekonnanimi</label><br>
    <input type="text" name="nimijaperenimi"><br><br>
    <input type="submit" value="Koosta email">
</form>
<?php

// Takes first and last name from input field
$nimiJaPerenimi = $_GET['nimijaperenimi'];

// Replacement array for fun letters
$asendus = array(
    'ä' => 'a',
    'ö' => 'o',
    'ü' => 'u',
    'õ' => 'o',
    'Ä' => 'A',
    'Ö' => 'O',
    'Ü' => 'U',
    'Õ' => 'O',
    'Š' => 'S',
    'š' => 's',
    'Ž' => 'Z',
    'ž' => 'z'
);

// Looping through given names and doing replacements where needed
foreach ($asendus as $otsi => $asenda) {
    $nimiJaPerenimi = str_replace($otsi, $asenda, $nimiJaPerenimi);
}

// Finding where first name ends and last name starts
$tyhikuIndeks = strpos($nimiJaPerenimi, ' ', 0);

// Making first name to lower case and finding it from given input based on index/space
$nimi = strtolower(substr($nimiJaPerenimi, 0, $tyhikuIndeks));

// Making last name to lower case and finding it from given input based on index/space + 1
$perenimi = strtolower(substr($nimiJaPerenimi, $tyhikuIndeks + 1));

// Adding first and last name to email, separated with dot
$email = $nimi . '.' . $perenimi . '@khk.ee';
echo $email;
?>
</body>
</html>