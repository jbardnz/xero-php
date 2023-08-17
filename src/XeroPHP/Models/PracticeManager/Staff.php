<?php

namespace XeroPHP\Models\PracticeManager;

use XeroPHP\Models\PracticeManager\Client\AccountManager;
use XeroPHP\Models\PracticeManager\Client\BillingClient;
use XeroPHP\Models\PracticeManager\Client\Contact;
use XeroPHP\Models\PracticeManager\Client\Group;
use XeroPHP\Models\PracticeManager\Client\JobManager;
use XeroPHP\Models\PracticeManager\Client\Note;
use XeroPHP\Models\PracticeManager\Client\Relationship;
use XeroPHP\Models\PracticeManager\Client\Type;
use XeroPHP\Remote;
use XeroPHP\Traits\PracticeManager\CustomFieldValueTrait;

class Staff extends Remote\Model
{
    /**
     * Xero identifier.
     *
     * @property string UUID
     */

    /**
     * Full name of Client/organisation (max length = 255).
     *
     * @property string Name
     */

    /**
     * First name of Client person (max length = 255).
     *
     * @property string FirstName
     */

    /**
     * Last name of Client person (max length = 255).
     *
     * @property string LastName
     */

    /**
     * Other name of Client person (max length = 255).
     *
     * @property string OtherName
     */

    /**
     * Date of birth of Client person (max length = 255).
     *
     * @property string DateOfBirth
     */

    /**
     * Email address of Client person (umlauts not supported) (max length = 255).
     *
     * @property string Email
     */

    /**
     * Physical Address
     * @property string Address
     * @property string City
     * @property string Region
     * @property string PostCode
     * @property string Country
     */

    /**
     * Postal Address
     * @property string PostalAddress
     * @property string PostalCity
     * @property string PostalRegion
     * @property string PostalPostCode
     * @property string PostalCountry
     */

    /**
     * @property string Phone
     * @property string Fax
     * @property string Website
     * @property string ReferralSource
     * @property string ExportCode
     * @property string IsProspect
     * where the tax number is masked with *** except last 3 digits
     * @property string TaxNumber
     * @property string CompanyNumber
     * @property string BusinessNumber
     * e.g. Individual, Company, Trust, etc
     * @property string BusinessStructure
     * @property string BalanceMonth
     * Yes or No
     * @property string PrepareGST
     * Yes or No
     * @property string GSTRegistered
     * Monthly, 2 Monthly, 6 Monthly
     * @property string GSTPeriod
     * Invoice, Payment, Hybrid
     * @property string GSTBasis
     * Standard Option, Estimate Option, Ratio Option
     * @property string ProvisionalTaxBasis
     * @property string ProvisionalTaxRatio
     * Yes or No
     * @property string SignedTaxAuthority
     * @property string TaxAgent
     * With EOT, Without EOT, Unlinked
     * @property string AgencyStatus
     * IR3, IR3NR, IR4, IR6, IR7, IR9, PTS
     * @property string ReturnType
     *
     * The following fields apply to AU clients only
     * Yes or No
     * @property string PrepareActivityStatement
     * Yes or No
     * @property string PrepareTaxReturn
     *
     *
     * @property string AgencyStatus
     * @property string AgencyStatus
     */

    /**
     * See Client contacts.
     *
     * @property Contact[] Contacts
     */

    /**
     * See Account Manager.
     *
     * @property AccountManager AccountManager
     *
     */

    /**
     * See Job Manager.
     *
     * @property JobManager JobManager
     *
     */

    /**
     * See Type
     *
     * @property Type Type
     *
     */

    /**
     * See BillingClient
     *
     * @property BillingClient BillingClient
     *
     */

    /**
     * See Note
     *
     * @property Note[] Note
     *
     */

    /**
     * See Group
     *
     * @property Group[] Group
     *
     */

    /**
     * See Relationship
     *
     * @property Relationship[] Relationship
     *
     */

    /**
     * Get the resource uri of the class (Clients) etc.
     *
     * @return string
     */
    public static function getResourceURI()
    {
        return 'staff.api/list';
    }

    /**
     * Get the root node name.  Just the unqualified classname.
     *
     * @return string
     */
    public static function getRootNodeName()
    {
        return 'Staff';
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
            'UUID'                     => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'Name'                     => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'Email'                    => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'Phone'                    => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'Mobile'                   => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'Address'                  => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'PayrollCode'              => [false, self::PROPERTY_TYPE_STRING, null, false, false],
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
     * @param string $value
     *
     * @return Client
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
     * @return Client
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
    public function getEmail()
    {
        return $this->_data['Email'];
    }

    /**
     * @param string $value
     *
     * @return Client
     */
    public function setEmail($value)
    {
        $this->propertyUpdated('Email', $value);
        $this->_data['Email'] = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->_data['Phone'];
    }

    /**
     * @param string $value
     *
     * @return Client
     */
    public function setPhone($value)
    {
        $this->propertyUpdated('Phone', $value);
        $this->_data['Phone'] = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getMobile()
    {
        return $this->_data['Mobile'];
    }

    /**
     * @param string $value
     *
     * @return Client
     */
    public function setMobile($value)
    {
        $this->propertyUpdated('Mobile', $value);
        $this->_data['Mobile'] = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->_data['Address'];
    }

    /**
     * @param string $value
     *
     * @return Client
     */
    public function setAddress($value)
    {
        $this->propertyUpdated('Address', $value);
        $this->_data['Address'] = $value;

        return $this;
    }


    /**
     * @return string
     */
    public function getPayrollCode()
    {
        return $this->_data['PayrollCode'];
    }

    /**
     * @param string $value
     *
     * @return Client
     */
    public function setPayrollCode($value)
    {
        $this->propertyUpdated('PayrollCode', $value);
        $this->_data['PayrollCode'] = $value;

        return $this;
    }
  
}
