<?php
/**
*
* TextRow class
*
* @author SmO
* @since 13.02.2014
*
**/
namespace abstractFactory\factory\textTable\TextRow;

use abstractFactory\factory\Row\Row;

class TextRow extends Row
{
	public function display()
	{
		foreach ($this->cells as $cell)
		{
			$cell->display();
		}
		echo "|\n";
		echo "+" . str_repeat("-", (count($this->cells) * 21) -1 ) . "+\n";
	}
}
?>