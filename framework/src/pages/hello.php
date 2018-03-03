<!-- framework/src/pages/hello.php -->
Hello <?php echo htmlspecialchars(isset($name) ? $name : 'World', ENT_QUOTES, 'UTF-8') ?>
