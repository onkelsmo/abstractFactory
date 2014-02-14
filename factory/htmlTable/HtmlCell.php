<?php
/**
*
* HtmlCell class
*
* @author SmO
* @since 13.02.2014
*
**/
namespace abstractFactory\factory\htmlTable\HtmlCell;

use abstractFactory\factory\Cell\Cell;

class HtmlCell extends Cell
{
	public function display()
	{
		echo "	<td>{$this->content}</td>";
	}
}
?>