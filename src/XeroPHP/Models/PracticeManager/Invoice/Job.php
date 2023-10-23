<?php

namespace XeroPHP\Models\PracticeManager\Invoice;

use XeroPHP\Models\Accounting\Invoice;
use XeroPHP\Remote;

class Job extends Remote\Model
{
    /**
     * @property int ID
     * @property string Name
     * @property string Description
     * @property string ClientOrderNumber
     * @property Task[] Tasks
     * @property Cost[] Costs
     */

    /**
     * Get the resource uri of the class (Jobs) etc.
     *
     * @return string
     */
    public static function getResourceURI($method = null, $individual = null)
    {
        if($method === Remote\Request::METHOD_POST){
            return 'job.api/add';
        }else if($method === Remote\Request::METHOD_PUT){
            return 'job.api/update';
        }

        if($individual){
            return 'job.api/get';
        }

        return 'job.api/list';
    }

    /**
     * Get the root node name.  Just the unqualified classname.
     *
     * @return string
     */
    public static function getRootNodeName()
    {
        return 'Job';
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
            Remote\Request::METHOD_PUT,
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
            'UUID'              => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'ID'                => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'Name'              => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'Description'       => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'ClientUUID'        => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'ContactUUID'       => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'TemplateUUID'      => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'CategoryUUID'      => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'State'             => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'Budget'            => [false, self::PROPERTY_TYPE_FLOAT, null, false, false],
            'ClientOrderNumber'      => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'StartDate'         => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'DueDate'           => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'Client'            => [false, self::PROPERTY_TYPE_OBJECT, 'PracticeManager\\Client', true, false],
            'Tasks'             => [false, self::PROPERTY_TYPE_OBJECT, 'PracticeManager\\Invoice\\Task', true, false],
            'Costs'             => [false, self::PROPERTY_TYPE_OBJECT, 'PracticeManager\\Invoice\\Cost', true, false],
        ];
    }

    public static function isPageable()
    {
        return false;
    }

    public function getUUID()
    {
        return $this->_data['UUID'];
    }

    /**
     * @param string $value
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
    public function getID()
    {
        return $this->_data['ID'];
    }

    /**
     * @param string $value
     *
     * @return self
     */
    public function setID($value)
    {
        $this->propertyUpdated('ID', $value);
        $this->_data['ID'] = $value;

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

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->_data['Description'];
    }

    /**
     * @param string $value
     *
     * @return self
     */
    public function setDescription($value)
    {
        $this->propertyUpdated('Description', $value);
        $this->_data['Description'] = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getClientNumber()
    {
        return $this->_data['ClientNumber'];
    }

    /**
     * @param string $value
     *
     * @return self
     */
    public function setClientNumber($value)
    {
        $this->propertyUpdated('ClientNumber', $value);
        $this->_data['ClientNumber'] = $value;

        return $this;
    }


    public function getClientUUID()
    {
        return $this->_data['ClientUUID'];
    }

    /**
     * @param string $value
     *
     * @return self
     */
    public function setClientUUID($value)
    {
        $this->propertyUpdated('ClientUUID', $value);
        $this->_data['ClientUUID'] = $value;

        return $this;
    }


    public function getContactUUID()
    {
        return $this->_data['ContactUUID'];
    }

    /**
     * @param string $value
     *
     * @return self
     */
    public function setContactUUID($value)
    {
        $this->propertyUpdated('ContactUUID', $value);
        $this->_data['ContactUUID'] = $value;

        return $this;
    }





    public function getStartDate()
    {
        return $this->_data['StartDate'];
    }

    /**
     * @param string $value
     *
     * @return self
     */
    public function setStartDate($value)
    {
        $this->propertyUpdated('StartDate', $value);
        $this->_data['StartDate'] = $value;

        return $this;
    }



    public function getDueDate()
    {
        return $this->_data['DueDate'];
    }

    /**
     * @param string $value
     *
     * @return self
     */
    public function setDueDate($value)
    {
        $this->propertyUpdated('DueDate', $value);
        $this->_data['DueDate'] = $value;

        return $this;
    }


    public function getTemplateUUID()
    {
        return $this->_data['TemplateUUID'];
    }

    /**
     * @param string $value
     *
     * @return self
     */
    public function setTemplateUUID($value)
    {
        $this->propertyUpdated('TemplateUUID', $value);
        $this->_data['TemplateUUID'] = $value;

        return $this;
    }


    public function getState()
    {
        return $this->_data['State'];
    }

    /**
     * @param string $value
     *
     * @return self
     */
    public function setState($value)
    {
        $this->propertyUpdated('State', $value);
        $this->_data['State'] = $value;

        return $this;
    }

    /**
     * @return Task[]|Remote\Collection
     */
    public function getTasks()
    {
        return $this->_data['Tasks'];
    }

    /**
     * @param Task $value
     *
     * @return self
     */
    public function addTask(Task $value)
    {
        $this->propertyUpdated('Tasks', $value);
        if (! isset($this->_data['Tasks'])) {
            $this->_data['Tasks'] = new Remote\Collection();
        }
        $this->_data['Tasks'][] = $value;

        return $this;
    }

    /**
     * @return Cost[]|Remote\Collection
     */
    public function getCosts()
    {
        return $this->_data['Costs'];
    }

    /**
     * @param Cost $value
     *
     * @return self
     */
    public function addCost(Cost $value)
    {
        $this->propertyUpdated('Costs', $value);
        if (! isset($this->_data['Costs'])) {
            $this->_data['Costs'] = new Remote\Collection();
        }
        $this->_data['Costs'][] = $value;

        return $this;
    }
}
