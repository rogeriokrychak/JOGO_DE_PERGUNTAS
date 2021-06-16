<link rel="stylesheet" href="CSS/style.css">
<?php
$op = $_POST["op"];

echo "<h1>Qual é o seu animal?</h1><br>";

if($op=="SIM"){
  echo "Opção escolhida: $op, O seu animal é o CROCODILO!!!!";
  echo "<br><br><img src='/images/crocodilo.png'>";
  echo "<br><br><a href='AtividadeII.html'><input type='Button' value='Voltar'></a>";
  
}elseif($op=="NÃO"){
    echo "Opção escolhida: $op.";
    echo "<h2>O seu animal é dos RÉPTEIS SEM PATAS?</h2>";
    echo "<form action='res17.php' method='post'>
            <input type='radio' name='op' value='SIM'>SIM<br>
            <input type='radio' name='op' value='NÃO'>NÃO<br><br>
            <input type='submit' value='Enviar'>
          </form>";
      
}

?>