<link rel="stylesheet" href="CSS/style.css">
<?php
$op = $_POST["op"];

echo "<h1>Qual é o seu animal?</h1><br>";

if($op=="SIM"){
    echo "Opção escolhida: $op, O seu animal é o LEÃO!!!!";
    echo "<br><br><img src='/images/leão.png'>";
    echo "<br><br><a href='AtividadeII.html'><input type='Button' value='Voltar'></a>";
}elseif($op=="NÃO"){
    echo "Opção escolhida: $op, O seu animal não é CARNÍVORO!!!!<br>";
    echo "<h2>O seu animal é HERBÍVORO?</h2>";
    echo "<form action='res4.php' method='post'>
            <input type='radio' name='op' value='SIM'>SIM<br>
            <input type='radio' name='op' value='NÃO'>NÃO<br><br>
            <input type='submit' value='Enviar'>
            </form>";
}
?>