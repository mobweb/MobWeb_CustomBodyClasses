<?php

/**
 * @author    Louis Bataillard <info@mobweb.ch>
 * @package    MobWeb_CustomBodyClasses
 * @copyright    Copyright (c) MobWeb GmbH (https://mobweb.ch)
 */
class MobWeb_CustomBodyClasses_Helper_Data extends Mage_Core_Helper_Abstract
{

    /**
     * 
     */
    public function getCustomBodyClasses()
    {
        // Collect custom body classes
        $customBodyClasses = array();

        // Example: Check if the current user is logged in
        $customBodyClasses[] = Mage::getSingleton('customer/session')->isLoggedIn() ? 'logged-in' : 'not-logged-in';

        // Do whatever you want here...
        $customBodyClasses[] = 'another-class';

        // Return all body classes here
        return $customBodyClasses;
    }
}