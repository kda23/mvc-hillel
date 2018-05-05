<?php
class Model_Article extends Model
{
	public $arrayMysqlData;
	public $controller; 
	
	public function __construct()
	{
		$this->controller = new Controller_Article();
	}

	//Первой запускаем метод модели
	public function action_index() {	

		Model::connect_db();

		$url = $_SERVER['REQUEST_URI'];
		$urlAction = explode('/', $url);

		$sqlRequest = "SELECT text FROM BlogTable WHERE (url = '$urlAction[2]')"; // Нашли нужную строку по части url
		$resultSelect = $this->conn->query($sqlRequest);
		$row = $resultSelect->fetch_assoc();

		// Пушим в контроллер
		$this->controller->model_result($row['text']); 
	}
}

?>