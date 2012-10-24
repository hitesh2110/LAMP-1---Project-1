<?php

namespace McGowan\Form\Views
{
	defined('IN_LIBRARY') or exit;
	
	class Form extends \McGowan\HTMl\Views\Element
	{
		public function __construct()
		{
			parent::__construct('form');
		}
		
		public function addChild(\McGowan\HTML\Views\Element $field)
		{
			if( !($field instanceof \McGowan\Form\Fields\Views\Field) )
			{
				throw new \Exception('Only type \McGowan\Form\Fields\Views\Field can be added as a child of type Form.');
			}
			
			return parent::addChild($field);
		}
		
		public function removeChild(\McGowan\HTML\Views\Element $field)
		{
			if( !($field instanceof \McGowan\Form\Fields\Views\Field) )
			{
				throw new \Exception('Only type \McGowan\Form\Fields\Views\Field exist as children of type Form.');
			}
			
			return parent::removeChild($field);
		}
		
		protected function defaultAttributes()
		{
			return parent::defaultAttributes() + array(
				'action' => '',
				'method' => '',
				'name' => ''
			);
		}
	}
}