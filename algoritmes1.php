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
        function mesgran($array,$num){
            $guarda=null;
            if(count($array)<=0){
                return "Array sin valores";
            }else{
                $guarda=$array[0];
            
                for($i=0;$i<count($array);$i++){
                    if($array[$i]<$guarda){
                        $guarda=$array[$i];
                    }
                }
                if($guarda<$num){
                    return "FALSE";
                }else{
                    return "TRUE";
                }
            }
        }
        function mult2($var1,$var2){
            $res=0;
            for($i=0;$i<$var2;$i++){
                $res=$res+$var1;
            }
            return $res;
        }
        function factorial($var){
            if($var==0||$var==1) return 1;
            return factorial($var-1)*$var;
        }
        //Suma
        echo "El resultat es ".suma(5,6)."<br>";
        //Mult
        print_r (mult(4,5)."<br>");
        //Array
        $nombres = array(6,8,12,8,4,5);
        echo mesgran($nombres,5)."<br>";
        //Mult2
        echo mult2(5,3)."<br>";
        //factorial
        echo factorial(5);
    ?>
    
   
</body>

</html>