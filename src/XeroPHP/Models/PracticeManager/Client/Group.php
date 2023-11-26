<?php

namespace XeroPHP\Models\PracticeManager\Client;

use XeroPHP\Models\PracticeManager\Client;
use XeroPHP\Remote;

class Group extends Remote\Model
{
    /**
     * Get the resource uri of the class (Groups) etc.
     *
     * @return string
     */
    public static function getResourceURI($method = null, $individual = null)
    {
         if($method === Remote\Request::METHOD_POST){
             return 'clientgroup.api/add';
        }

        if($individual){
            return 'clientgroup.api/get';
        }

        return 'clientgroup.api/list';
    }

    /**
     * Get the root node name.  Just the unqualified classname.
     *
     * @return string
     */
    public static function getRootNodeName()
    {
        return 'Group';
    }

    /**
     * Get the guid property.
     *
     * @return string
     */
    public static function getGUIDProperty()
    {
        return 'UUID';
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
            Remote\Request::METHOD_POST,
            Remote\Request::METHOD_DELETE,
            Remote\Request::METHOD_GET,
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
            'UUID'          => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'Name'          => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'ClientUUID'    => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'Taxable'       => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'Clients'       => [false, self::PROPERTY_TYPE_OBJECT, 'PracticeManager\\Client', true, false],
        ];
    }

    public static function isPageable()
    {
        return false;
    }

    /**
     * @return string
     */
    public function getUUID()
    {
        return $this->_data['UUID'];
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


    public function setClientUUID($value)
    {
        $this->propertyUpdated('ClientUUID', $value);
        $this->_data['ClientUUID'] = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getTaxable()
    {
        return $this->_data['Taxable'];
    }

    /**
     * @param string $value
     *
     * @return self
     */
    public function setTaxable($value)
    {
        $this->propertyUpdated('Taxable', $value);
        $this->_data['Taxable'] = $value;

        return $this;
    }

    /**
     * @return Clients[]|Remote\Collection
     */
    public function getClients()
    {
        return $this->_data['Clients'];
    }




//    /**
//     * @param Cost $value
//     *
//     * @return self
//     */
//    public function addCost(Cost $value)
//    {
//        $this->propertyUpdated('Costs', $value);
//        if (! isset($this->_data['Costs'])) {
//            $this->_data['Costs'] = new Remote\Collection();
//        }
//        $this->_data['Costs'][] = $value;
//
//        return $this;
//    }
}
