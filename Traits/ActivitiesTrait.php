<?php

namespace TolgaKaragol\Emoji\Traits;

use TolgaKaragol\Emoji\Traits\Sub\Activities\EventTrait;
use TolgaKaragol\Emoji\Traits\Sub\Activities\AwardMedalTrait;
use TolgaKaragol\Emoji\Traits\Sub\Activities\SportTrait;
use TolgaKaragol\Emoji\Traits\Sub\Activities\GameTrait;
use TolgaKaragol\Emoji\Traits\Sub\Activities\ArtsCraftsTrait;

/**
 * Trait ActivitiesTrait
 * @package TolgaKaragol\Emoji\Traits\ActivitiesTrait
 */
trait ActivitiesTrait
{
    use EventTrait;
    use AwardMedalTrait;
    use SportTrait;
    use GameTrait;
    use ArtsCraftsTrait;
}