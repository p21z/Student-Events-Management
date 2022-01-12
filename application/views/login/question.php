<?php

$x = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);
$y = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);

$x1 = array_rand($x, 2);

$y1 = $x1[0];
$y2 = $x1[1];

function add_operator($y1, $y2)
{
    $z = $y1+$y2;
    $operator = "+";
    return $z;
}
function subtr_operator($y1, $y2)
{
    $z = $y1-$y2;
    $operator = "-";
    return $z;
}
function multi_operator($y1, $y2)
{
    $z = $y1*$y2;
    $operator = "-";
    return $z;
}

$function_list = array
(
    "add_operator", 
    "subtr_operator", 
    "multi_operator"
);
$function_rand = $function_list[array_rand($function_list, 1)];
$function_caller = $function_rand($y1, $y2);

    if ($function_rand === "add_operator")
    {
        $operator="+";
    } elseif ($function_rand === "subtr_operator")
    {
        $operator="-";
    } elseif ($function_rand === "multi_operator")
    {
        $operator="*";
    }

// echo "y1 is ".$y1;
// echo "<br> y2 is ".$y2;
// echo "<br> func is ".$function_rand;
// echo "<br> z is ".$function_caller;
// echo "<br>op is". $operator;
?>

<div>
<form action="<?=base_url()?>login/human_or_not" method=post id="answer_keys">
<input style="visibility: hidden" name=var1 value= <?=$y1?>>
<input style="visibility: hidden" name=var2 value= <?=$y2?>>
<input style="visibility: hidden" name=opera value= <?=$operator?>>
<input style="visibility: hidden" name=checker value= <?=$function_caller?>>
</form>

<script type="text/javascript">
    document.getElementById('answer_keys').submit(); // SUBMIT FORM
</script>

</div>
<?php
// header("Location:".base_url()."login/answer_this");
