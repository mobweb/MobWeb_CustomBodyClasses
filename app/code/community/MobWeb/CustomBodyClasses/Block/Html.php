<?php

/**
 * @author    Louis Bataillard <info@mobweb.ch>
 * @package    MobWeb_CustomBodyClasses
 * @copyright    Copyright (c) MobWeb GmbH (https://mobweb.ch)
 */
class MobWeb_CustomBodyClasses_Block_Html extends Mage_Page_Block_Html
{

    /**
     * Modified this function to allow an array as $className, where all elements are added as individual classes
     */
    public function addBodyClass($className)
    {
        if(!is_array($className)) {
            $classNames = array($className);
        } else {
            $classNames = $className;
        }

        foreach($classNames AS $className) {
            $className = preg_replace('#[^a-z0-9]+#', '-', strtolower($className));
            $this->setBodyClass($this->getBodyClass() . ' ' . $className);
        }
        return $this;
    }
}
