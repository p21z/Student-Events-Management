<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    // if (isset($_POST['xzxz'])){
    //     for ($x=0; $x <= $_POST['xzxz']; $x++){
    //         $_SESSION['prefix'.$x]="sdasd ";
    //         echo $_SESSION['prefix'.$x];
    
    //     }
    // }
    
    ?>

    <form action="<?=base_url()?>test" method="post">
        <input type=text name="xzxz">
    </form>
</body>
</html>