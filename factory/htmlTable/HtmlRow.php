<?php
/**
*
* HtmlRow class
*
* @author SmO
* @since 13.02.2014
*
**/
namespace abstractFactory\factory\htmlTable\HtmlRow;

use abstractFactory\factory\Row\Row;

class HtmlRow extends Row
{
	public function display()
	{
		echo "	<tr>";
		foreach ($this->cells as $cell)
		{
			$cell->display();
		}
		echo "	</tr>";
	}
}
?>