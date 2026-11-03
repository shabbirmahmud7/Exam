<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<form method="post">
    Enter Grade: <input type="text" name="grade" required>
    <input type="submit" value="Submit">
</form>

<?php
if (isset($_POST['grade'])) {
    $g = strtoupper($_POST['grade']);

    if ($g == "A")
        echo "Excellent";
    else if ($g == "B")
        echo "Good";
    else if ($g == "C")
        echo "Fair";
    else if ($g == "D")
        echo "Poor";
    else if ($g == "F")
        echo "Failure";
    else
        echo "Invalid Grade";
}
?>