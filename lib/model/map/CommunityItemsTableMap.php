<?php


/**
 * This class defines the structure of the 'community_items' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Wed Dec  1 11:51:27 2010
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class CommunityItemsTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.CommunityItemsTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
	  // attributes
		$this->setName('community_items');
		$this->setPhpName('CommunityItems');
		$this->setClassname('CommunityItems');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('COMMUNITY_ITEMS_ID', 'CommunityItemsId', 'INTEGER', true, null, null);
		$this->addForeignKey('USER_ID', 'UserId', 'INTEGER', 'sf_guard_user', 'ID', true, null, null);
		$this->addColumn('NAME', 'Name', 'VARCHAR', false, 255, null);
		$this->addColumn('BRIEF', 'Brief', 'VARCHAR', false, 255, null);
		$this->addColumn('TAGS', 'Tags', 'VARCHAR', false, 255, null);
		$this->addColumn('CONTENT', 'Content', 'LONGVARCHAR', true, null, null);
		$this->addColumn('FILENAME', 'Filename', 'VARCHAR', false, 255, null);
		$this->addColumn('LIKES', 'Likes', 'INTEGER', false, null, 0);
		$this->addColumn('IS_DEFAULT', 'IsDefault', 'BOOLEAN', false, null, false);
		$this->addColumn('UPDATED_AT', 'UpdatedAt', 'DATE', false, null, null);
		$this->addColumn('CREATED_AT', 'CreatedAt', 'DATE', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('sfGuardUser', 'sfGuardUser', RelationMap::MANY_TO_ONE, array('user_id' => 'id', ), 'RESTRICT', 'RESTRICT');
	} // buildRelations()

	/**
	 * 
	 * Gets the list of behaviors registered for this table
	 * 
	 * @return array Associative array (name => parameters) of behaviors
	 */
	public function getBehaviors()
	{
		return array(
			'symfony' => array('form' => 'true', 'filter' => 'true', ),
			'symfony_behaviors' => array(),
			'symfony_timestampable' => array('update_column' => 'updated_at', 'create_column' => 'created_at', ),
		);
	} // getBehaviors()

} // CommunityItemsTableMap
