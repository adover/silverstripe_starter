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

	private static $has_many = array (
		'Comments' => 'ArticleComment'
	);

	private static $many_many = array (
		'Categories' => 'ArticleCategory'
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

		$fields->addFieldToTab('Root.Categories', CheckboxSetField::create(
			'Categories',
			'Selected categories',
			$this->Parent()->Categories()->map('ID', 'Title')
			));

		return $fields;
	}

	public function CategoriesList() {
		if($this->Categories()->exists()) {
			return implode(', ', $this->Categories()->column('Title'));
		}
	}

}

class ArticlePage_Controller extends Page_Controller {
		
	private static $allowed_actions = array(
		'CommentForm',
	);

	public function CommentForm() {
		$form = Form::create(
			$this,
			__FUNCTION__,
			FieldList::create(
				TextField::create('Name', ''),
				EmailField::create('Email', ''),
				TextAreaField::create('Comment', '')
			),
			FieldList::create(
				FormAction::create('handleComment', 'Post Comment')
				->setUseButtonTag(true)
				->addExtraClass('btn btn-default-color btn-lg')

			),
			RequiredFields::create('Name', 'Email', 'Comment')
		);

		foreach($form->Fields() as $field) {
			$field->setAttribute('placeholder', $field->getName().'*')
			->addExtraClass('form-control');
		}

		$form->addExtraClass('form-style');

		return $form;
	}

	public function handleComment($data, $form) {
		$existing = $this->Comments()->filter(array(
			'Comment' => $data['Comment']
		));

		if($existing->exists() && strlen($data['Comment']) > 20){
			$form->sessionMessage('That comment already exists', 'bad');

			return $this->redirectBack();
		}

		$comment = ArticleComment::create();
		$comment->ArticlePageID = $this->ID;
		$form->saveInto($comment);

		$form->SessionMessage('Thanks for your comment', good);

		return $this->redirectBack();

	}

}