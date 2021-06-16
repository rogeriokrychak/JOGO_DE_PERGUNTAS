<link rel="stylesheet" href="style.css">
<?php
$op = $_POST["op"];

echo "<h1>Qual é o seu animal?</h1><br>";

if($op=="SIM"){
  echo "Opção escolhida: $op, O seu animal é a COBRA!!!!";
  echo "<br><br><img src='/images/cobra.png'>";
  echo "<br><br><a href='AtividadeII.html'><input type='Button' value='Voltar'></a>";
  
}elseif($op=="NÃO"){
    echo "Opção escolhida: $op, O seu animal não é dos RÉPTEIS SEM PATAS!!!!";
    echo "<br><br><a href='AtividadeII.html'><input type='Button' value='Voltar'></a>";    
}

?>