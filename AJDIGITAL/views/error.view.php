<?php
ob_start() ?>

<?= $msg ; ?>

<?php
$content=ob_get_clean();
$title="ERROS";
require "views/template.php"

?>