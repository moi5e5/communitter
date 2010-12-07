<?php

/**
 * CommunityTypes form base class.
 *
 * @method CommunityTypes getObject() Returns the current form's model object
 *
 * @package    community
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseCommunityTypesForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'community_types_id' => new sfWidgetFormInputHidden(),
      'name'               => new sfWidgetFormInputText(),
      'is_default'         => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'community_types_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->getCommunityTypesId()), 'empty_value' => $this->getObject()->getCommunityTypesId(), 'required' => false)),
      'name'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'is_default'         => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('community_types[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CommunityTypes';
  }


}
