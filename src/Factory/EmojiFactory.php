<?php

namespace TolgaKaragol\Emoji\Factory;

use TolgaKaragol\Emoji\Category\AnimalTrait;
use TolgaKaragol\Emoji\Category\ArrowTrait;
use TolgaKaragol\Emoji\Category\BodyPartTrait;
use TolgaKaragol\Emoji\Category\CurrencyTrait;
use TolgaKaragol\Emoji\Category\FlagTrait;
use TolgaKaragol\Emoji\Category\FoodTrait;
use TolgaKaragol\Emoji\Category\HearthTrait;
use TolgaKaragol\Emoji\Category\GameTrait;
use TolgaKaragol\Emoji\Category\MathTrait;
use TolgaKaragol\Emoji\Category\MusicTrait;
use TolgaKaragol\Emoji\Category\SmileyTrait;
use TolgaKaragol\Emoji\Category\StarTrait;
use TolgaKaragol\Emoji\Category\SymbolTrait;
use TolgaKaragol\Emoji\Category\TimeTrait;
use TolgaKaragol\Emoji\Category\WeatherTrait;

/**
 * Class EmojiFactory
 * @package TolgaKaragol\Emoji\Factory
 *
 * @method static AnimalFactory animal()
 * @method static ArrowFactory arrow()
 * @method static BodyPartFactory bodyPart()
 * @method static CurrencyFactory currency()
 * @method static FlagFactory flag()
 * @method static FoodFactory food()
 * @method static HearthFactory hearth()
 * @method static GameFactory game()
 * @method static MathFactory math()
 * @method static MusicFactory music()
 * @method static SmileyFactory smiley()
 * @method static StarFactory star()
 * @method static SymbolFactory symbol()
 * @method static TimeFactory time()
 * @method static WeatherFactory weather()
 */
class EmojiFactory extends AbstractEmojiFactory
{
    use AnimalTrait, ArrowTrait, BodyParttrait, CurrencyTrait, FlagTrait, FoodTrait, HearthTrait, GameTrait,
        MathTrait, MusicTrait, SmileyTrait, StarTrait, SymbolTrait, TimeTrait, WeatherTrait;

}
