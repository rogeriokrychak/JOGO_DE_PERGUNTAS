<link rel="stylesheet" href="CSS/style.css">
<?php
$op = $_POST["op"];

echo "<h1>Qual é o seu animal?</h1><br>";

if($op=="SIM"){
    echo "Opção escolhida: $op, Seu animal é QUADRÚPEDE!!!!<br>";
    echo "<h2>O seu animal é CARNÍVORO?</h2>";
    echo "<form action='res3.php' method='post'>
            <input type='radio' name='op' value='SIM'>SIM<br>
            <input type='radio' name='op' value='NÃO'>NÃO<br><br>
            <input type='submit' value='Enviar'>
            </form>";
}elseif($op=="NÃO"){
    echo "Opção escolhida: $op.";
    echo "<h2>O seu animal é ONÍVORO?</h2>";
    echo "<form action='res5.php' method='post'>
            <input type='radio' name='op' value='SIM'>SIM<br>
            <input type='radio' name='op' value='NÃO'>NÃO<br>
            <input type='submit' value='Enviar'>
            </form>";
    echo "<h2>O seu animal é dos VOADORES?</h2>";
    echo "<form action='res7.php' method='post'>
            <input type='radio' name='op' value='SIM'>SIM<br>
            <input type='radio' name='op' value='NÃO'>NÃO<br>
            <input type='submit' value='Enviar'>
            </form>";
    echo "<h2>O seu animal é dos AQUÁTICOS?</h2>";
    echo "<form action='res8.php' method='post'>
            <input type='radio' name='op' value='SIM'>SIM<br>
            <input type='radio' name='op' value='NÃO'>NÃO<br>
            <input type='submit' value='Enviar'>
            </form>";
}
//echo "<br><br><h2>Obs:Marque somente a pergunta certeira do seu animal!!!</h2>";




?>