<?php
/**
*
* TableFactory Interface
*
* @author SmO
* @since 14.02.2014
*
**/
namespace abstractFactory\factory\TableFactory;

interface TableFactory
{
	public function createTable();
	public function createRow();
	public function createHeader();
	public function createCell($content);
}
?>