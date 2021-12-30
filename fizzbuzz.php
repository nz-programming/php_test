<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <p>
        <?php
            for($i=0; $i<100; $i++){
                if($i == 0){
                    echo $i;
                }elseif($i % 3 == 0 && $i % 5 == 0){
                    echo "FizzBuzz";
                }elseif($i % 5 == 0){
                    echo "Buzz";
                }elseif($i % 3 == 0){
                    echo "Fizz";
                }else{
                    echo $i;
                }
                echo "<br>";
            }
        ?>
    </body>
</html>