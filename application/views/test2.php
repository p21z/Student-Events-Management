<a href="<?=base_url()?>test">Return</a> hello! <?=$notif_id?>

<?php

$seen_data = array
(
  'user_id' => $this->session->userdata('idxx'),
  'notif_id' => $notif_id
);

echo insert($seen_data, 'tbl_seen');

?>

