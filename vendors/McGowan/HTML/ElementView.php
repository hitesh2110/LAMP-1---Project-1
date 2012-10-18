<?php
namespace McGowan\HTML {
	/**
	 * @ignore
	 */
	defined('IN_LIBRARY') or exit;
	
	class ElementView extends \McGowan\View
	{
    private $_element_name = '';
    private $_closed_element = false;
	
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
			
			$this->template_path(dirname(__FILE__) . DS . 'templates' . DS);
			$this->template_file('element.tmpl.php');
		}
		
		public function name($value = null)
		{
      if( null === $value )
      {
        return $this->_element_name;
      }
      
      $this->_element_name = trim($value);
      return $this;
		}
	
	}
}