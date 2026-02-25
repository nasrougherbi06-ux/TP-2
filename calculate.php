<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. استقبال البيانات
    $name = htmlspecialchars($_POST['name']);
    $weight = floatval($_POST['weight']);
    $height = floatval($_POST['height']);

    // 2. الحساب (المعادلة من ورقة المختبر)
    $bmi = $weight / ($height * $height);
    $bmi_rounded = round($bmi, 1);

    // 3. التصنيف حسب الجدول المطلوب
    if ($bmi < 18.5) {
        $interpretation = "Underweight";
        $color = "#17a2b8"; // لون أزرق
    } elseif ($bmi >= 18.5 && $bmi < 25) {
        $interpretation = "Normal weight";
        $color = "#28a745"; // لون أخضر
    } elseif ($bmi >= 25 && $bmi < 30) {
        $interpretation = "Overweight";
        $color = "#ffc107"; // لون أصفر
    } else {
        $interpretation = "Obesity";
        $color = "#dc3545"; // لون أحمر
    }

    // 4. عرض النتيجة بتصميم متناسق
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <link rel='stylesheet' href='style.css'>
        <title>Your Result</title>
        <style>
            .result-box {
                text-align: center;
                border-top: 5px solid $color;
            }
            .bmi-value {
                font-size: 2.5em;
                font-weight: bold;
                color: $color;
                margin: 10px 0;
            }
        </style>
    </head>
    <body>
        <div class='container result-box'>
            <h2>Hello, $name! 👋</h2>
            <p>Your BMI is:</p>
            <div class='bmi-value'>$bmi_rounded</div>
            <p>Category: <strong>$interpretation</strong></p>
            <hr>
            <a href='index.html' style='text-decoration: none; color: #666;'>⬅ Back to Calculator</a>
        </div>
    </body>
    </html>";
}
?>
