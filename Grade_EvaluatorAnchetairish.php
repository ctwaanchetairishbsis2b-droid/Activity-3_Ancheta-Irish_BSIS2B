<?php
// Activity #3 - Grade Evaluator
$ancheta_ccim = 80;
$ancheta_ctwa = 85;
$ancheta_dcn = 90;
$ancheta_dsa = 95;
$ancheta_rwl = 100;

$ancheta_average = ($ancheta_ccim + $ancheta_ctwa + $ancheta_dcn + $ancheta_dsa + $ancheta_rwl) / 5;

if ($ancheta_average >= 74.5) {
    $ancheta_remarks = "Passed";
} else {
    $ancheta_remarks = "Failed";
}

if ($ancheta_average >= 90 && $ancheta_average <= 100) {
    $ancheta_letter = "A";
} elseif ($ancheta_average >= 80 && $ancheta_average <= 89) {
    $ancheta_letter = "B";
} elseif ($ancheta_average >= 70 && $ancheta_average <= 79) {
    $ancheta_letter = "C";
} elseif ($ancheta_average >= 60 && $ancheta_average <= 69) {
    $ancheta_letter = "D";
} else {
    $ancheta_letter = "F";
}

echo "<h2>Grade Evaluation Result</h2>";
echo "Average Grade: " . $ancheta_average . "<br>";
echo "Remarks: " . $ancheta_remarks . "<br>";
echo "Letter Grade: " . $ancheta_letter;
?>
