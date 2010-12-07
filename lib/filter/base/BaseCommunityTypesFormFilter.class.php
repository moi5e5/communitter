<?php

/**
 * CommunityTypes filter form base class.
 *
 * @package    community
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseCommunityTypesFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'               => new sfWidgetFormFilterInput(),
      'is_default'         => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'name'               => new sfValidatorPass(array('required' => false)),
      'is_default'         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('community_types_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CommunityTypes';
  }

  public function getFields()
  {
    return array(
      'community_types_id' => 'Number',
      'name'               => 'Text',
      'is_default'         => 'Boolean',
    );
  }
}
