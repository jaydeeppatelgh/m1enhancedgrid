<?php

/**
 * Sweet Tooth.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category   Sweet Tooth
 *
 * @copyright  Copyright (c) 2008-2011 Sweet Tooth (http://www.sweettoothrewards.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
abstract class JD_Enhancedgrid_Model_Collection_Decorator_Abstract extends Varien_Object
{
    protected $_collection = null;
    public function setCollection(JD_Enhancedgrid_Model_Resource_Eav_Mysql4_Product_Collection $collection)
    {
        $this->_collection = $collection;

        return $this;
    }

    public function getCollection()
    {
        return $this->_collection;
    }
}
