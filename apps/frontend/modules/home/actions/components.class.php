<?php
	/**
	 * home actions components.
	 *
	 * @package    communitter
	 * @subpackage home
	 * @author     MoisŽs Rangel 
	 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
	 */
	class homeComponents extends sfComponents
	{
		public function executeMembers()
		{
                    $this->MEMBERS  =	sfGuardUserPeer::getActiveUsers(10);
		}

                public function executeItems()
                {
                    $this->ITEMS    =   CommunityItemsPeer::getItems(10);
                }
	}
	
?>