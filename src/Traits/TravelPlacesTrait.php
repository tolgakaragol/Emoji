<?php

namespace TolgaKaragol\Emoji\Traits;

use TolgaKaragol\Emoji\Traits\Sub\TravelPlaces\PlaceMapTrait;
use TolgaKaragol\Emoji\Traits\Sub\TravelPlaces\PlaceGeographicTrait;
use TolgaKaragol\Emoji\Traits\Sub\TravelPlaces\PlaceBuildingTrait;
use TolgaKaragol\Emoji\Traits\Sub\TravelPlaces\PlaceReligiousTrait;
use TolgaKaragol\Emoji\Traits\Sub\TravelPlaces\PlaceOtherTrait;
use TolgaKaragol\Emoji\Traits\Sub\TravelPlaces\TransportGroundTrait;
use TolgaKaragol\Emoji\Traits\Sub\TravelPlaces\TransportWaterTrait;
use TolgaKaragol\Emoji\Traits\Sub\TravelPlaces\TransportAirTrait;
use TolgaKaragol\Emoji\Traits\Sub\TravelPlaces\HotelTrait;
use TolgaKaragol\Emoji\Traits\Sub\TravelPlaces\TimeTrait;
use TolgaKaragol\Emoji\Traits\Sub\TravelPlaces\SkyWeatherTrait;

/**
 * Trait TravelPlacesTrait
 * @package TolgaKaragol\Emoji\Traits\TravelPlacesTrait
 */
trait TravelPlacesTrait
{
    use PlaceMapTrait;
    use PlaceGeographicTrait;
    use PlaceBuildingTrait;
    use PlaceReligiousTrait;
    use PlaceOtherTrait;
    use TransportGroundTrait;
    use TransportWaterTrait;
    use TransportAirTrait;
    use HotelTrait;
    use TimeTrait;
    use SkyWeatherTrait;
}