<?php
/**
*
* TextHeader class
*
* @author SmO
* @since 13.02.2014
*
**/
namespace abstractFactory\factory\textTable\TextHeader;

use abstractFactory\factory\Header\Header;

class TextHeader extends Header
{
	public function display()
	{
		echo "+" . str_repeat("-", (count($this->cells) * 21) -1 ) . "+\n";
		foreach ($this->cells as $cell)
		{
			$cell->display();
		}
		echo "|\n";
		echo "+" . str_repeat("-", (count($this->cells) * 21) -1 ) . "+\n";
	}
}
?>