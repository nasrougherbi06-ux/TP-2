<?php
$name   = $_POST['username'];
$weight = $_POST['weight'];
$height = $_POST['height'];
$bmi = $weight / ($height * $height);
if ($bmi < 18.5) {
    $status = "Underweight";
} elseif ($bmi >= 18.5 && $bmi < 25) {
    $status = "Normal weight";
} elseif ($bmi >= 25 && $bmi < 30) {
    $status = "Overweight";
} else {
    $status = "Obesity";
}
echo "<h3>Welcome $name</h3>";
echo "<p>Your BMI is: " . round($bmi, 2) . "</p>";
echo "<p>Category: $status</p>";
?>
