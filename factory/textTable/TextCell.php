<?php
/**
*
* TextCell class
*
* @author SmO
* @since 13.02.2014
*
**/
namespace abstractFactory\factory\textTable\TextCell;

use abstractFactory\factory\Cell\Cell;

class TextCell extends Cell
{
	public function display()
	{
		echo "|" . str_pad($this->content, 20);
	}
}
?>