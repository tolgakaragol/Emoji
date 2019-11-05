<?php

namespace TolgaKaragol\Emoji\Traits;

use TolgaKaragol\Emoji\Traits\Sub\PeopleBody\HandFingersOpenTrait;
use TolgaKaragol\Emoji\Traits\Sub\PeopleBody\HandFingersPartialTrait;
use TolgaKaragol\Emoji\Traits\Sub\PeopleBody\HandSingleFingerTrait;
use TolgaKaragol\Emoji\Traits\Sub\PeopleBody\HandFingersClosedTrait;
use TolgaKaragol\Emoji\Traits\Sub\PeopleBody\HandsTrait;
use TolgaKaragol\Emoji\Traits\Sub\PeopleBody\HandPropTrait;
use TolgaKaragol\Emoji\Traits\Sub\PeopleBody\BodyPartsTrait;
use TolgaKaragol\Emoji\Traits\Sub\PeopleBody\PersonTrait;
use TolgaKaragol\Emoji\Traits\Sub\PeopleBody\PersonGestureTrait;
use TolgaKaragol\Emoji\Traits\Sub\PeopleBody\PersonRoleTrait;
use TolgaKaragol\Emoji\Traits\Sub\PeopleBody\PersonFantasyTrait;
use TolgaKaragol\Emoji\Traits\Sub\PeopleBody\PersonActivityTrait;
use TolgaKaragol\Emoji\Traits\Sub\PeopleBody\PersonSportTrait;
use TolgaKaragol\Emoji\Traits\Sub\PeopleBody\PersonRestingTrait;
use TolgaKaragol\Emoji\Traits\Sub\PeopleBody\FamilyTrait;
use TolgaKaragol\Emoji\Traits\Sub\PeopleBody\PersonSymbolTrait;

/**
 * Trait PeopleBodyTrait
 * @package TolgaKaragol\Emoji\Traits\PeopleBodyTrait
 */
trait PeopleBodyTrait
{
    use HandFingersOpenTrait;
    use HandFingersPartialTrait;
    use HandSingleFingerTrait;
    use HandFingersClosedTrait;
    use HandsTrait;
    use HandPropTrait;
    use BodyPartsTrait;
    use PersonTrait;
    use PersonGestureTrait;
    use PersonRoleTrait;
    use PersonFantasyTrait;
    use PersonActivityTrait;
    use PersonSportTrait;
    use PersonRestingTrait;
    use FamilyTrait;
    use PersonSymbolTrait;
}