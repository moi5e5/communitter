<?php

/**
 * members actions.
 *
 * @package    community
 * @subpackage members
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class membersActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->MEMBERS  =   sfGuardUserPeer::getActiveUsers();
  }


  public function executeView(sfWebRequest $request)
  {
    $this->forwardUnless($this->id = $this->getRequestParameter('id'), 'members', 'index');
    $this->MEMBER   =   sfGuardUserPeer::getActiveUser($this->id);
    
    if(!$this->MEMBER or !$this->MEMBER->getIsActive())
    {
        $this->forward404();
    }

    $this->ITEMS    =   CommunityItemsPeer::getItemsByUser($this->id);

  }

}
