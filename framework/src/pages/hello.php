<!-- framework/src/pages/hello.php -->
<?php $name = $input = $request->get('name', 'World') ?>

Hello <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?>
