<!DOCTYPE html>
<html>
<head>
    <title>Largest Number Finder</title>
</head>
<body>

    <form method="POST" action="">
         <input type="text" name="num1" ><br><br>
         <input type="text" name="num2" ><br><br>
         <input type="text" name="num3" ><br><br>
         <input type="text" name="num4" ><br><br>
         <input type="text" name="num5" ><br><br>
        
        <input type="submit" name="submit" value="submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
    
        $numbers = array(
            $_POST['num1'],
            $_POST['num2'],
            $_POST['num3'],
            $_POST['num4'],
            $_POST['num5']
        );

        $largest = max($numbers);

        echo "largest: $largest";
    }
    ?>

</body>
</html>