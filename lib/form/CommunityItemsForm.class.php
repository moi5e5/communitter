<?php

/**
 * CommunityItems form.
 *
 * @package    community
 * @subpackage form
 * @author     Your name here
 */
class CommunityItemsForm extends BaseCommunityItemsForm
{
  public function configure()
  {

      $this->unsetFields();
      $this->setCommunityValidators();

  }

  private function setCommunityValidators()
  {

    $this->setValidators(array(
      'name'   => new sfValidatorString(),
      'brief' => new sfValidatorString(),
      'tags' => new sfValidatorString(),
      'content' => new sfValidatorString(),
    ));

  }

  private function unsetFields()
  {

    unset(
      $this['community_items_id'],
      $this['user_id'],
      $this['filename'],
      $this['likes'],
      $this['is_default'],
      $this['updated_at'],
      $this['created_at']
    );

  }

  protected  function doUpdateObject($values)
  {
        $values['user_id'] = sfContext::getInstance()->getUser()->getGuardUser()->getId();
        parent::doUpdateObject($values);
  }


}
