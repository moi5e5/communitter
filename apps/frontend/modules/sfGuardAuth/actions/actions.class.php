<?php

/**
 * sfGuardAuth actions.
 *
 * @package    community
 * @subpackage sfGuardAuth
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
 
require_once(sfConfig::get('sf_plugins_dir').'/sfGuardPlugin/modules/sfGuardAuth/lib/BasesfGuardAuthActions.class.php');

class sfGuardAuthActions extends BasesfGuardAuthActions
{
	 
  public function getEmail()
  {
    return $this->getProfile()->getEmail();
  }
  public function setEmail($email)
  {
    $this->getProfile()->setEmail($email);
  }
          
}
