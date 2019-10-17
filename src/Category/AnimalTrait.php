<?php

namespace TolgaKaragol\Emoji\Category;

use TolgaKaragol\Emoji\Category\Animal\BirdTrait;
use TolgaKaragol\Emoji\Category\Animal\BugTrait;
use TolgaKaragol\Emoji\Category\Animal\MammalTrait;
use TolgaKaragol\Emoji\Category\Animal\MarineTrait;
use TolgaKaragol\Emoji\Category\Animal\ReptileTrait;

/**
 * Trait MammalTrait
 * @package TolgaKaragol\Emoji\Category
 */
trait AnimalTrait
{
    use BugTrait, BirdTrait, MammalTrait,
        ReptileTrait, MarineTrait;

    protected static $frogFace = '&#128056';
}