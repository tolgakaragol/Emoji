<?php

namespace TolgaKaragol\Emoji\Category;

use TolgaKaragol\Emoji\Category\Sub\PeopleBody\HandFingersOpen;
use TolgaKaragol\Emoji\Category\Sub\PeopleBody\HandFingersPartial;
use TolgaKaragol\Emoji\Category\Sub\PeopleBody\HandSingleFinger;
use TolgaKaragol\Emoji\Category\Sub\PeopleBody\HandFingersClosed;
use TolgaKaragol\Emoji\Category\Sub\PeopleBody\Hands;
use TolgaKaragol\Emoji\Category\Sub\PeopleBody\HandProp;
use TolgaKaragol\Emoji\Category\Sub\PeopleBody\BodyParts;
use TolgaKaragol\Emoji\Category\Sub\PeopleBody\Person;
use TolgaKaragol\Emoji\Category\Sub\PeopleBody\PersonGesture;
use TolgaKaragol\Emoji\Category\Sub\PeopleBody\PersonRole;
use TolgaKaragol\Emoji\Category\Sub\PeopleBody\PersonFantasy;
use TolgaKaragol\Emoji\Category\Sub\PeopleBody\PersonActivity;
use TolgaKaragol\Emoji\Category\Sub\PeopleBody\PersonSport;
use TolgaKaragol\Emoji\Category\Sub\PeopleBody\PersonResting;
use TolgaKaragol\Emoji\Category\Sub\PeopleBody\Family;
use TolgaKaragol\Emoji\Category\Sub\PeopleBody\PersonSymbol;
use TolgaKaragol\Emoji\Traits\PeopleBodyTrait;

/**
 * Class PeopleBody
 * @package TolgaKaragol\Emoji\Category\PeopleBody
 *
 * @method static HandFingersOpen handFingersOpen()
 * @method static HandFingersPartial handFingersPartial()
 * @method static HandSingleFinger handSingleFinger()
 * @method static HandFingersClosed handFingersClosed()
 * @method static Hands hands()
 * @method static HandProp handProp()
 * @method static BodyParts bodyParts()
 * @method static Person person()
 * @method static PersonGesture personGesture()
 * @method static PersonRole personRole()
 * @method static PersonFantasy personFantasy()
 * @method static PersonActivity personActivity()
 * @method static PersonSport personSport()
 * @method static PersonResting personResting()
 * @method static Family family()
 * @method static PersonSymbol personSymbol()
 */
class PeopleBody
{
    use PeopleBodyTrait;

}