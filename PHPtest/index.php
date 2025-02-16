<!DOCTYPE html>
<html>
<head>
    <title>صفحة PHP</title>
</head>
<body>

<?php

/////////////////////////////////////////Question 1///////////////////////////////////
$year = 2013;
echo ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) ? 
     "This year is a leap year" : "This year is not a leap year";

?>
</br>

<?php
////////////////////////////////////////Question 2////////////////////////////////////////
$temperature = 27;
echo ($temperature < 20) ? "It is wintertime!" : "It is summertime!";
?>
</br>

<?php
////////////////////////////////////////Question 3////////////////////////////////////////

function sumOrTriple($a, $b) {
    $sum = $a + $b;
    return ($a == $b) ? $sum * 3 : $sum;
}

// اختبار الكود
$firstInteger = 2;
$secondInteger = 2;
$result = sumOrTriple($firstInteger, $secondInteger);

echo "Result: $result";
?>

</br>
<?php
////////////////////////////////////////Question 4////////////////////////////////////////

function checkSum($a, $b) {
    return ($a + $b == 30) ? $a + $b : "false";
}

// اختبار الكود
$firstInteger = 10;
$secondInteger = 10;
echo checkSum($firstInteger, $secondInteger);
?>
</br>

<?php
////////////////////////////////////////Question 5////////////////////////////////////////

function isMultipleOfThree($number) {
    return ($number > 0 && $number % 3 == 0) ? "true" : "false";
}

// اختبار الكود
$number = 20;
echo isMultipleOfThree($number);
?>
</br>

<?php
////////////////////////////////////////Question 6////////////////////////////////////////

function isInRange($number) {
    return ($number >= 20 && $number <= 50) ? "true" : "false";
}

// اختبار الكود
$number = 50;
echo isInRange($number);
?>

</br>
<?php
////////////////////////////////////////Question 7////////////////////////////////////////

function findLargest($a, $b, $c) {
    return max($a, $b, $c);
}

// اختبار الكود
echo findLargest(1, 5, 9);
?>

</br>
<?php
////////////////////////////////////////Question 8////////////////////////////////////////

function calculateElectricityBill($units) {
    $bill = 0;

    if ($units <= 50) {
        $bill = $units * 2.50;
    } elseif ($units <= 150) {
        $bill = (50 * 2.50) + (($units - 50) * 5.00);
    } elseif ($units <= 250) {
        $bill = (50 * 2.50) + (100 * 5.00) + (($units - 150) * 6.20);
    } else {
        $bill = (50 * 2.50) + (100 * 5.00) + (100 * 6.20) + (($units - 250) * 7.50);
    }

    return number_format($bill, 2) . " JOD";
}

// اختبار الكود
$units = 270;
echo "Electricity Bill: " . calculateElectricityBill($units);
?>

</br>
<?php
////////////////////////////////////////Question 9////////////////////////////////////////

function calculator($num1, $num2, $operation) {
    switch ($operation) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            return ($num2 != 0) ? $num1 / $num2 : "Error: Division by zero";
        default:
            return "Invalid operation";
    }
}

// اختبار الكود
$num1 = 10;
$num2 = 5;
$operation = '/'; // يمكنك تغيير العملية إلى + أو - أو * أو /

echo "Result: " . calculator($num1, $num2, $operation);
?>

</br>
<?php
////////////////////////////////////////Question 10////////////////////////////////////////

function canVote($age) {
    return ($age >= 18) ? "is eligible to vote" : "is not eligible to vote";
}

// اختبار الكود
$age = 15;
echo canVote($age);
?>

</br>
<?php
////////////////////////////////////////Question 11////////////////////////////////////////

function checkNumber($num) {
    return ($num > 0) ? "Positive" : (($num < 0) ? "Negative" : "Zero");
}

// اختبار الكود
$number = -60;
echo checkNumber($number);
?>

</br>

<?php
////////////////////////////////////////Question 12////////////////////////////////////////

function getGrade($scores) {
    $average = array_sum($scores) / count($scores);

    if ($average < 60) return 'F';
    if ($average < 70) return 'D';
    if ($average < 80) return 'C';
    if ($average < 90) return 'B';
    return 'A';
}

// اختبار الكود
$scores = [60, 86, 95, 63, 55, 74, 79, 62, 50];
echo "Grade: " . getGrade($scores);
?>




</body>
</html>







<!-- http://localhost/PHPtest/ -->






