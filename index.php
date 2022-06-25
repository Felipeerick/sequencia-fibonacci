<html>
 <head>
  <title>Apostila PHP Progressivo</title>
 </head>
 <body>
 <form action="" method="get">
  Exibir até(maior que 2): <input type="number" name="number" /><br />
  <input type="submit" name="submit" value="Calcular" /> <br> <br>

  <input type="number" name='verificar' placeholder="verificar"/><br />
  <button type="submit">verificar</button>
 </form> 

 <?php 


  $n=$_GET['number'];
  $v = $_GET['verificar'];
  $ultimo=1;
  $penultimo=0;
    
  echo "0<br />1<br />";

  for($count=1 ; $count<=$n-2 ; $count++){
   $atual = $ultimo + $penultimo;
   echo $atual."<br />";
   
    
   $sequencia[$count] += $ultimo;

        if($v == $sequencia[$count]){
        echo 'este número  pertence a sequência: ' . $v . "<br>";
         
      }; 

         $penultimo = $ultimo;
            $ultimo = $atual;
};

 ?>
 </body>
</html>