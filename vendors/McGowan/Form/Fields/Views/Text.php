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
	class Text extends Input
	{
        public function __construct($name = '')
        {
            parent::__construct('text', $name);
        }
        
        protected function defaultAttributes()
        {
            return array_merge(parent::defaultAttributes(), array(
                'maxlength' => '',
                'size' => ''
            ));
        }
	}
	
}