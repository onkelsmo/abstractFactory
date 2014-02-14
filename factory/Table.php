<?php
/**
*
* Table class for Abstract Factory Pattern
*
* @author SmO
* @since 13.02.2014
*
**/
namespace abstractFactory\factory\Table;

use abstractFactory\factory\Header\Header;
use abstractFactory\factory\Row\Row;

abstract class Table
{
	protected $header = null;
	protected $rows = array();
	
	public function setHeader(Header $header)
	{
		$this->header = $header;
	}
	
	public function addRow(Row $row)
	{
		$this->rows[] = $row;
	}
	
	abstract public function display();
}
?>