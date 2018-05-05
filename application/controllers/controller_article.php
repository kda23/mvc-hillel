<?php
class Controller_Article extends Controller
{
	public $data;
	public $view;

	public function __construct()
	{
		$this->view = new View();
	}
	function model_result($result) 
	{
		$this->data = $result;
		$this->action_data();
	}

	function action_data()
	{	
		$this->view->construct('article_view.php', 'template_view.php', $this->data);
	}
}
?>