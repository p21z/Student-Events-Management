<?php

function getConnectionx()
{
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "semm";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection Failed: ".$conn->connect_error);
	}

	return $conn;
}

function get($table_name)
{
	$conn = getConnectionx();
	$sql = "SELECT * FROM $table_name";
	$result = $conn->query($sql);
	return $result;
}

function get_where($table_name, $id)
{
	$conn = getConnectionx();
	$sql = "SELECT * FROM $table_name where id=$id";
	$result = $conn->query($sql);
	return $result;
}

function get_where_custom($table_name, $column, $value)
{
	$conn = getConnectionx();
	$sql = "SELECT * FROM $table_name where ".$column."='".$value."'";
	$result = $conn->query($sql);
	return $result;
}



function get_where_double($table_name, $column1, $value1, $column2, $value2)
{
	$conn = getConnectionx();
	$sql = "SELECT * FROM $table_name where ".$column1." ='".$value1."' or ".$column2."='".$value2."'";
	$result = $conn->query($sql);
	return $result;
}

function get_where_double_and($table_name, $column1, $value1, $column2, $value2)
{
	$conn = getConnectionx();
	$sql = "SELECT * FROM $table_name where ".$column1." ='".$value1."' and ".$column2."='".$value2."'";
	$result = $conn->query($sql);
	return $result;
}

function count_where($table_name, $column1, $value1)
{
	$conn = getConnectionx();
	$sql = "SELECT * FROM $table_name where ".$column1." = '".$value1."'";
	$result = $conn->query($sql);
	$rowcount=mysqli_num_rows($result);
	return $rowcount;
}

function count_where_double($table_name, $column1, $value1, $column2, $value2)
{
	$conn = getConnectionx();
	$sql = "SELECT * FROM $table_name where ".$column1." = '".$value1."' or ".$column2." = '".$value2."'";
	$result = $conn->query($sql);
	$rowcount=mysqli_num_rows($result);
	return $rowcount;
}

function count_where_double_and($table_name, $column1, $value1, $column2, $value2)
{
	$conn = getConnectionx();
	$sql = "SELECT * FROM $table_name where ".$column1." = '".$value1."' and ".$column2." = '".$value2."'";
	$result = $conn->query($sql);
	$rowcount=mysqli_num_rows($result);
	return $rowcount;
}

// function count_where_double($table_name, $column1, $value1, $column2, $value2)
// {
// 	$conn = getConnectionx();
// 	$sql = "SELECT * FROM $table_name where ".$column1." ='".$value1."' and ".$column2."='".$value2."'";
// 	$result = $conn->query($sql);
// 	return $result;
// }

function insert($data, $table_name) 
{
	$conn = getConnectionx();
	$fields = ""; $values = "";

	foreach ($data as $key => $value) {
		$fields = $fields."$key".",";
		$values = $values."'".$value."',";
	}

	$cnt_fields = strlen($fields);
	$cnt_values = strlen($values);

	$fields = substr($fields, 0, $cnt_fields-1);
	$values = substr($values, 0, $cnt_values-1);

	$sql = "INSERT INTO $table_name (".$fields.") values (".$values.")";

	if ($conn->query($sql) === TRUE) {
    	$result =  "Record created successfully";
	} else {
	    $result = "Error: " . $sql . "<br>" . $conn->error;
	}
	return $result;
}

function update($data, $id, $table_name) 
{
	$conn = getConnectionx();
	$str="";

	foreach ($data as $key => $value) {
		$str = $str.$key."='".$value."',";
	}

	$cnt_str = strlen($str);

	$str = substr($str, 0, $cnt_str-1);

	$sql = "UPDATE $table_name set ".$str." where id='".$id."'";

	if ($conn->query($sql) === TRUE) {
    	$result =  " ";
	} else {
	    $result = "Error: " . $sql . "<br>" . $conn->error;
	}
	return $result;
}

function update_from($data, $id, $table_name, $condition) 
{
	$conn = getConnectionx();
	$str="";

	foreach ($data as $key => $value) {
		$str = $str.$key."='".$value."',";
	}

	$cnt_str = strlen($str);

	$str = substr($str, 0, $cnt_str-1);

	$sql = "UPDATE $table_name set ".$str." where ".$condition." ='".$id."'";

	if ($conn->query($sql) === TRUE) {
    	$result =  " ";
	} else {
	    $result = "Error: " . $sql . "<br>" . $conn->error;
	}
	return $result;
}


