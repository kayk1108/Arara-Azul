<?php

 include 'conection.php';

 $sql = "SELECT * FROM todo";
 $data = $conn->query($sql);

 if($data->num_rows > 0){
 	while ($item = $data->fetch_assoc()) {
    echo '<a href="item.php?id=' . $item['id'] . '"';
 		echo 'id:' . $item['id'] . ' | ';
 		echo 'descrição:' . $item['descricao'];
 		echo '</a><br />';
 	}
 }else{
 	echo 'Nenhum Registro Encontrado. <br />';
 }

?>
