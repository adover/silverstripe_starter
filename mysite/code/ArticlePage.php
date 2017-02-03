<?php

class ArticlePage extends Page {
	
	private static $db = array ( 
		'Date' => 'Date',
		'Teaser' => 'Text',
		'Author' => 'Varchar'

	);

	private static $has_one = array (
		'Photo' => 'Image',
		'Brochure' => 'File'
	);

	private static $can_be_root = false;

	public function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->addFieldToTab('Root.Main', DateField::create('Date', 'Date of article')
			->setConfig('showcalendar', true)
		, 'Content');
		$fields->addFieldToTab('Root.Main', TextareaField::create('Teaser'));
		$fields->addFieldToTab('Root.Main', TextField::create('Author', 'Author of article')
			->setDescription('If multiple authors, separate with commas')
			->setMaxLength(50)
		, 'Content');
		$fields->addFieldToTab('Root.Attachments', $photo = UploadField::create('Photo'));
		$fields->addFieldToTab('Root.Attachments', $brochure = UploadField::create('Bruchure', 'Travel Brochure, PDF'));

		$photo->getValidator()->setAllowedExtensions(array('png', 'gif', 'jpg'));
		$photo->setFolderName('travel-photos');

		$brochure->getValidator()->setAllowedExtensions(array('pdf'));
		$brochure->setFolderName('travel-brochures');

		return $fields;
	}

}

class ArticlePage_Controller extends Page_Controller {
	
}