function delete($id, $table_name)
{
	$conn = getConnectionx();
	$sql = "DELETE FROM $table_name where id=$id";
	if ($conn->query($sql) == TRUE) {
		$result = "Record deleted successfully";
	} else {
		$result = "Error: " . $sql . "<br>" . $conn->error;	
	}
	return $result;
}

function delete_from($id, $table_name, $column)
{
	$conn = getConnectionx();
	$sql = "DELETE FROM $table_name where ".$column."=$id";
	if ($conn->query($sql) == TRUE) {
		$result = "Record deleted successfully";
	} else {
		$result = "Error: " . $sql . "<br>" . $conn->error;	
	}
	return $result;
}

function custom_query($mysql_query)
{
	//for select statements only
	$conn = getConnectionx();
	$sql = $mysql_query;
	$result = $conn->query($sql);	
	return $result;
}

function base_urlx()
{
	$project_name = "project_zero";
	return "http://" . $_SERVER['SERVER_NAME'].'/'.$project_name.'/'; 
}



function _hash_string($str)
{
	$hashed_string = sha1($str);//password_hash($str, PASSWORD_BCRYPT, array('cost'=>11));
	return $hashed_string;
}

function _verify_hash($plain_text_str, $hashed_string)
{
	$result = password_verify($plain_text_str, $hashed_string);
	return $result; //[1]TRUE or [0]FALSE
}

function _get_pword_from_username($username, $table_name) 
{
	$user_data = get_where_custom($table_name, "username", $username);
	foreach ($user_data as $key => $row) {
		return $password1 = $row['password1'];
	}
	
}

function generate_random_string($length)
{
	$characters = '23456789abcdefghjkmnpqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ';
	$randomString = '';
	for ($i=0;$i< $length; $i++){
		$randomString .= $characters[rand(0, strlen($characters) - 1)];
	}
	return $randomString;
}

function _get_photo_from_id($table_name, $id) {
	$user_data = get_where($table_name, $id);
	foreach ($user_data as $key => $row) {
		return $photo = $row['photo'];
	}
}

function _get_sliderpic_from_id($table_name, $id) {
	$sliderpic_data = get_where($table_name, $id);
	foreach ($sliderpic_data as $key => $row) {
		return $picture = $row['picture'];
	}
}

function count_rows($table_name)
{
	$conn = getConnectionx();
	$sql = "SELECT * FROM $table_name";
	$result = $conn->query($sql);
	$rowcount=mysqli_num_rows($result);
	return $rowcount;
}

function _fire_email($target_email, $subject, $msg)
{
    $to = $target_email;
    $subject = $subject;
    $message = $msg;
    $headers = "From: cbabaranjr@gmail.com\r\n";
    $headers .= "Content-type: text/html; charset=\"UTF-8\"; format=flowed \r\n";
    mail($to, $subject, $message, $headers);
}

function get_max($table_name)
{
	$mysql_query = "SELECT MAX(id) as last_id FROM $table_name";
	$result = custom_query($mysql_query);
	foreach ($result as $key => $row) {
		return $row['last_id'];
	}
}

function _get_id_from_token($token) 
{
	$result = get_where_custom("tokens", "token", $token);
	foreach ($result as $key => $row) {
		return $row['user_id'];
	}
}

function _get_id_from_username($username) 
{
	$result = get_where_custom("students", "username", $username);
	foreach ($result as $key => $row) {
		return $row['id'];
	}
}

function _get_firstname_from_id($id) 
{
	$user_data = get_where("users", $id);
	foreach ($user_data as $key => $row) {
		return $firstname = $row['firstname'];
	}
}

function _get_status_from_id($id) 
{
	$user_data = get_where("users", $id);
	foreach ($user_data as $key => $row) {
		return $status = $row['status'];
	}
}

function _get_accttype_from_id($id) 
{
	$user_data = get_where("users", $id);
	foreach ($user_data as $key => $row) {
		return $acct_type = $row['acct_type'];
	}
}

