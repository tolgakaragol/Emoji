<?php

namespace TolgaKaragol\Emoji\Category;

use TolgaKaragol\Emoji\Category\Food\BeverageTrait;
use TolgaKaragol\Emoji\Category\Food\DishwareTrait;
use TolgaKaragol\Emoji\Category\Food\PreparedTrait;
use TolgaKaragol\Emoji\Category\Food\SweetTrait;
use TolgaKaragol\Emoji\Category\Food\VegetableTrait;

/**
 * Trait FoodTrait
 * @package TolgaKaragol\Emoji\Category
 */
trait FoodTrait
{
    use BeverageTrait,
        DishwareTrait,
        FlagTrait,
        PreparedTrait,
        SweetTrait,
        VegetableTrait
    ;
}