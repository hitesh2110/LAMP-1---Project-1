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
	abstract class Input extends \McGowan\HTML\Views\Element
	{
        public function __construct($type = '', $name = '', $value = '')
        {
            parent::__construct('input', array());
            
            $this->type($type);
            $this->value($value);
            $this->attrName($name);
        }
        
        final public function type($value = null)
        {
            if( null === $value ) {
                return isset($this->_attributes['type']) ? $this->_attributes['type'] : '';
            }
            
            $this->_attributes['type'] = $value;
            return $this;
        }
        
        final public function attrName($value = null)
        {
            if( null === $value ) {
                return isset($this->_attributes['name']) ? $this->_attributes['type'] : '';
            }
            
            $this->_attributes['name'] = trim($value);
            return $this;
        }
        
        final public function value($value = null)
        {
            if( null === $value ) {
                return isset($this->_attributes['value']) ? $this->_attributes['value'] : '';
            }
            
            $this->_attributes['value'] = $value;
            return $this;
        }
        
        protected function defaultAttributes()
        {
            return array_merge(parent::defaultAttributes(), array(
                'type' => '',
                'name' => '',
                'value' => ''
            ));
        }
	}
	
}