<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Mi sitio - Home</title>
  <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>">
</head>
<body>
  <div class="container">
    <h1>Bienvenido a Mi Sitio</h1>
    <h2>Usuarios</h2>
    <?php if (!empty($users)): ?>
      <ul>
        <?php foreach ($users as $u): ?>
          <li><?php echo e($u['name']); ?> (<?php echo e($u['email']); ?>)</li>
        <?php endforeach; ?>
      </ul>
    <?php else: ?>
      <p>No hay usuarios registrados.</p>
    <?php endif; ?>
  </div>
  <script src="<?php echo base_url('js/app.js'); ?>"></script>
</body>
</html>
