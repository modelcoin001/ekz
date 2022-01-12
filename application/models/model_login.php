<?php
class Model_Login extends Model
{
	public function get_userdata($name)
	{	
		
		include "application/core/connections.php";

		$link = new mysqli($host,$user,$pass,$db);
		$stmt = $link->prepare("SELECT * FROM users WHERE name = (?) ");
		$stmt->bind_param('s', $name);
		$stmt->execute();
		$result = $stmt->get_result();
		$stmt->close();
		$link->close();
		$data = $result->fetch_array(MYSQLI_ASSOC);
		return $data;
	}
}