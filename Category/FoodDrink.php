<?php

namespace TolgaKaragol\Emoji\Category;

use TolgaKaragol\Emoji\Category\Sub\FoodDrink\FoodFruit;
use TolgaKaragol\Emoji\Category\Sub\FoodDrink\FoodVegetable;
use TolgaKaragol\Emoji\Category\Sub\FoodDrink\FoodPrepared;
use TolgaKaragol\Emoji\Category\Sub\FoodDrink\FoodAsian;
use TolgaKaragol\Emoji\Category\Sub\FoodDrink\FoodMarine;
use TolgaKaragol\Emoji\Category\Sub\FoodDrink\FoodSweet;
use TolgaKaragol\Emoji\Category\Sub\FoodDrink\Drink;
use TolgaKaragol\Emoji\Category\Sub\FoodDrink\Dishware;
use TolgaKaragol\Emoji\Traits\FoodDrinkTrait;

/**
 * Class FoodDrink
 * @package TolgaKaragol\Emoji\Category\FoodDrink
 *
 * @method static FoodFruit foodFruit()
 * @method static FoodVegetable foodVegetable()
 * @method static FoodPrepared foodPrepared()
 * @method static FoodAsian foodAsian()
 * @method static FoodMarine foodMarine()
 * @method static FoodSweet foodSweet()
 * @method static Drink drink()
 * @method static Dishware dishware()
 */
class FoodDrink
{
    use FoodDrinkTrait;

}