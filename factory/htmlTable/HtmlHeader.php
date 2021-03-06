<?php
/**
*
* HtmlHeader class
*
* @author SmO
* @since 13.02.2014
*
**/
namespace abstractFactory\factory\htmlTable\HtmlHeader;

use abstractFactory\factory\Header\Header;

class HtmlHeader extends Header
{
	public function display()
	{
		echo "	<tr style=\"font-weight: bold;\">";
		foreach ($this->cells as $cell)
		{
			$cell->display();
		}
		echo "	</tr>";
	}
}
?>