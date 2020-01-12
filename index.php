<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <title>ejercicios php</title>
  </head>
     <body>
      <h1>ejercicio 1 </h1>
        
       <form name="form1" method="POST" action="index.php">
           Número 1 : <input type="text" name="txtnumero1">
          <br>
          Número 2 : <input type="text" name="txtnumero2">
          <br>
          Número 3: <input type="text" name="txtnumero3">
          <br>
          Número 4 : <input type="text" name="txtnumero4">
          <br>
          Número 5: <input type="text" name="txtnumero5">
            <br>
          <input type="submit" name="calcular" value="Calcular">
              
        </form>

       <?php 
        if(isset($_POST["calcular"])) {
         
            $valor1 = $_POST["txtnumero1"];
            $valor2 = $_POST["txtnumero2"];
            $valor3 = $_POST["txtnumero3"];
            $valor4 = $_POST["txtnumero4"];
            $valor5 = $_POST["txtnumero5"];


            $numero1 = $valor1;
            $numero2= $valor2;
            $numero3= $valor3;
            $numero4= $valor4;
            $numero5 = $valor5;
        
           $total = ($numero1 + $numero2 + $numero3 + $numero4 + $numero5) / 5 ;

           echo "<br>". "el resultado es : " . $total; }
        
           
           ?>
          
          <h2> segundo ejercicio </h2>   
           
            <form name="form2" method="POST" action="edades.php">
             Número 1 : <input type="text" name="txtnumero1">
             <br>
             <input type="submit" name="calcular" value="Calcular">
              
              
            </form>
            
     </body>    
       
</head>
</html>