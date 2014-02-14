<?php
/**
*
* Entrypoint to the Abstract-Factory-Pattern example
* 
* @author SmO
* @since 14.02.2014
*
**/
namespace abstractFactory;

include 'includes/includes.php';

use abstractFactory\factory\htmlTable\HtmlTablefactory\HtmlTableFactory;
use abstractFactory\factory\textTable\TextTableFactory\TextTableFactory;
use abstractFactory\factory\DataList\DataList;

/* use to see the html version */
$factory = new HtmlTableFactory();

/* use to see the console version */
//$factory = new TextTableFactory();

$table = $factory->createTable();
$header = $factory->createHeader();
$header->addCell($factory->createCell("Spalte 1"));
$header->addCell($factory->createCell("Spalte 2"));
$table->setHeader($header);

$row = $factory->createRow();
$row->addCell($factory->createCell("Zeile 1 / Spalte 1"));
$row->addCell($factory->createCell("Zeile 1 / Spalte 2"));
$table->addRow($row);

$table->display();

// Use of the DataList class
$data = array
(
		array('BMW', 'blau'),
		array('Peugeot', 'rot'),
		array('VW', 'schwarz'),
);

$list = new DataList(new HtmlTableFactory());
$list->showTable($data);

$list2 = new DataList(new TextTableFactory());
$list2->showTable($data);
?>