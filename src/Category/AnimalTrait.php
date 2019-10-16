<?php

namespace TolgaKaragol\Emoji\Category;

use TolgaKaragol\Emoji\Category\Animal\MammalTrait;

/**
 * Trait MammalTrait
 * @package TolgaKaragol\Emoji\Category
 */
trait AnimalTrait
{
    use MammalTrait,
        BirdTrait,
        ReptileTrait,
        MarineTrait,
        BugTrait
    ;

    protected static $frogFace = '&#128056';
}