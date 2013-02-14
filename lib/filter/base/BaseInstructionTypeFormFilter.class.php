<?php

/**
 * InstructionType filter form base class.
 *
 * @package    propel
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseInstructionTypeFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'style_class' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'name'        => new sfValidatorPass(array('required' => false)),
      'style_class' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('instruction_type_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'InstructionType';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'name'        => 'Text',
      'style_class' => 'Text',
    );
  }
}
