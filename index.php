


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="" method="POST">
            <input type="text" name="num1" placeholder="number1">
            <input type="text" name="num2" placeholder="number2">
            <select name="operator" >
                <option>None</option>
                <option>Add</option>
                <option>Subtract</option>
                <option>Multiply</option>
                <option>Divide</option>
            </select>
            <br> <br>
            <button type="submit" name="submit" value="submit">Calculate</button>
        </form>
        <p>The Answer is:</p>
</body>
</html>
<?php
    
    if(isset($_REQUEST['submit'])){
        $result1=$_REQUEST['num1'];
        $result2=$_REQUEST['num2'];
        $operator=$_REQUEST['operator'];

        switch($operator){
            case "None":
                echo "you need to select method!";
            break;
            case "Add":
                echo $result1 + $result2;
            break;
            case "Subtract":
                echo $result1 - $result2;
            break;
            case "Multiply":
                echo $result1 * $result2;
            break;
            case "Divide":
                echo $result1 / $result2;
            break;
        }
    }
?>
