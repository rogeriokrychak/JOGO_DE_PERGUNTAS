<link rel="stylesheet" href="CSS/style.css">
<?php
$op = $_POST["op"];

echo "<h1>Qual é o seu animal?</h1><br>";

if($op=="SIM"){
  echo "Opção escolhida: $op.";
  echo "<h2>O seu animal é o das AVES NÃO-VOADORAS?</h2>";
  echo "<form action='res9.php' method='post'>
            <input type='radio' name='op' value='SIM'>SIM<br>
            <input type='radio' name='op' value='NÃO'>NÃO<br><br>
            <input type='submit' value='Enviar'>
        </form>";
  echo "<h2>O seu animal é o das AVES NADADORAS?</h2>";
  echo "<form action='res12.php' method='post'>
            <input type='radio' name='op' value='SIM'>SIM<br>
            <input type='radio' name='op' value='NÃO'>NÃO<br><br>
            <input type='submit' value='Enviar'>
        </form>";
  echo "<h2>O seu animal é o das AVES DE RAPINA?</h2>";
  echo "<form action='res13.php' method='post'>
            <input type='radio' name='op' value='SIM'>SIM<br>
            <input type='radio' name='op'value='NÃO'>NÃO<br><br>
            <input type='submit' value='Enviar'>
        </form>";

}elseif($op=="NÃO"){
    echo "Opção escolhida: $op, O seu animal não é o das AVES!!!!";
    echo "<br><br><a href='AtividadeII.html'><input type='Button' value='Voltar'></a>";  
}

?>