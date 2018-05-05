<?php
class Model_Admin extends Model
{
	public function push_data_base($url, $content)
	{
	
		Model::connect_db();

     	$sqlRequest = "INSERT INTO BlogTable (text, url) VALUES ('$content', '$url')";
		$resultConnect = $this->conn->query($sqlRequest);
		$this->conn->close();
	}
}
?>