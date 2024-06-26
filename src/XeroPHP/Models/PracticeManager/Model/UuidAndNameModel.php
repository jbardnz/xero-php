<?php

namespace XeroPHP\Models\PracticeManager\Model;

use XeroPHP\Remote;

abstract class UuidAndNameModel extends Remote\Model
{
    /**
     * @property string ID
     * @property string Name
     */

    /**
     * Get the resource uri of the class (AccountManagers) etc.
     *
     * @return string
     */
    public static function getResourceURI()
    {
        return '';
    }

    /**
     * Get the guid property.
     *
     * @return string
     */
    public static function getGUIDProperty()
    {
        return '';
    }

    /**
     * Get the stem of the API (core.xro) etc.
     *
     * @return string|null
     */
    public static function getAPIStem()
    {
        return Remote\URL::API_PRACTICE_MANAGER;
    }

    /**
     * Get the supported methods.
     */
    public static function getSupportedMethods()
    {
        return [
        ];
    }

    /**
     * Get the properties of the object.  Indexed by constants
     *  [0] - Mandatory
     *  [1] - Type
     *  [2] - PHP type
     *  [3] - Is an Array
     *  [4] - Saves directly.
     *
     * @return array
     */
    public static function getProperties()
    {
        return [
            'UUID'       => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'Name'       => [false, self::PROPERTY_TYPE_STRING, null, false, false],
        ];
    }

    public static function isPageable()
    {
        return false;
    }

    /**
     * @return int
     */
    public function getUUID()
    {
        return $this->_data['UUID'];
    }

    /**
     * @param int $value
     *
     * @return self
     */
    public function setUUID($value)
    {
        $this->propertyUpdated('UUID', $value);
        $this->_data['UUID'] = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->_data['Name'];
    }

    /**
     * @param string $value
     *
     * @return self
     */
    public function setName($value)
    {
        $this->propertyUpdated('Name', $value);
        $this->_data['Name'] = $value;

        return $this;
    }
}
