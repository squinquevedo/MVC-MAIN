<h1><?=$todos_los_productos?></h1>

<?php while ($usuario=$todos_los_usuarios->fetch_object()): ?>
    <?= $usuario->nombre ?>
<?php endwhile; ?>