<form method="post">
<?php
for ($i = 1; $i <= 5; $i++)
    echo "Number $i: <input type='number' name='n$i' required><br>";
?>
<input type="submit" name="submit" value="Find Largest">
</form>

<?php
if (isset($_POST['submit'])) {
    $a = $_POST['n1'];
    $b = $_POST['n2'];
    $c = $_POST['n3'];
    $d = $_POST['n4'];
    $e = $_POST['n5'];

    if ($a >= $b && $a >= $c && $a >= $d && $a >= $e)
        echo "Largest = $a";
    elseif ($b >= $c && $b >= $d && $b >= $e)
        echo "Largest = $b";
    elseif ($c >= $d && $c >= $e)
        echo "Largest = $c";
    elseif ($d >= $e)
        echo "Largest = $d";
    else
        echo "Largest = $e";
}
?>