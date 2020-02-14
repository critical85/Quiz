<?php

    declare(strict_types = 1);
    include 'includes/class_autoloader.inc.php';
    include 'includes/header.inc.php';

?>

<?php

    $table = "users";
    $input = ["username"=>"honza", "password"=>"123"];

    $sql = new Sql();
    $sql->insert_SQL($table, $input);
    echo "test";

?>

<?php
    include 'includes/footer.inc.php';
?>