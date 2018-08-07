<!DOCTYPE html>

<html lang="pt-br">

  <head>

      <meta charset="UTF-8">
      <meta name="viewport">

        <h1>Página Inicial</h1>

  </head>

  <body>

    <form action="index.php" method="post">

      <input type="text" name="nome" />
      <input type="submit" />

    </form>

    <form action="index.php" method="get">

      <input type="text" name="nome" />
      <input type="submit" />
      
    </form>

<?php

  $a = ["Banana", "Maçã", "Pera"];

  for ($i=0; $i < count($a) ; $i++) {
    echo 'Comprei' . $a[$i] . '<br/>';
    $i++;
  }

    while ($i < count($a)) {
      echo 'tenho' . $a[$i] . '<br/>';
      $i++;
    }

    $a['teste'] = "Melão";
    foreach ($a as $key => $value) {
      echo 'Comi ' . $key . '-' . $value . '<br/>';
    }
?>




      <?php

      /*  $a1 = [];
        $a2 = ["Banana", "Maçã", "Pera"];
        $a3 = ["carro", 10, false];

        $a1["teste"] = true;
        $a1[] = "teste";


        print_r($a1);
        echo '<br />';
        echo '<br />';
        print_r($a2);
        echo '<br />';
        echo '<br />';
        print_r($a3);

/*
<?php
  if(isset($_POST)) :
    print_r($_POST);
  elseif(isset($_GET)) :
    print_r($_GET);
endif;
?>

      /*
      <?php if(isset($_POST['nome'])) : ?>
      VIA POST
      <?php elseif(isset($_GET['nome'])) : ?>
      VIA GET
      <?php endif;?>

      /*
      $test = true;

        if ($test) {
          echo 'Funciona';

        }else {
          echo 'Não Funciona';
        }
*/

/*
        $a = 1;
        $b = '2 vacas';
        $c = '3 dinheiros'

        echo $a + $b;
        echo '<br/>';
        echo $c + $a;
        echo '<br/>';
        echo $c + $b;
*/

/*
    $nome = 'PHP';
    echo '<h1>Título ' . $nome . '</h1>';
*/
    /*
    a tag "<h1>" está entre aspar porque não podemos ter códigos html no php.
      */
      ?>

  </body>

</html>
