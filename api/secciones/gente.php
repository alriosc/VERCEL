<?php
$gente = [
    "titulo" => "Joven peruana gana premio internacional por proyecto de reciclaje inteligente",
    "autor" => "Redacción El Comercio",
    "resumen" => "María Fernanda López, estudiante de ingeniería ambiental en Lima, recibió el 'Premio Joven Innovador 2025' otorgado por la ONU por desarrollar un sistema de reciclaje inteligente que clasifica residuos con visión artificial.",
    "imagen" => "https://via.placeholder.com/400x250.png?text=Premio+Joven+Innovador" // Imagen de ejemplo
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
