<?php
/**
 * Created by PhpStorm.
 * User: m
 * Date: 3/31/16
 * Time: 12:06 PM
 */

namespace Mrabbani\LaravelInfobip;


class SMS
{

    public static function saySomething() {
        return config('sms.message');
    }
}