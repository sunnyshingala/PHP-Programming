<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Schedule Message</title> 
    </head>
    <body>
        <?php 
            $dayofweek = date(w);
            echo "It's ";
            switch($dayofweek){
                case 1:
                    echo "Monday!";
                    break;
                case 2:
                    echo "Tuesday";
                    break;
                case 3:
                    echo "Wenesday";
                    break;
                case 4:
                    echo "Thusday";
                    break;
                case 5:
                    echo "Friday";
                    break;
                case 6:
                    echo "Saturdayday";
                    break;
                case 0:
                    echo "Sunday";
                    break;
            }
        ?>

    </body>
</html>