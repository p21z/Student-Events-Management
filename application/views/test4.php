<?php

    $password="pass";

    $hash_brown= _hash_string($password);
    echo $password. " ".$hash_brown;
    $hash_brown_2= _hash_string($password);

    echo "<br><br>";
    echo $hash_brown_2. " ".$hash_brown;
?>

<script src="<?=base_url('Template/js/test5.js')?>"></script>