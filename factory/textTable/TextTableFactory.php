<?php
/**
*
* TextTableFactory class
*
* @author SmO
* @since 14.02.2014
*
**/
namespace abstractFactory\factory\textTable\TextTableFactory;

use abstractFactory\factory\TableFactory\TableFactory;
use abstractFactory\factory\textTable\TextTable\TextTable;
use abstractFactory\factory\textTable\TextRow\TextRow;
use abstractFactory\factory\textTable\TextHeader\TextHeader;
use abstractFactory\factory\textTable\TextCell\TextCell;

class TextTableFactory implements TableFactory
{
	public function createTable()
	{
		$table = new TextTable();
		return $table;
	}
	
	public function createRow()
	{
		$row = new TextRow();
		return $row;
	}
	
	public function createHeader()
	{
		$header = new TextHeader();
		return $header;
	}
	
	public function createCell($content)
	{
		$cell = new TextCell($content);
		return $cell;
	}
}

?>