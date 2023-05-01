<?php
//  Validamos si se hizo click en el botón
    if(isset($_POST['es_igual'])) {
        $resultado = 0;
        $a         = $_POST['num1'];
        $op        = $_POST['op'];
        $b         = $_POST['num2'];
        /*
        Para validar si se ingresaron números usamos
        la función booleana is_numeric()
        */
       if(is_numeric($a) && is_numeric($b)){
        
        switch ($op) {
            case "+":
            $resultado = $a + $b;
            break;
            case "-":
                $resultado = $a - $b;
                break;
            case "*":
                $resultado = $a * $b;
                break;
            case "/":
                /* 
                para impedir que se intente dividir por cero usamos
                 este tipo de if llamado operador de selección ternario 
                */
                $resultado = ($b != 0) ? $a / $b : "No existe, el divisor no puede ser cero.";
                /* también podríamos haber usado el viejo y querido if-else
                if( $b !=0 ){
                    $resultado = $a / $b;
                }else{
                    $resultado = ""No existe, el divisor no puede ser cero.";
                }
                */
                break;
            default:
            $resultado = "Hola!";
        }
    
    echo "<p align='center'> $a $op $b = $resultado </p>";
    
    }else{ echo "debes ingresar números";}
}
        
        
?>