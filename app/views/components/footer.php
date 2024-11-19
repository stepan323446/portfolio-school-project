</div>
<footer>
    © Stepan Turitsin, 2024
</footer>

<?php foreach($scripts as $script): ?>
<script src="<?php echo ASSETS_PATH . "/js/" . $script ?>"></script>
<?php endforeach; ?>

<script src="<?php echo ASSETS_PATH . '/js/main.js' ?>"></script>
</body>
</html>