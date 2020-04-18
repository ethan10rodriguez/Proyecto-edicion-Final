<?php
   if(isset($_POST['enviar'])){ // si damos clic al botón calcular entonces ...
                       
        if($_POST['op'] === "1"){ // si esta activo el radiobutton sumar entonces ...
            $resul = $_POST['num1'] + $_POST['num2']; // a la variable resul le asignamos la suma de los campos
        }
        elseif($_POST['op'] === "2"){ //sino, si esta activo el radio restar entonces ...
            $resul = $_POST['num1'] - $_POST['num2'];
        }
        elseif($_POST['op'] === "3"){
            $resul = $_POST['num1'] * $_POST['num2'];
        }
        else{
            $resul = $_POST['num1'] / $_POST['num2'];
        }
       
    }
?>
