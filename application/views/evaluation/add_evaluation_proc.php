<?php
$table_name = "tbl_evaluation";

$eval_data = array(
    'event_id' => $this->session->userdata("event_id"),
    'user_id' => $this->session->userdata("user_id"),
    'title' => $this->session->userdata("title"),
    'datexx' => $this->session->userdata("datexx"),
    'venue' => $this->session->userdata("venue"),
    'ans1' => $this->session->userdata("ans1"),
    'ans2' => $this->session->userdata("ans2"),
    'ans3' => $this->session->userdata("ans3"),
    'ans4' => $this->session->userdata("ans4"),
    'ans5' => $this->session->userdata("ans5"),
    'ans6' => $this->session->userdata("ans6"),
    'ans7' => $this->session->userdata("ans7"),
    'ans8' => $this->session->userdata("ans8")

);

echo insert($eval_data, $table_name);

redirect('/evaluation/view_evaluation/'.$this->session->userdata("event_id")."/".$this->session->userdata("user_id"));
?>