function get_fullname_from_id($id)
{
	$user_data = get_where("users", $id);
	foreach ($user_data as $key => $row) {
		return $acct_type = $row['firstname']." ".$row['lastname'];
	}
}

function get_bounce($table_name1, $table_name2, $column1, $column2)
{
	$conn = getConnectionx();
	$sql = "SELECT * FROM $table_name1 FULL OUTER JOIN $table_name2 ON $table_name1.$column1=$table_name2.$column2 ORDER BY $table_name1.$column1";
	$result = $conn->query($sql);
	return $result;
}

function dati_ayaw_niya_sakin($ngayonshewanna)
{
	$conn = getConnectionx();
	$sql = "SELECT * FROM attendance FULL OUTER JOIN students ON attendance.s_id=students.id ORDER BY students.id";
	$result = $conn->query($sql);
	return $result;
}

function decent_function()
{
	$conn = getConnectionx();
	$sql = 
	"SELECT tbl_inclusion.prog_id FROM tbl_inclusion 
	FULL OUTER JOIN tbl_orgs 
	ON tbl_inclusion.org_id=tbl_orgs.org_id 
	ORDER BY tbl_inclusion.org_id";

	$result = $conn->query($sql);
	return $result;
}

function search_stud($table_name, $search)
{
	$conn = getConnectionx();
	$sql = "SELECT * FROM $table_name where
	 (id LIKE '%$search%' OR
	 year_level LIKE '%$search%' OR 
	 section LIKE '%$search%' OR 
	 program LIKE '%$search%' OR 
	 firstname LIKE '%$search%' OR 
	 middlename LIKE '%$search%' OR 
	 lastname LIKE '%$search%' OR 
	 email LIKE '%$search%' OR 
	 contact LIKE '%$search%' OR 
	 officer LIKE '%$search%' OR 
	 gender LIKE '%$search%') AND (status = 0)";
	$result = $conn->query($sql);
	return $result;
}

function search_inactive_stud($table_name, $search)
{
	$conn = getConnectionx();
	$sql = "SELECT * FROM $table_name where
	 (id LIKE '%$search%' OR
	 year_level LIKE '%$search%' OR 
	 section LIKE '%$search%' OR 
	 program LIKE '%$search%' OR 
	 firstname LIKE '%$search%' OR 
	 middlename LIKE '%$search%' OR 
	 lastname LIKE '%$search%' OR 
	 email LIKE '%$search%' OR 
	 contact LIKE '%$search%' OR 
	 officer LIKE '%$search%' OR 
	 gender LIKE '%$search%') AND (status = 1)";
	$result = $conn->query($sql);
	return $result;
}

function search_event($table_name, $search)
{
	
	$conn = getConnectionx();
	$sql = "SELECT * FROM $table_name where
	 (event_id LIKE '%$search%' OR
	 event_name LIKE '%$search%' OR 
	 e_date LIKE '%$search%' OR 
	 e_end LIKE '%$search%' OR 
	 venue LIKE '%$search%') AND (status = 0)";
	$result = $conn->query($sql);
	return $result;
}

function search_inactive_event($table_name, $search)
{
	
	$conn = getConnectionx();
	$sql = "SELECT * FROM $table_name where
	 (event_id LIKE '%$search%' OR
	 event_name LIKE '%$search%' OR 
	 e_date LIKE '%$search%' OR 
	 e_end LIKE '%$search%' OR 
	 venue LIKE '%$search%') AND (status = 1)";
	$result = $conn->query($sql);
	return $result;
}

function search_sanc($table_name, $search)
{
	
	$conn = getConnectionx();
	$sql = "SELECT * FROM $table_name where
	 sanction_id LIKE '%$search%' OR
	 sanction_name LIKE '%$search%' OR 
	 quantity LIKE '%$search%'";
	$result = $conn->query($sql);
	return $result;
}

function search_inactive_sanc($table_name, $search)
{
	
	$conn = getConnectionx();
	$sql = "SELECT * FROM $table_name where
	 (sanction_id LIKE '%$search%' OR
	 sanction_name LIKE '%$search%' OR 
	 quantity LIKE '%$search%') AND (status = 1)";
	$result = $conn->query($sql);
	return $result;
}

