<?php

/**
 * Solution form.
 *
 * @package    propel
 * @subpackage form
 * @author     Your name here
 */
class SolutionForm extends BaseSolutionForm
{
  public function configure()
  {

    // Widgets
    $this->setWidgets(
           array('instruction' => new sfWidgetFormTextarea(),
                 'step'        => new sfWidgetFormInputText(),
           ));

    // Validators
    $this->setValidators(
           array('instruction' => new sfValidatorString(array('max_length' => 255, 'required' => true)),
                 'step'        => new sfValidatorNumber(array('min' => 0, 'max' => 100, 'required' => true)),
           ));

  }
}
