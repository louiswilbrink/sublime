<?php

/**
 * Solution form base class.
 *
 * @method Solution getObject() Returns the current form's model object
 *
 * @package    propel
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseSolutionForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'problem_id'          => new sfWidgetFormInputText(),
      'step'                => new sfWidgetFormInputText(),
      'instruction'         => new sfWidgetFormTextarea(),
      'instruction_type_id' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'problem_id'          => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'step'                => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'instruction'         => new sfValidatorString(),
      'instruction_type_id' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
    ));

    $this->widgetSchema->setNameFormat('solution[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Solution';
  }


}
