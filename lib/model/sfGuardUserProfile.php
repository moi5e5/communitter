<?php


/**
 * Skeleton subclass for representing a row from the 'sf_guard_user_profile' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Wed Dec  1 10:34:09 2010
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    lib.model
 */
class sfGuardUserProfile extends BasesfGuardUserProfile {

	/**
	 * Initializes internal state of sfGuardUserProfile object.
	 * @see        parent::__construct()
	 */
	public function __construct()
	{
		// Make sure that parent constructor is always invoked, since that
		// is where any default values for this object are set.
		parent::__construct();
	}
	
	public function save(PropelPDO $con = null)
	{
		
		$this->setCommunityTypes(CommunityTypesPeer::getDefault());
		
		parent::save($con);
	}	

} // sfGuardUserProfile
