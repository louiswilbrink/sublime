<?php

/**
 * Solution filter form base class.
 *
 * @package    propel
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseSolutionFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'problem_id'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'step'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'instruction'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'instruction_type_id' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'problem_id'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'step'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'instruction'         => new sfValidatorPass(array('required' => false)),
      'instruction_type_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('solution_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Solution';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'problem_id'          => 'Number',
      'step'                => 'Number',
      'instruction'         => 'Text',
      'instruction_type_id' => 'Number',
    );
  }
}
