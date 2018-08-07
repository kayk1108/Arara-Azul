<?PHP

/* Arquivo de coenexão com o banco de dados */

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "banco_de_dados";

$conexao = mysql_connect($servidor,$usuario,$senha) ;

$db = mysql_select_db($banco,$conexao) or die("Erro ao conectar ao bando de dados");

/*mysql_close($conexao) Fecha uma conexao com o Banco de Dados; */

?>
