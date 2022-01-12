<?php
class Model_Admin extends Model
{
	public function save_post($date, $title, $content)
	{	
		
		include "application/core/connections.php";

		$link = new mysqli($host,$user,$pass,$db);
		$stmt = $link->prepare("INSERT INTO blog (date, title, content) VALUES (?, ?, ?)");
		$stmt->bind_param('iss', $date, $title, $content);
		$stmt->execute();
		$stmt->close();
		$link->close();
        return true;
	}
}