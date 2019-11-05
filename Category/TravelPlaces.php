<?php

namespace TolgaKaragol\Emoji\Category;

use TolgaKaragol\Emoji\Category\Sub\TravelPlaces\PlaceMap;
use TolgaKaragol\Emoji\Category\Sub\TravelPlaces\PlaceGeographic;
use TolgaKaragol\Emoji\Category\Sub\TravelPlaces\PlaceBuilding;
use TolgaKaragol\Emoji\Category\Sub\TravelPlaces\PlaceReligious;
use TolgaKaragol\Emoji\Category\Sub\TravelPlaces\PlaceOther;
use TolgaKaragol\Emoji\Category\Sub\TravelPlaces\TransportGround;
use TolgaKaragol\Emoji\Category\Sub\TravelPlaces\TransportWater;
use TolgaKaragol\Emoji\Category\Sub\TravelPlaces\TransportAir;
use TolgaKaragol\Emoji\Category\Sub\TravelPlaces\Hotel;
use TolgaKaragol\Emoji\Category\Sub\TravelPlaces\Time;
use TolgaKaragol\Emoji\Category\Sub\TravelPlaces\SkyWeather;
use TolgaKaragol\Emoji\Traits\TravelPlacesTrait;

/**
 * Class TravelPlaces
 * @package TolgaKaragol\Emoji\Category\TravelPlaces
 *
 * @method static PlaceMap placeMap()
 * @method static PlaceGeographic placeGeographic()
 * @method static PlaceBuilding placeBuilding()
 * @method static PlaceReligious placeReligious()
 * @method static PlaceOther placeOther()
 * @method static TransportGround transportGround()
 * @method static TransportWater transportWater()
 * @method static TransportAir transportAir()
 * @method static Hotel hotel()
 * @method static Time time()
 * @method static SkyWeather skyWeather()
 */
class TravelPlaces
{
    use TravelPlacesTrait;

}