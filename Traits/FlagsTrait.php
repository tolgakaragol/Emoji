<?php

namespace TolgaKaragol\Emoji\Traits;

use TolgaKaragol\Emoji\Traits\Sub\Flags\FlagTrait;
use TolgaKaragol\Emoji\Traits\Sub\Flags\CountryFlagTrait;
use TolgaKaragol\Emoji\Traits\Sub\Flags\SubdivisionFlagTrait;

/**
 * Trait FlagsTrait
 * @package TolgaKaragol\Emoji\Traits\FlagsTrait
 */
trait FlagsTrait
{
    use FlagTrait;
    use CountryFlagTrait;
    use SubdivisionFlagTrait;
}