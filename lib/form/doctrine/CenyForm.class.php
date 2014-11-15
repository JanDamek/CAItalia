<?php

/**
 * Ceny form.
 *
 * @package    caitalia
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CenyForm extends BaseCenyForm
{
  public function configure()
  {
        $image_form = new CenyRadkyForm();
        $this->embedForm('radek', $image_form);
        $this->widgetSchema['radek']->setLabel('Přidat řádek');
    }

    public function bind(array $taintedValues = null, array $taintedFiles = null)
    {
        //var_dump($taintedValues);

        if (
        empty ($taintedValues['radek']['sl1']) and
        empty ($taintedValues['radek']['sl2']) and
        empty ($taintedValues['radek']['sl3']) and
        empty ($taintedValues['radek']['sl4']) and
        empty ($taintedValues['radek']['sl5']) and
        empty ($taintedValues['radek']['sl6']) and
        empty ($taintedValues['radek']['sl7']) and
        empty ($taintedValues['radek']['sl8']) and
        empty ($taintedValues['radek']['sl9']) and
        empty ($taintedValues['radek']['radek']) )
        {
            unset($this->embeddedForms['radek'], $taintedValues['radek']);
            $this->validatorSchema['radek'] = new sfValidatorPass();
        }
        else
        {
            $this->embeddedForms['radek']->getObject()->setCeny($this->getObject());
        }

        $output = parent::bind($taintedValues, $taintedFiles);
        foreach ($this->embeddedForms as $name => $form)
        {
            $this->embeddedForms[$name]->isBound = true;
            if (isset($this->values[$name]))
                $this->embeddedForms[$name]->values = $this->values[$name];
        }

        return $output;
    }
}
