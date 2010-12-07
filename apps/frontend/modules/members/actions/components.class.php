<?php
	/**
	 * home actions components.
	 *
	 * @package    communitter
	 * @subpackage home
	 * @author     MoisŽs Rangel
	 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
	 */
	class membersComponents extends sfComponents
	{
		public function executeAdditem()
		{
                    $this->form = new CommunityItemsForm();
		}
	}

?>