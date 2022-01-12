<?php
class Model_Blog extends Model
{
	public function get_data()
	{	
		include "application/core/connections.php";

		$link = new mysqli($host,$user,$pass,$db);
		$stmt = $link->prepare("SELECT * FROM blog ORDER BY id DESC");
		$stmt->execute();
		$result = $stmt->get_result();
		$stmt->close();
		$link->close();
		$data = $result->fetch_all(MYSQLI_ASSOC);
		return $data;
	}
}