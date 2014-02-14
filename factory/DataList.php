<?php
/**
*
* DataList class
*
* @author SmO
* @since 14.02.2014
*
**/
namespace abstractFactory\factory\DataList;

use abstractFactory\factory\TableFactory\TableFactory;

class DataList
{
	protected $tableFactory = null;

	public function __construct(TableFactory $tableFactory)
	{
		$this->tableFactory = $tableFactory;
	}

	public function showTable($data)
	{
		$table = $this->tableFactory->createTable();
		$header = $this->tableFactory->createHeader();
		$header->addCell($this->tableFactory->createCell('Hersteller'));
		$header->addCell($this->tableFactory->createCell('Farbe'));

		$table->setHeader($header);

		foreach ($data as $line)
		{
			$row = $this->tableFactory->createRow();
			$table->addRow($row);
			foreach ($line as $field)
			{
				$cell = $this->tableFactory->createCell($field);
				$row->addCell($cell);
			}
		}

		$table->display();
	}
}
?>