function search_account($table_name, $search)
{
	
	$conn = getConnectionx();
	$sql = "SELECT * FROM $table_name where
	 username LIKE '%$search%' OR
	 firstname LIKE '%$search%' OR
	 middlename LIKE '%$search%' OR 
	 lastname LIKE '%$search%' OR 
	 user_type LIKE '%$search%' OR 
	 contact LIKE '%$search%' OR 
	 email LIKE '%$search%'";
	$result = $conn->query($sql);
	return $result;
}

function get_last($table_name, $column)
{
	$conn = getConnectionx();
	$sql = "SELECT * FROM $table_name ORDER BY $column DESC LIMIT 1";
	$result = $conn->query($sql);
	return $result;
}

function get_desc($table_name, $column)
{
	$conn = getConnectionx();
	$sql = "SELECT * FROM $table_name ORDER BY $column DESC";
	$result = $conn->query($sql);
	return $result;
}

// PROJECT SPECIFIC FUNCTIONS

function get_where_desc($table_name, $column, $value, $column2)
{
	$conn = getConnectionx();
	$sql = "SELECT * FROM $table_name where ".$column."='".$value."'ORDER BY ".$column2." DESC";
	$result = $conn->query($sql);
	return $result;
}

function get_latest_0($table_name, $order_id)
{
	$conn = getConnectionx();
	$sql = "SELECT * FROM $table_name ORDER BY ".$order_id." DESC LIMIT 1";
	$result = $conn->query($sql);
	return $result;
}

function get_latest($table_name, $column, $value, $order_id)
{
	$conn = getConnectionx();
	$sql = "SELECT * FROM $table_name where ".$column."='".$value."'ORDER BY ".$order_id." DESC LIMIT 1";
	$result = $conn->query($sql);
	return $result;
}

function get_where_desc2($table_name, $column, $value)
{
	$conn = getConnectionx();
	$sql = "SELECT * FROM $table_name where ".$column."='".$value."'ORDER BY reserve_id DESC";
	$result = $conn->query($sql);
	return $result;
}

function get_latest_count($table_name, $column, $value, $order_id)
{
	$conn = getConnectionx();
	$sql = "SELECT * FROM $table_name where ".$column."='".$value."'ORDER BY ".$order_id." DESC LIMIT 1";
	$result = $conn->query($sql);
	$rowcount=mysqli_num_rows($result);
	return $rowcount;
}

function get_latest_2($table_name, $column, $value, $column2, $value2, $order_id)
{
	$conn = getConnectionx();
	$sql = "SELECT * FROM $table_name where ".$column."='".$value."' and ".$column2."!='".$value2."' ORDER BY ".$order_id." DESC LIMIT 1";
	$result = $conn->query($sql);
	return $result;
}

function get_latest_count_2($table_name, $column, $value, $column2, $value2, $order_id)
{
	$conn = getConnectionx();
	$sql = "SELECT * FROM $table_name where ".$column."='".$value."' and ".$column2."!='".$value2."' ORDER BY ".$order_id." DESC LIMIT 1";
	$result = $conn->query($sql);
	$rowcount=mysqli_num_rows($result);
	return $rowcount;
}

function get_where_not_2_custom($table_name, $column1, $value1, $column2, $value2)
{
	$conn = getConnectionx();
	$sql = "SELECT * FROM $table_name where ".$column1."!='".$value1."' and ".$column2." != '".$value2."'";
	$result = $conn->query($sql);
	return $result;
}

function get_where_not_custom($table_name, $column1, $value1)
{
	$conn = getConnectionx();
	$sql = "SELECT * FROM $table_name where ".$column1."!='".$value1."'";
	$result = $conn->query($sql);
	return $result;
}

function acc_search($table_name, $search)
{
	$conn = getConnectionx();
	$sql = "SELECT * FROM $table_name where
	 (id LIKE '%$search%' OR
	 user_type LIKE '%$search%' OR 
	 reference_id LIKE '%$search%' OR 
	 fullname LIKE '%$search%' OR 
	 username LIKE '%$search%')";
	$result = $conn->query($sql);
	return $result;
}

