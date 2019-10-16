<?php
/**
 * Created by PhpStorm.
 * User: tolgakaragol
 * Date: 2019-10-16
 * Time: 20:13
 */

namespace TolgaKaragol\Emoji\Factory;

interface SingletonInterface
{
    /**
     * @return SingletonInterface
     */
    public static function getInstance(): SingletonInterface;

}