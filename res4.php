<link rel="stylesheet" href="CSS/style.css">
<?php
$op = $_POST["op"];

echo "<h1>Qual é o seu animal?</h1><br>";

if($op=="SIM"){
    echo "Opção escolhida: $op, O seu animal é o CAVALO!!!!";
    echo "<br><br><img src='/images/cavalo.png'>";
    echo "<br><br><a href='AtividadeII.html'><input type='Button' value='Voltar'></a>";
}elseif($op=="NÃO"){
    echo "Opção escolhida: $op, O seu animal não é HERBÍVORO!!!!";
    echo "<br><br><a href='AtividadeII.html'><input type='Button' value='Voltar'></a>";
   
}

?>