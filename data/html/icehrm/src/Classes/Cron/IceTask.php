<?php
/**
 * Created by PhpStorm.
 * User: Thilina
 * Date: 8/20/17
 * Time: 9:34 AM
 */

namespace Classes\Cron;

interface IceTask
{
    public function execute($cron);
}
