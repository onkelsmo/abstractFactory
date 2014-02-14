<?php
/**
*
* HtmlTableFactory class
*
* @author SmO
* @since 14.02.2014
*
**/
namespace abstractFactory\factory\htmlTable\HtmlTablefactory;

use abstractFactory\factory\TableFactory\TableFactory;
use abstractFactory\factory\htmlTable\HtmlTable\HtmlTable;
use abstractFactory\factory\htmlTable\HtmlRow\HtmlRow;
use abstractFactory\factory\htmlTable\HtmlHeader\HtmlHeader;
use abstractFactory\factory\htmlTable\HtmlCell\HtmlCell;

class HtmlTableFactory implements TableFactory
{
	public function createTable()
	{
		$table = new HtmlTable();
		return $table;
	}
	
	public function createRow()
	{
		$row = new HtmlRow();
		return $row;
	}
	
	public function createHeader()
	{
		$header = new HtmlHeader();
		return $header;
	}
	
	public function createCell($content)
	{
		$cell = new HtmlCell($content);
		return $cell;
	}
}
?>