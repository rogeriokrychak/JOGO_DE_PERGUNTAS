<style media="screen">
      body {
        background-color:  rgb(106, 106, 158);
        color: black;
      }
      h2 {
        font-size: 18px;
        color: black;
      }
      input {
        font-size: 18px;
      }
      h1 {
        text-align: center;
      }
    </style>
<?php
$op = $_POST["op"];

echo "<h1>Qual é o seu animal?</h1><br>";

if($op=="SIM"){
    echo "Opção escolhida: $op, O seu animal é o HOMEM!!!!";
    echo "<br><a href='AtividadeII.html'><input type='Button' value='Voltar'></a>";
}elseif($op=="NÃO"){
    echo "Opção escolhida: $op, O seu animal não é ONÍVORO!!!!";
    echo "<h2>O seu animal é frutífero?</h2>";
    echo "<form action='res6.php' method='post'>
            <input type='radio' name='op' value='SIM'>SIM<br>
            <input type='radio' name='op' value='NÃO'>NÃO<br>
            <input type='submit' value='Enviar'>
            </form>";
}

?>