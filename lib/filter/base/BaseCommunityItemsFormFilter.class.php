<?php

/**
 * CommunityItems filter form base class.
 *
 * @package    community
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseCommunityItemsFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_id'            => new sfWidgetFormPropelChoice(array('model' => 'sfGuardUser', 'add_empty' => true)),
      'name'               => new sfWidgetFormFilterInput(),
      'brief'              => new sfWidgetFormFilterInput(),
      'tags'               => new sfWidgetFormFilterInput(),
      'content'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'filename'           => new sfWidgetFormFilterInput(),
      'likes'              => new sfWidgetFormFilterInput(),
      'is_default'         => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'updated_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'user_id'            => new sfValidatorPropelChoice(array('required' => false, 'model' => 'sfGuardUser', 'column' => 'id')),
      'name'               => new sfValidatorPass(array('required' => false)),
      'brief'              => new sfValidatorPass(array('required' => false)),
      'tags'               => new sfValidatorPass(array('required' => false)),
      'content'            => new sfValidatorPass(array('required' => false)),
      'filename'           => new sfValidatorPass(array('required' => false)),
      'likes'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'is_default'         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'updated_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('community_items_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CommunityItems';
  }

  public function getFields()
  {
    return array(
      'community_items_id' => 'Number',
      'user_id'            => 'ForeignKey',
      'name'               => 'Text',
      'brief'              => 'Text',
      'tags'               => 'Text',
      'content'            => 'Text',
      'filename'           => 'Text',
      'likes'              => 'Number',
      'is_default'         => 'Boolean',
      'updated_at'         => 'Date',
      'created_at'         => 'Date',
    );
  }
}
