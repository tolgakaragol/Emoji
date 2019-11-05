<?php

namespace TolgaKaragol\Emoji\Traits;

use TolgaKaragol\Emoji\Traits\Sub\Symbols\TransportSignTrait;
use TolgaKaragol\Emoji\Traits\Sub\Symbols\WarningTrait;
use TolgaKaragol\Emoji\Traits\Sub\Symbols\ArrowTrait;
use TolgaKaragol\Emoji\Traits\Sub\Symbols\ReligionTrait;
use TolgaKaragol\Emoji\Traits\Sub\Symbols\ZodiacTrait;
use TolgaKaragol\Emoji\Traits\Sub\Symbols\AvSymbolTrait;
use TolgaKaragol\Emoji\Traits\Sub\Symbols\GenderTrait;
use TolgaKaragol\Emoji\Traits\Sub\Symbols\OtherSymbolTrait;
use TolgaKaragol\Emoji\Traits\Sub\Symbols\KeycapTrait;
use TolgaKaragol\Emoji\Traits\Sub\Symbols\AlphanumTrait;
use TolgaKaragol\Emoji\Traits\Sub\Symbols\GeometricTrait;

/**
 * Trait SymbolsTrait
 * @package TolgaKaragol\Emoji\Traits\SymbolsTrait
 */
trait SymbolsTrait
{
    use TransportSignTrait;
    use WarningTrait;
    use ArrowTrait;
    use ReligionTrait;
    use ZodiacTrait;
    use AvSymbolTrait;
    use GenderTrait;
    use OtherSymbolTrait;
    use KeycapTrait;
    use AlphanumTrait;
    use GeometricTrait;
}