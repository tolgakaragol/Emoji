<?php

namespace TolgaKaragol\Emoji\Factory;

use TolgaKaragol\Emoji\Category\ArrowInterface;
use TolgaKaragol\Emoji\Category\ArrowTrait;

/**
 * Class ArrowFactory
 * @package TolgaKaragol\Emoji\Factory
 */
class ArrowFactory extends AbstractEmojiFactory implements ArrowInterface
{
    use ArrowTrait;
}