<?php
/**
 * Created by PhpStorm.
 * User: Thilina
 * Date: 8/19/17
 * Time: 11:08 PM
 */

namespace Salary\Common\Model;

use Model\BaseModel;

class PayFrequency extends BaseModel
{
    public $table = 'PayFrequency';
    public function getAdminAccess()
    {
        return array("get","element","save","delete");
    }

    public function getManagerAccess()
    {
        return array("get","element","save","delete");
    }

    public function getUserAccess()
    {
        return array("get","element");
    }
}
