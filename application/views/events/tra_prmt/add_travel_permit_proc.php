<?php
$table_name ="tbl_tra_prmt";

$tra_prmt_data = array(
    'event_id' => $this->session->userdata("url_id_2"),
    'name' => $this->session->userdata("name"),
    'place' => $this->session->userdata("place"),
    'venue' => $this->session->userdata("venue"),
    'datexx' => $this->session->userdata("datexx"),
    'date_return' => $this->session->userdata("date_return"),
    'relation1' => $this->session->userdata("relation1"),
    'relation2' => $this->session->userdata("relation2"),
    'others' => $this->session->userdata("others")
);

echo insert($tra_prmt_data, $table_name);

?>