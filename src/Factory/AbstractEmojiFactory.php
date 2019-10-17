<?php

namespace TolgaKaragol\Emoji\Factory;

use TolgaKaragol\Emoji\Exception\InvalidCategoryException;

abstract class AbstractEmojiFactory  implements SingletonInterface
{
    /** @var SingletonInterface $instance */
    private static $instance;

    /**
     * @return SingletonInterface
     */
    public static function getInstance(): SingletonInterface
    {
        if (self::$instance === null) {
            $className = self::class;
            self::$instance = new $className();
        }

        return self::$instance;
    }

    /**
     * @param $code
     * @return string
     */
    private static function htmlEntityDecode($code): string
    {
        return html_entity_decode($code, ENT_NOQUOTES, 'UTF-8');
    }

    /**
     * @param $name
     * @param $arguments
     * @return string
     * @throws \ReflectionException
     * @throws InvalidCategoryException
     */
    public static function __callStatic($name, $arguments)
    {
        $classNamespace = __NAMESPACE__ . '\\' . $name;
        if (! class_exists($classNamespace)) {
            $trySubFactory = true;
            $classNamespace = sprintf('%s\\SubFactory\\%s', __NAMESPACE__, $name);
        }

        if (isset($trySubFactory) && ! class_exists($classNamespace)) {
            throw new InvalidCategoryException($name);
        }

        $reflectionClass = new \ReflectionClass($classNamespace);
        $interfaceNames = $reflectionClass->getInterfaceNames();
        if (! in_array(SingletonInterface::class, $interfaceNames, true)) {
            throw new InvalidCategoryException($name);
        }

        /** @var SingletonInterface $classNamespace */
        $categoryInstance = $classNamespace::getInstance();
        if ($arguments === null) {
            return $categoryInstance;
        }

        return $categoryInstance->{$arguments[0]};
    }

    /**
     * @param $name
     * @return string
     */
    public function __get($name)
    {
        return self::htmlEntityDecode(self::${$name});
    }

    /**
     * @param $name
     * @param $value
     */
    public function __set($name, $value)
    {
        // Do Nothing
    }

    /**
     * @param $name
     * @return bool
     */
    public function __isset($name)
    {
        return isset(self::${$name});
    }

    /**
     * SingletonInterface constructor.
     */
    private function __construct()
    {
    }
}