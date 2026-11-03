<?php
$students = [
    "Rahim" => 80,
    "Karim" => 95,
    "Riya" => 75,
    "Sima" => 85,
    "Nila" => 90
];

echo "<table border='1'>
<tr><th>Student Name</th><th>Score</th></tr>";

foreach ($students as $name => $score) {
    echo "<tr><td>$name</td><td>$score</td></tr>";
}
echo "</table>";

$max = max($students);
$name = array_search($max, $students);

echo "Highest Score: $max <br>";
echo "Student Name: $name";
?>