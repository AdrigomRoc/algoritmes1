<!DOCTYPE html>
<html>

<body>

    <?php
        function suma($var1,$var2){
            if(!is_numeric($var1) || !is_numeric($var2)){
                return "erroni";
            }else{
                $res = $var1 + $var2;
                return $res;
            }
        }
        function mult($var1,$var2){
            if(!is_numeric($var1) || !is_numeric($var2)){
                return "erroni";
            }else{
                $res = "$var1 x $var2 = ".$var1 * $var2;
                return $res;
            } 
        }
        
        echo "El resultat es ".suma(5,6)."<br>";
        print_r (mult(4,5)."<br>");
    ?>
    
   
</body>

</html>