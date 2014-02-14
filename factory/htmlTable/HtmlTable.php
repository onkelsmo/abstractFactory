<?php
/**
*
* HtmlTable class
*
* @author SmO
* @since 13.02.2014
*
**/
namespace abstractFactory\factory\htmlTable\HtmlTable;

use abstractFactory\factory\Table\Table;
class HtmlTable extends Table
{
	public function display()
	{
		echo "<table border=\"1\">";
		$this->header->display();
		foreach ($this->rows as $row)
		{
			$row->display();
		}
		echo "</table>";
	}
}
?>