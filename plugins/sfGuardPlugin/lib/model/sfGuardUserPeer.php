<?php

/*
 * This file is part of the symfony package.
 * (c) 2004-2006 Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 *
 * @package    symfony
 * @subpackage plugin
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: sfGuardUserPeer.php 7634 2008-02-27 18:01:40Z fabien $
 */
class sfGuardUserPeer extends PluginsfGuardUserPeer
{
	
    static public function getActiveUsers($max = null)
    {

            $criteria	=	new Criteria();
            if($max != null)
            {
                    $criteria->setLimit($max);
            }

            return self::doSelect(self::addAvailable($criteria));

    }

    static public function getActiveUser($id)
    {
    
        return self::retrieveByPk($id);
    }

    static public function addAvailable(Criteria $criteria)
    {
        $criteria->add('is_active', true, Criteria::EQUAL);
        return $criteria;
    }
	
}
