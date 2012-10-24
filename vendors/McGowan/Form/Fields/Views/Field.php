<?php
/**
 * McGowan\Form\Fields\Views
 */
namespace McGowan\Form\Fields\Views
{
	/**
	 * @ignore
	 */
	defined('IN_LIBRARY') or exit;
	
	/**
	 *
	 */
	class Field extends \McGowan\HTML\Views\Element
	{
		protected $_label = null;
		protected $_element = null;
		
		public function __construct($title = '', \McGowan\HTML\Views\Element $element = null)
		{
			parent::__construct('div');
			
			$this->_label = new \McGowan\HTML\Views\Label($title);
			$this->_element = $element;
		}
		
		public function label()
		{
			return $this->_label;
		}
		
		public function field()
		{
			return $this->_element;
		}
		
		final public function addChild(\McGowan\HTML\Views\Element $element)
		{
			throw new \Exception('Field elements cannot have added children in this implementation other then the label and field type.');
		}
		
		final public function removeChild(\McGowan\HTML\Views\Element $element)
		{
			throw new \Exception('Field elements cannot have added children in this implementation other then the label and field type.');
		}
		
		protected function beforeRender()
		{
			$label_val = $this->_label->text()->value();
			if( !empty($label_val) ) {
				parent::addChild($this->_label);
			}
			
			parent::addChild($this->_element);
			
			parent::beforeRender();
		}
	}
	
}