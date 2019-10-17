<?php

namespace TolgaKaragol\Emoji\Factory;

use TolgaKaragol\Emoji\Category\AnimalTrait;

/**
 * Class AnimalFactory
 * @package TolgaKaragol\Emoji\Factory
 * @method static SingletonInterface mammal()
 * @method static SingletonInterface bird()
 * @method static SingletonInterface reptile()
 * @method static SingletonInterface marine()
 * @method static SingletonInterface bug()
 */
class AnimalFactory extends AbstractEmojiFactory
{
    use AnimalTrait;
}