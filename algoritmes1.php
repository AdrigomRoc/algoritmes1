<!DOCTYPE html>
<html>

<body>

    <?php
        function($var1,$var2){
            if(!is_numeric($var1) || !is_numeric($var2)){
                echo "es un string";
            }else{
                $res = $var1 + $var2;
                return $res;
            }
        }
    ?>

</body>

</html>