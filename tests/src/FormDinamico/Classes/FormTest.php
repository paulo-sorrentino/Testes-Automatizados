<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 30/11/14
 * Time: 17:52
 */

namespace FormDinamico\Classes;


class FormTest extends \PHPUnit_Framework_TestCase
{
    public function testSeTemSetFieldset()
    {
        $this->assertTrue(method_exists('FormDinamico\Classes\Form', 'setFieldset'),
            'A classe nao tem o metodo setFieldset'
        );
    }

    public function testSeTemRender()
    {
        $this->assertTrue(method_exists('FormDinamico\Classes\Form', 'render'),
            'A classe nao tem o metodo render'
        );
    }

    public function testSeTemAtributo()
    {
        $this->assertClassHasAttribute('atributos', 'FormDinamico\Classes\Form');
    }

    public function testSeTemValidator()
    {
        $this->assertClassHasAttribute('validator', 'FormDinamico\Classes\Form');
    }

    public function testSetterAndGetter()
    {
        $form = new Form(new Validator(new Request()), array());

        $form->set('atributo', 'valor');
        $this->assertEquals('valor', $form->get('atributo'));
    }

    public function testPopular()
    {
        $form = new Form(new Validator(new Request()), array());
        $form->setFieldset(new Fieldset());
        $parametro = array();
        $form->popular($parametro);

        $this->assertTrue(is_array($parametro));
    }
} 