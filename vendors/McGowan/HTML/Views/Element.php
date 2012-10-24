<?php
/**
 * McGowan\HTML
 */
namespace McGowan\HTML\Views {
	/**
	 * @ignore
	 */
	defined('IN_LIBRARY') or exit;
	
	/**
	 * Element
	 */
	class Element extends \McGowan\View
	{
		protected $_name = '';
		protected $_attributes = array();
		protected $_is_empty = false;
		protected $_children = array();
	
		/**
		 * __construct
		 *
		 * @access public
		 * @param array
		 * @return void
		 */
		public function __construct($name = '', array $data = array())
		{
			parent::__construct(null, $data);
			
			$this->template_path(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR);
			$this->template_file('element.tmpl.php');
			
			$this->_attributes = $this->defaultAttributes();
			
			$this->name($name);
		}
		
		final public function name($value = null)
		{
			if( null === $value )
			{
				return $this->_name;
			}
			
			$this->_name = trim($value);
			return $this;
		}
		
		final public function isEmpty($value = null)
		{
			if( null === $value ) {
				return $this->_is_empty;
			}
			
			$this->_is_empty = (bool) $value;
			return $this;
		}
		
		public function addChild(Element $child)
		{
			$this->_children[] = $child;
			return $this;
		}
		
		public function removeChild(Element $child)
		{
			if( false !== ($key = array_search($child, $this->_children)) )
			{
				unset($this->_children[$key]);
				return true;
			}
			
			return false;
		}
		
		public function hasChildren()
		{
			return !empty($this->_children);
		}
		
		public function children()
		{
			return $this->_children;
		}
		
		public function attr($attr, $value = null)
		{
			if( null === $value )
			{
				return isset($this->_attributes[$attr]) ? $this->_attributes[$attr] : null;
			}
			
			$this->_attributes[$attr] = $value;
			return $this;
		}
		
		protected function beforeRender()
		{
			$attributes = array();
			foreach( $this->_attributes as $name => $value ) {
				if( empty($value) ) {
					continue;
				}
				
				if( is_array($value) ) {
					$value = implode(' ', $value);
				}
				
				$attributes[] = $name . '="' . $value . '"';
			}
			$attributes = implode(' ', $attributes);
			
			$this->set('attributes', $attributes);
		}
		
		protected function defaultAttributes()
		{
			return array(
				'id' 	=> '',
				'class' => array(),
				'style' => '',
				'title' => ''
			);
		}
	}
}