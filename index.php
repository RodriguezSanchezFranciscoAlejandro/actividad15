<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>

<?php
$musica_favorita = 'Pop';
switch ($musica_favorita) {
  case 'Rock':
    echo "Mi musica favorita es el rock!";
    break;
  case 'Metal pesado':
    echo "Mi musica favorita es el metal pesado!";
    break;
  case 'Pop':
    echo "Mi musica favorita es el pop!";
    break;
  case 'Regional mexicano':
    echo "Mi musica favorita es el regional mexicano!";
    break;
  case 'jass':
    echo "Mi musica favorita es el jass!";
    break;
  default:
    echo "no me gusta esta musica!";
}
?>
  </body>
</html>