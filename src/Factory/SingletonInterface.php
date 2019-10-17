<?php

namespace TolgaKaragol\Emoji\Factory;

interface SingletonInterface
{
    /**
     * @return SingletonInterface
     */
    public static function getInstance(): SingletonInterface;

}