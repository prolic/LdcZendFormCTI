<?php
namespace LdcZendFormCTITest\Form\Element\TestAssets\Fieldset\RoleC;

use Zend\Form\Fieldset;

class OptionOneFieldset extends Fieldset
{
    public function __construct()
    {
        parent::__construct('role');

        $this->add(array(
            'type' => 'Zend\Form\Element\Hidden',
            'name' => 'id'
        ));

        $this->add(array(
            'type' => 'Zend\Form\Element\Hidden',
            'name' => 'type',
        ));

        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'firstOption',
            'options' => array(
                'label' => 'Option One',
            ),
        ));
    }
}
