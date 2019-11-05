<?php

namespace TolgaKaragol\Emoji\Category;

use TolgaKaragol\Emoji\Category\Sub\Activities\Event;
use TolgaKaragol\Emoji\Category\Sub\Activities\AwardMedal;
use TolgaKaragol\Emoji\Category\Sub\Activities\Sport;
use TolgaKaragol\Emoji\Category\Sub\Activities\Game;
use TolgaKaragol\Emoji\Category\Sub\Activities\ArtsCrafts;
use TolgaKaragol\Emoji\Traits\ActivitiesTrait;

/**
 * Class Activities
 * @package TolgaKaragol\Emoji\Category\Activities
 *
 * @method static Event event()
 * @method static AwardMedal awardMedal()
 * @method static Sport sport()
 * @method static Game game()
 * @method static ArtsCrafts artsCrafts()
 */
class Activities
{
    use ActivitiesTrait;

}