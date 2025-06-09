<?php
$gente = [
    "titulo" => "Joven peruana gana premio internacional por proyecto de reciclaje inteligente",
    "autor" => "Redacción El Comercio",
    "resumen" => "María Fernanda López, estudiante de ingeniería ambiental en Lima, recibió el 'Premio Joven Innovador 2025' otorgado por la ONU por desarrollar un sistema de reciclaje inteligente que clasifica residuos con visión artificial.",
    "imagen" => "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhJuhHaKBnkzS5UG8NqY3CvsM1U3VsAWgS8g9jqb3CEeZeqXJhjE6hzhjK75944jiNwmScZ--jc1y3I1i74TDNN9laQFsXG_tckTX4-yY-kLYdfO5QHGVVMtsG6OUjlZ8Tr7TMZuTfgsUYpjzwvB3l7UH1lCI2NUwg3EptL9yRJgkAx39hrR3li_UUD/w1200-h630-p-k-no-nu/proyecto-reciclaje.jpg" // Imagen de ejemplo
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Noticia: Gente</title>
</head>
<body>
    <h1><?= $gente['titulo']; ?></h1>
    <p><strong>Autor:</strong> <?= $gente['autor']; ?></p>
    <p><?= $gente['resumen']; ?></p>
    <img src="<?= $gente['imagen']; ?>" alt="Imagen de la noticia" width="400">
</body>
</html>
