<link rel="stylesheet" href="CSS/style.css">
<?php
$op = $_POST["op"];

echo "<h1>Qual é o seu animal?</h1><br>";

if($op=="SIM"){
    echo "Opção escolhida: $op, Seu animal é MAMÍFERO!!!!<br>";
    echo "<h2>O seu animal é QUADRÚPEDE?</h2>";
    echo "<form action='res2.php' method='post'>
            <input type='radio' name='op' value='SIM'>SIM<br>
            <input type='radio' name='op' value='NÃO'>NÃO<br><br>
            <input type='submit' value='Enviar'>
            </form>";
}elseif($op=="NÃO"){
    echo "Opção escolhida: $op.";
    echo "<h2>O seu animal é das AVES?</h2>";
    echo "<form action='res8.php' method='post'>
            <input type='radio' name='op' value='SIM'>SIM<br>
            <input type='radio' name='op' value='NÃO'>NÃO<br><br>
            <input type='submit' value='Enviar'>
            </form>";
    echo "<h2>O seu animal é dos RÉPTEIS?</h2>";
    echo "<form action='res14.php' method='post'>
            <input type='radio' name='op' value='SIM'>SIM<br>
            <input type='radio' name='op' value='NÃO'>NÃO<br><br>
            <input type='submit' value='Enviar'>
            </form>";
   
}




?>