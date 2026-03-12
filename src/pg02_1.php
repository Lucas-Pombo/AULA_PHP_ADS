<h1> pg02_1 - 12/03/26 </h1>
<?php
$idade = 34;
echo "idade = $idade<br>";
$cep = "01012123";
echo "meu cep = $cep<br>";
/* bases
decimal = 0123456789 - 10
binaria = 01 10
octal 01234567 - 10
hexadecimal = 0123456789ABCDEF - 10

*/
$preco = 5247.543;
echo "preço = R$ $preco<br>";
echo number_format($preco, 2, ",", ".");
echo "<hr>";
$cor = 'orange'; /* aspas duplas puxa uma variavel, aspas simples puxa só o nome */
echo "cor = $cor<br>";
echo 'cor = $cor<br>';
echo "<h2 style = 'color:$cor;' > outro Titulo 2</h2>";
$ativo = true;
echo " está ativo? $ativo <br>";
echo "<hr>";
echo "Aquela era: ".$cor;
echo "<hr>";
$nota = 7.8;
echo "nota = ".$nota - (int)$nota;

?>
<h2 style = "color:blue;" >Titulo 2</h2>