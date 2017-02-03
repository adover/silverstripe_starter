<?php

class RegionsPage extends Page{
	private static $has_many = array (
		'Regions' => 'Region',
	);	
}

class RegionsPage_Controller extends Page_Controller{
	
}