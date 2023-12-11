<?php

namespace XeroPHP\Models\PracticeManager\Invoice;


use XeroPHP\Models\PracticeManager\Model\UuidAndNameModel;

class Client extends UuidAndNameModel
{
    /**
     * Get the root node name.  Just the unqualified classname.
     *
     * @return string
     */
    public static function getRootNodeName()
    {
        return 'Client';
    }
}
