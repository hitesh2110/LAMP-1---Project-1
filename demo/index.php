<?php
/**
 * @ignore
 */
define('IN_DEMO', true);
define('ROOT_PATH', dirname(__FILE__) . DIRECTORY_SEPARATOR);
require_once ROOT_PATH . 'bootstrap.php';

/* Create a new template view instance */
$template = new Demo\Views\Template();
$template->navigationItem('getting-started', array('#active' => true));

/* Append / set the child (contents) */
$page = new Demo\Views\Pages\GettingStarted();

/* Build the form ... */
$form = new McGowan\Form\Views\Form();
$form->addChild( new \McGowan\Form\Fields\Views\Field('Name', new McGowan\Form\Fields\Views\Text('name') ) );
$form->addChild( new \McGowan\Form\Fields\Views\Field('Email', new McGowan\Form\Fields\Views\Email('email') ) );
$form->addChild( new \McGowan\Form\Fields\Views\Field('', new McGowan\Form\Fields\Views\Submit('submit', 'Send')) );

/* Add the form to the page view */
$page->set('form', $form);

/* Add the page view to the template view */
$template->content( $page );

/* Render the template */
print $template;