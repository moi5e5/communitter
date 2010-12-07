<?php

/**
 * sfGuardUserProfile form base class.
 *
 * @method sfGuardUserProfile getObject() Returns the current form's model object
 *
 * @package    community
 * @subpackage form
 * @author     Your name here
 */
abstract class BasesfGuardUserProfileForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'sf_guard_user_profile_id' => new sfWidgetFormInputHidden(),
      'community_types_id'       => new sfWidgetFormPropelChoice(array('model' => 'CommunityTypes', 'add_empty' => false)),
      'user_id'                  => new sfWidgetFormPropelChoice(array('model' => 'sfGuardUser', 'add_empty' => false)),
      'name'                     => new sfWidgetFormInputText(),
      'lastname'                 => new sfWidgetFormInputText(),
      'lastname2'                => new sfWidgetFormInputText(),
      'email'                    => new sfWidgetFormInputText(),
      'twitteruser'              => new sfWidgetFormInputText(),
      'homepage'                 => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'sf_guard_user_profile_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->getSfGuardUserProfileId()), 'empty_value' => $this->getObject()->getSfGuardUserProfileId(), 'required' => false)),
      'community_types_id'       => new sfValidatorPropelChoice(array('model' => 'CommunityTypes', 'column' => 'community_types_id')),
      'user_id'                  => new sfValidatorPropelChoice(array('model' => 'sfGuardUser', 'column' => 'id')),
      'name'                     => new sfValidatorString(array('max_length' => 250)),
      'lastname'                 => new sfValidatorString(array('max_length' => 250)),
      'lastname2'                => new sfValidatorString(array('max_length' => 250)),
      'email'                    => new sfValidatorString(array('max_length' => 100)),
      'twitteruser'              => new sfValidatorString(array('max_length' => 255)),
      'homepage'                 => new sfValidatorString(array('max_length' => 255)),
    ));

    $this->widgetSchema->setNameFormat('sf_guard_user_profile[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfGuardUserProfile';
  }


}
