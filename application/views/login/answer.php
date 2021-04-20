<?php

if (isset($_SESSION['new_question']))
{
    if ($_SESSION['new_question']===1){
        echo "
            <div class='card mt-4 py-3 border-bottom-danger'>
                <div class='card-body'>
                We picked a new question for you
                </div>
            </div>";
            unset($_SESSION['new_question']);
    }
}

echo "Answer the question to prove you're a human.<br>";
echo $var1. $opera. $var2. "=";
?>

    <form method=post action="<?=base_url()?>login/human_or_not">
    <input type=text name=answer>
    <input type=text name=var1 value=<?=$var1?> hidden>
    <input type=text name=opera  value=<?=$opera?> hidden>
    <input type=text name=var2  value=<?=$var2?> hidden> 
    <input type=text name=checker value=<?=$checker?> hidden>
    <input type=submit value="submit">
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

