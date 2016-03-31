<?php
/**
 * Created by PhpStorm.
 * User: m
 * Date: 3/31/16
 * Time: 12:07 PM
 */

namespace Mrabbani\LaravelInfobip\Facade;


use Illuminate\Support\Facades\Facade;

class SMS extends Facade
{

    protected static function getFacadeAccessor() { return 'sms'; }
}