<?php

/**
 * CommunityItems form base class.
 *
 * @method CommunityItems getObject() Returns the current form's model object
 *
 * @package    community
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseCommunityItemsForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'community_items_id' => new sfWidgetFormInputHidden(),
      'user_id'            => new sfWidgetFormPropelChoice(array('model' => 'sfGuardUser', 'add_empty' => false)),
      'name'               => new sfWidgetFormInputText(),
      'brief'              => new sfWidgetFormInputText(),
      'tags'               => new sfWidgetFormInputText(),
      'content'            => new sfWidgetFormTextarea(),
      'filename'           => new sfWidgetFormInputText(),
      'likes'              => new sfWidgetFormInputText(),
      'is_default'         => new sfWidgetFormInputCheckbox(),
      'updated_at'         => new sfWidgetFormDate(),
      'created_at'         => new sfWidgetFormDate(),
    ));

    $this->setValidators(array(
      'community_items_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->getCommunityItemsId()), 'empty_value' => $this->getObject()->getCommunityItemsId(), 'required' => false)),
      'user_id'            => new sfValidatorPropelChoice(array('model' => 'sfGuardUser', 'column' => 'id')),
      'name'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'brief'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'tags'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'content'            => new sfValidatorString(),
      'filename'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'likes'              => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'is_default'         => new sfValidatorBoolean(array('required' => false)),
      'updated_at'         => new sfValidatorDate(array('required' => false)),
      'created_at'         => new sfValidatorDate(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('community_items[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CommunityItems';
  }


}
