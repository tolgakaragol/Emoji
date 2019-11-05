<?php

namespace TolgaKaragol\Emoji\Traits;

use TolgaKaragol\Emoji\Traits\Sub\FoodDrink\FoodFruitTrait;
use TolgaKaragol\Emoji\Traits\Sub\FoodDrink\FoodVegetableTrait;
use TolgaKaragol\Emoji\Traits\Sub\FoodDrink\FoodPreparedTrait;
use TolgaKaragol\Emoji\Traits\Sub\FoodDrink\FoodAsianTrait;
use TolgaKaragol\Emoji\Traits\Sub\FoodDrink\FoodMarineTrait;
use TolgaKaragol\Emoji\Traits\Sub\FoodDrink\FoodSweetTrait;
use TolgaKaragol\Emoji\Traits\Sub\FoodDrink\DrinkTrait;
use TolgaKaragol\Emoji\Traits\Sub\FoodDrink\DishwareTrait;

/**
 * Trait FoodDrinkTrait
 * @package TolgaKaragol\Emoji\Traits\FoodDrinkTrait
 */
trait FoodDrinkTrait
{
    use FoodFruitTrait;
    use FoodVegetableTrait;
    use FoodPreparedTrait;
    use FoodAsianTrait;
    use FoodMarineTrait;
    use FoodSweetTrait;
    use DrinkTrait;
    use DishwareTrait;
}