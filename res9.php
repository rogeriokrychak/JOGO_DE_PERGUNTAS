<link rel="stylesheet" href="style.css">
<?php
$op = $_POST["op"];

echo "<h1>Qual é o seu animal?</h1><br>";

if($op=="SIM"){
  echo "Opção escolhida: $op.";
  echo "<h2>O seu animal é o das AVES NÃO-VOADORAS TROPICAL?</h2>";
    echo "<form action='res10.php' method='post'>
            <input type='radio' name='op' value='SIM'>SIM<br>
            <input type='radio' name='op' value='NÃO'>NÃO<br><br>
            <input type='submit' value='Enviar'>
          </form>";
 

}elseif($op=="NÃO"){
    echo "Opção escolhida: $op, O seu animal não é o das AVES NÃO-VOADORAS!!!!";
    echo "<br><br><a href='AtividadeII.html'><input type='Button' value='Voltar'></a>";  
}

?>