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
	class Submit extends Input
	{
        public function __construct($name = '', $value = '')
        {
            parent::__construct('submit', $name, $value);
        }
        
        protected function defaultAttributes()
        {
            return array_merge(parent::defaultAttributes(), array());
        }
	}
	
}