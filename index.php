<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Calculator Document</title> 
    </head>
    <body>
        <form>
            <input type="number" name="num1" placeholder="number 1">
            <input type="number" name="num2" placeholder="number 2">

            <select name="optr">
                <option>None</option>
                <option>Add</option>
                <option>Sub</option>
                <option>Mul</option>
                <option>div</option>
            </select>
            <br>
            <button type="submit" name="submit" value ="submit" >Calculate</button>
        </form>
        <p>The Answer is: </p>
        <?php
            if(isset($_GET['submit'])){
                $result_1 = $_GET['num1'];
                $result_2 = $_GET['num2'];
                $operator = $_GET['optr'];
                
                switch ($operator) {
                    case 'None':
                        echo "please select optr";
                        break;
                    case "Add":
                        echo $result_1 + $result_2;
                        break;
                    case "Sub":
                        echo $result_1 - $result_2;
                        break;
                    case "Mul":
                        echo $result_1 * $result_2;
                        break;
                    case "Div":
                        echo $result_1 / $result_2;
                        break;
                }
            }
        ?>
    </body>
</html>