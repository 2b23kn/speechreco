<?php

function handle($params){
$newsxml = simplexml_load_file('http://www.sports-parents-japan.com/rss/all.xml','SimpleXMLElement',LIBXML_NOCDATA);
$newsvar = get_object_vars($newsxml);
$items   = $newsvar['channel']->item;
$i = 1;
	return array('items' => $items,'i' =>$i);
}