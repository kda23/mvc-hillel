<?php
class View
{
	function construct($content_view, $template_view, $data = null)
	{
		include 'application/views/'.$template_view;
	}
}
?>