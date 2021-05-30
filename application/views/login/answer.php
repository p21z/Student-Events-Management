<?php

if (isset($_SESSION['new_question']))
{
    if ($_SESSION['new_question']===1){

        echo "<div class='card mt-4 py-3 border-bottom-danger'>
                <div class='card-body' align=center >
                We picked a new question for you
                </div>
            </div>";
            unset($_SESSION['new_question']);
    }
}

echo "<!DOCTYPE html>
<html lang='en'>

<head>

    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta name='description' content=''>
    <meta name='author' content=''>

    <title>Cafeteria System</title>

    <!-- Custom fonts for this template-->
    <link href='template/vendor/fontawesome-free/css/all.min.css' rel='stylesheet' type='text/css'>
    <link
        href='https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i'
        rel='stylesheet'>

    <!-- Custom styles for this template-->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6' crossorigin='anonymous'>
    <link href='template/css/sb-admin-2.min.css' rel='stylesheet'>
    <link href='template/css/main.css' rel='stylesheet'>

</head>";

echo "<div class='container-fluid' align=center style='height: 100%; padding:180px;'>";
    echo "<div class='card shadow-lg' style='width: 45rem; margin: 3% 0% 3% 0%;'>";
        echo "<div class='card-body'>";
            echo "<h3 class='card-title' style='color: #000;'>";
            echo "<br>Answer the question to prove you're a human.<br><br>";
            echo "<h2 style=color:blue;>";
                echo $var1." ". $opera." ". $var2. " =";
            echo "</h2>";

?>
<br>
<br>

    <form method=post action="<?=base_url()?>login/human_or_not" class="form-group w-25">

<div class="input-group">    
    <input type=number name=answer class="form-control" autocomplete="off" maxlength="4" style="margin-left:0px;" required>


    <div class="input-group-append">
        <button type=submit class="btn btn-success" style="margin-left:25px;"> Submit </button>
    </div>

</div>

    <input type=text name=var1 value=<?=$var1?> hidden>
    <input type=text name=opera  value=<?=$opera?> hidden>
    <input type=text name=var2  value=<?=$var2?> hidden> 
    <input type=text name=checker value=<?=$checker?> hidden>

    <br>
    </form>

<?php

if (isset($answer))
{
    if ($checker===$answer)
    {
        header("Location:".base_url()."home");
        unset($_SESSION['question_counter']);
    } else 
    {
        ?>
            <h5 class="text-danger"><b>Wrong answer</b></h5>
        <?php
        if (isset($_SESSION['question_counter']))
        {
            $_SESSION['question_counter']++;
            
            if ($_SESSION['question_counter']===5)
            {
                $_SESSION['new_question']=1;
                $_SESSION['question_counter']=0;
                header("Location:".base_url()."login/entrance_question");
            }
            // echo $_SESSION['question_counter'];
        } else {
            $_SESSION['question_counter']=1;
            // echo $_SESSION['question_counter'];
        }
        
        // echo "naaah";
    }
}