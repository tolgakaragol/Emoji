<?php

namespace TolgaKaragol\Emoji;

use TolgaKaragol\Emoji\Category\Activities;
use TolgaKaragol\Emoji\Category\AnimalsNature;
use TolgaKaragol\Emoji\Category\Component;
use TolgaKaragol\Emoji\Category\Flags;
use TolgaKaragol\Emoji\Category\FoodDrink;
use TolgaKaragol\Emoji\Category\Objects;
use TolgaKaragol\Emoji\Category\PeopleBody;
use TolgaKaragol\Emoji\Category\SmileysEmotion;
use TolgaKaragol\Emoji\Category\Symbols;
use TolgaKaragol\Emoji\Category\TravelPlaces;
use TolgaKaragol\Emoji\Traits\ActivitiesTrait;
use TolgaKaragol\Emoji\Traits\AnimalsNatureTrait;
use TolgaKaragol\Emoji\Traits\ComponentTrait;
use TolgaKaragol\Emoji\Traits\FlagsTrait;
use TolgaKaragol\Emoji\Traits\FoodDrinkTrait;
use TolgaKaragol\Emoji\Traits\ObjectsTrait;
use TolgaKaragol\Emoji\Traits\PeopleBodyTrait;
use TolgaKaragol\Emoji\Traits\SmileysEmotionTrait;
use TolgaKaragol\Emoji\Traits\SymbolsTrait;
use TolgaKaragol\Emoji\Traits\TravelPlacesTrait;

/**
 * Class Emoji
 * @package TolgaKaragol\Emoji
 *
 * @method static Activities activity()
 * @method static AnimalsNature animalsNature()
 * @method static Component component()
 * @method static Flags flag()
 * @method static FoodDrink foodDrink()
 * @method static Objects object()
 * @method static PeopleBody peopleBody()
 * @method static SmileysEmotion smileysEmotion()
 * @method static Symbols symbol()
 * @method static TravelPlaces travelPlace()
 */
class Emoji extends AllEmoji
{
    use ActivitiesTrait, AnimalsNatureTrait, ComponentTrait, FlagsTrait, FoodDrinkTrait, ObjectsTrait,
        PeopleBodyTrait, SmileysEmotionTrait, SymbolsTrait, TravelPlacesTrait;

    /** @var self $instance */
    private static $instance;

    /**
     * @return self
     */
    public static function getInstance(): self
    {
        if (self::$instance === null) {
            $className = self::class;
            self::$instance = new $className();
        }

        return self::$instance;
    }

    /**
     * @param $name
     * @param $arguments
     * @return Emoji
     */
    public static function __callStatic($name, $arguments)
    {
        return self::$instance;
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
     * @param $code
     * @return string
     */
    private static function htmlEntityDecode($code): string
    {
        return html_entity_decode($code, ENT_NOQUOTES, 'UTF-8');
    }

    /**
     * SingletonInterface constructor.
     */
    private function __construct()
    {
    }
}