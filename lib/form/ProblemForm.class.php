<?php

/**
 * Problem form.
 *
 * @package    propel
 * @subpackage form
 * @author     Your name here
 */
class ProblemForm extends BaseProblemForm
{
  public function configure()
  {

    // Widgets
    $this->setWidgets(
           array(
                'title'       => new sfWidgetFormInputText(),
                'description' => new sfWidgetFormTextarea(),
                )
           );

    // Validators
    $this->setValidators(
           array(
                'title'       => new sfValidatorString(array('max_length' => 255, 'required' => true)),
                'description' => new sfValidatorString(array('max_length' => 255, 'required' => true)),
                )
           );

  }
}
