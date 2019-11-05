<?php

namespace TolgaKaragol\Emoji\Category;

use TolgaKaragol\Emoji\Category\Sub\Flags\Flag;
use TolgaKaragol\Emoji\Category\Sub\Flags\CountryFlag;
use TolgaKaragol\Emoji\Category\Sub\Flags\SubdivisionFlag;
use TolgaKaragol\Emoji\Traits\FlagsTrait;

/**
 * Class Flags
 * @package TolgaKaragol\Emoji\Category\Flags
 *
 * @method static Flag flag()
 * @method static CountryFlag countryFlag()
 * @method static SubdivisionFlag subdivisionFlag()
 */
class Flags
{
    use FlagsTrait;

}