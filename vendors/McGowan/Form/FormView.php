<?php

namespace McGowan\Form
{
	defined('IN_LIBRARY') or exit;
	
	class FormView extends View
	{
		protected $_form = null;
		protected $_fields = array();
	
		public function __construct(Form $form)
		{
			parent::__construct('form.tmpl.php');
			$this->_form = $form;
		}
		
		public function method($value = null) {
		
		}
		
		public function action($value = null) {
		
		}
		
		public function addField(FieldView $field) {
			$this->_fields[] = $field;
		}
		
		public function beforeRender() {
			$this->set('fields', $this->_fields);
		}
	}
}