function food_search($table_name, $search)
{
	$conn = getConnectionx();
	$sql = "SELECT * FROM $table_name where
	 (food_id LIKE '%$search%' OR
	 food_name LIKE '%$search%' OR 
	 'image' LIKE '%$search%' OR 
	 description LIKE '%$search%' OR
	 status LIKE '%$search%')";
	$result = $conn->query($sql);
	return $result;
}

function food_av_search($table_name, $search)
{
	$conn = getConnectionx();
	$sql = "SELECT * FROM $table_name where
	 (food_id LIKE '%$search%' OR
	 food_name LIKE '%$search%' OR 
	 'image' LIKE '%$search%' OR 
	 description LIKE '%$search%') AND (status='Available')";
	$result = $conn->query($sql);
	return $result;
}

function reserve_active_search($table_name, $search)
{
	$conn = getConnectionx();
	$sql = "SELECT * FROM $table_name where
	 (reserve_id LIKE '%$search%' OR
	 customer_id LIKE '%$search%' OR 
	 customer_name LIKE '%$search%' OR 
	 xtime LIKE '%$search%' OR 
	 xdate LIKE '%$search%')  AND (status != 'Cleared')  AND (status != 'Denied')";
	$result = $conn->query($sql);
	return $result;
}

function reserve_inactive_search($table_name, $search)
{
	$conn = getConnectionx();
	$sql = "SELECT * FROM $table_name where
	 (reserve_id LIKE '%$search%' OR
	 customer_id LIKE '%$search%' OR 
	 customer_name LIKE '%$search%' OR 
	 xtime LIKE '%$search%' OR 
	 xdate LIKE '%$search%')  AND (status = 'Cleared' OR status = 'Denied')";
	$result = $conn->query($sql);
	return $result;
}

function order_pend_search($table_name, $search)
{
	$conn = getConnectionx();
	$sql = "SELECT * FROM $table_name where
	 (order_id LIKE '%$search%' OR
	 total_list LIKE '%$search%' OR
	 carts LIKE '%$search%' OR 
	 id LIKE '%$search%' OR 
	 fullname LIKE '%$search%')  AND (status = 'Pending')";
	$result = $conn->query($sql);
	return $result;
}

function order_rd_search($table_name, $search)
{
	$conn = getConnectionx();
	$sql = "SELECT * FROM $table_name where
	 (order_id LIKE '%$search%' OR
	 total_list LIKE '%$search%' OR
	 carts LIKE '%$search%' OR 
	 id LIKE '%$search%' OR 
	 fullname LIKE '%$search%')  AND (status = 'Ready')";
	$result = $conn->query($sql);
	return $result;
}

function order_dn_search($table_name, $search)
{
	$conn = getConnectionx();
	$sql = "SELECT * FROM $table_name where
	 (order_id LIKE '%$search%' OR
	 total_list LIKE '%$search%' OR
	 carts LIKE '%$search%' OR 
	 id LIKE '%$search%' OR 
	 fullname LIKE '%$search%')  AND (status != 'Pending' OR status != 'Ready')";
	$result = $conn->query($sql);
	return $result;
}

function order_mn_search($table_name, $search, $idxx)
{
	$conn = getConnectionx();
	$sql = "SELECT * FROM $table_name where
	 (order_id LIKE '%$search%' OR
	 total_list LIKE '%$search%' OR
	 carts LIKE '%$search%' OR 
	 id LIKE '%$search%' OR 
	 fullname LIKE '%$search%') AND (id = $idxx) ORDER BY order_id DESC";
	$result = $conn->query($sql);
	return $result;
}

function order_mn_search_count($table_name, $search, $idxx)
{
	$conn = getConnectionx();
	$sql = "SELECT * FROM $table_name where
	 (order_id LIKE '%$search%' OR
	 total_list LIKE '%$search%' OR
	 carts LIKE '%$search%' OR 
	 id LIKE '%$search%' OR 
	 fullname LIKE '%$search%') AND (id = $idxx) ORDER BY order_id DESC";
	$result = $conn->query($sql);
	$rowcount=mysqli_num_rows($result);
	return $rowcount;
}

?>
