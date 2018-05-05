<?php
class Route
{
	static function start()
	{
		// контроллер и действие по умолчанию
		$controller_name = 'Main';
		//$controller_name_second = '';
		$action_name = 'index';
		
		
		$routes = explode('/', $_SERVER['REQUEST_URI']);
		$action_url = explode('?', $_SERVER['REQUEST_URI']); // будущее action_name

		// получаем имя контроллера
		if ( !empty($routes[1]) )
		{	
			$controller_name = $routes[1];
		}
		
		// получаем имя подраздела
		if ( !empty($routes[2]) )
		{
			$controller_name_second = $routes[2]; // в будущем второй уровень вложенности разделов
		}

		// необходимо добавить отработку action

		// добавляем префиксы
		$model_name = 'Model_'.$controller_name;
		$controller_name = 'Controller_'.$controller_name;
		$action_name = 'action_'.$action_name;

		// подцепляем файл с классом модели (файла модели может и не быть)

		$model_file = strtolower($model_name).'.php';
		$model_path = "application/models/".$model_file;
		if(file_exists($model_path))
		{
			include "application/models/".$model_file;
		}

		// подцепляем файл с классом контроллера
		$controller_file = strtolower($controller_name).'.php';
		$controller_path = "application/controllers/".$controller_file;
		if(file_exists($controller_path))
		{
			include "application/controllers/".$controller_file;
		}
		else
		{
			Route::ErrorPage404();
		}
		
		// создаем контроллер
		$controller = new $controller_name;
		$action = $action_name;
		
		if(method_exists($controller, $action))
		{
			// вызываем действие контроллера
			$controller->$action();
		}
		else
		{
			// здесь также разумнее было бы кинуть исключение
			Route::ErrorPage404();
		}

		// Запускаем модель перед view (нововведение в роутер)
		if(class_exists($model_name)) 
		{
			$model = new $model_name;
			$action = $action_name;
		
			if(method_exists($model, $action))
			{
				// вызываем действие контроллера
				$model->$action();
			}
		}

		function ErrorPage404()
		{
        	$host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        	header('HTTP/1.1 404 Not Found');
			header("Status: 404 Not Found");
			header('Location:'.$host.'404');
   		}
	}
}
?>