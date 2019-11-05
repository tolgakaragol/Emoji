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
 *
 * @property string globeShowingEuropeAfrica 🌍
 * @property string globeShowingAmericas 🌎
 * @property string globeShowingAsiaAustralia 🌏
 * @property string globeWithMeridians 🌐
 * @property string worldMap 🗺
 * @property string mapOfJapan 🗾
 * @property string compass 🧭
 * @property string snowCappedMountain 🏔
 * @property string mountain ⛰
 * @property string volcano 🌋
 * @property string mountFuji 🗻
 * @property string camping 🏕
 * @property string beachWithUmbrella 🏖
 * @property string desert 🏜
 * @property string desertIsland 🏝
 * @property string nationalPark 🏞
 * @property string stadium 🏟
 * @property string classicalBuilding 🏛
 * @property string buildingConstruction 🏗
 * @property string brick 🧱
 * @property string houses 🏘
 * @property string derelictHouse 🏚
 * @property string house 🏠
 * @property string houseWithGarden 🏡
 * @property string officeBuilding 🏢
 * @property string japanesePostOffice 🏣
 * @property string postOffice 🏤
 * @property string hospital 🏥
 * @property string bank 🏦
 * @property string hotel 🏨
 * @property string loveHotel 🏩
 * @property string convenienceStore 🏪
 * @property string school 🏫
 * @property string departmentStore 🏬
 * @property string factory 🏭
 * @property string japaneseCastle 🏯
 * @property string castle 🏰
 * @property string wedding 💒
 * @property string tokyoTower 🗼
 * @property string statueOfLiberty 🗽
 * @property string church ⛪
 * @property string mosque 🕌
 * @property string hinduTemple 🛕
 * @property string synagogue 🕍
 * @property string shintoShrine ⛩
 * @property string kaaba 🕋
 * @property string fountain ⛲
 * @property string tent ⛺
 * @property string foggy 🌁
 * @property string nightWithStars 🌃
 * @property string cityscape 🏙
 * @property string sunriseOverMountains 🌄
 * @property string sunrise 🌅
 * @property string cityscapeAtDusk 🌆
 * @property string sunset 🌇
 * @property string bridgeAtNight 🌉
 * @property string hotSprings ♨
 * @property string carouselHorse 🎠
 * @property string ferrisWheel 🎡
 * @property string rollerCoaster 🎢
 * @property string barberPole 💈
 * @property string circusTent 🎪
 * @property string locomotive 🚂
 * @property string railwayCar 🚃
 * @property string highSpeedTrain 🚄
 * @property string bulletTrain 🚅
 * @property string train 🚆
 * @property string metro 🚇
 * @property string lightRail 🚈
 * @property string station 🚉
 * @property string tram 🚊
 * @property string monorail 🚝
 * @property string mountainRailway 🚞
 * @property string tramCar 🚋
 * @property string bus 🚌
 * @property string oncomingBus 🚍
 * @property string trolleybus 🚎
 * @property string minibus 🚐
 * @property string ambulance 🚑
 * @property string fireEngine 🚒
 * @property string policeCar 🚓
 * @property string oncomingPoliceCar 🚔
 * @property string taxi 🚕
 * @property string oncomingTaxi 🚖
 * @property string automobile 🚗
 * @property string oncomingAutomobile 🚘
 * @property string sportUtilityVehicle 🚙
 * @property string deliveryTruck 🚚
 * @property string articulatedLorry 🚛
 * @property string tractor 🚜
 * @property string racingCar 🏎
 * @property string motorcycle 🏍
 * @property string motorScooter 🛵
 * @property string manualWheelchair 🦽
 * @property string motorizedWheelchair 🦼
 * @property string autoRickshaw 🛺
 * @property string bicycle 🚲
 * @property string kickScooter 🛴
 * @property string skateboard 🛹
 * @property string busStop 🚏
 * @property string motorway 🛣
 * @property string railwayTrack 🛤
 * @property string oilDrum 🛢
 * @property string fuelPump ⛽
 * @property string policeCarLight 🚨
 * @property string horizontalTrafficLight 🚥
 * @property string verticalTrafficLight 🚦
 * @property string stopSign 🛑
 * @property string construction 🚧
 * @property string anchor ⚓
 * @property string sailboat ⛵
 * @property string canoe 🛶
 * @property string speedboat 🚤
 * @property string passengerShip 🛳
 * @property string ferry ⛴
 * @property string motorBoat 🛥
 * @property string ship 🚢
 * @property string airplane ✈
 * @property string smallAirplane 🛩
 * @property string airplaneDeparture 🛫
 * @property string airplaneArrival 🛬
 * @property string parachute 🪂
 * @property string seat 💺
 * @property string helicopter 🚁
 * @property string suspensionRailway 🚟
 * @property string mountainCableway 🚠
 * @property string aerialTramway 🚡
 * @property string satellite 🛰
 * @property string rocket 🚀
 * @property string flyingSaucer 🛸
 * @property string bellhopBell 🛎
 * @property string luggage 🧳
 * @property string hourglassDone ⌛
 * @property string hourglassNotDone ⏳
 * @property string watch ⌚
 * @property string alarmClock ⏰
 * @property string stopwatch ⏱
 * @property string timerClock ⏲
 * @property string mantelpieceClock 🕰
 * @property string twelveOClock 🕛
 * @property string twelveThirty 🕧
 * @property string oneOClock 🕐
 * @property string oneThirty 🕜
 * @property string twoOClock 🕑
 * @property string twoThirty 🕝
 * @property string threeOClock 🕒
 * @property string threeThirty 🕞
 * @property string fourOClock 🕓
 * @property string fourThirty 🕟
 * @property string fiveOClock 🕔
 * @property string fiveThirty 🕠
 * @property string sixOClock 🕕
 * @property string sixThirty 🕡
 * @property string sevenOClock 🕖
 * @property string sevenThirty 🕢
 * @property string eightOClock 🕗
 * @property string eightThirty 🕣
 * @property string nineOClock 🕘
 * @property string nineThirty 🕤
 * @property string tenOClock 🕙
 * @property string tenThirty 🕥
 * @property string elevenOClock 🕚
 * @property string elevenThirty 🕦
 * @property string newMoon 🌑
 * @property string waxingCrescentMoon 🌒
 * @property string firstQuarterMoon 🌓
 * @property string waxingGibbousMoon 🌔
 * @property string fullMoon 🌕
 * @property string waningGibbousMoon 🌖
 * @property string lastQuarterMoon 🌗
 * @property string waningCrescentMoon 🌘
 * @property string crescentMoon 🌙
 * @property string newMoonFace 🌚
 * @property string firstQuarterMoonFace 🌛
 * @property string lastQuarterMoonFace 🌜
 * @property string thermometer 🌡
 * @property string sun ☀
 * @property string fullMoonFace 🌝
 * @property string sunWithFace 🌞
 * @property string ringedPlanet 🪐
 * @property string star ⭐
 * @property string glowingStar 🌟
 * @property string shootingStar 🌠
 * @property string milkyWay 🌌
 * @property string cloud ☁
 * @property string sunBehindCloud ⛅
 * @property string cloudWithLightningAndRain ⛈
 * @property string sunBehindSmallCloud 🌤
 * @property string sunBehindLargeCloud 🌥
 * @property string sunBehindRainCloud 🌦
 * @property string cloudWithRain 🌧
 * @property string cloudWithSnow 🌨
 * @property string cloudWithLightning 🌩
 * @property string tornado 🌪
 * @property string fog 🌫
 * @property string windFace 🌬
 * @property string cyclone 🌀
 * @property string rainbow 🌈
 * @property string closedUmbrella 🌂
 * @property string umbrella ☂
 * @property string umbrellaWithRainDrops ☔
 * @property string umbrellaOnGround ⛱
 * @property string highVoltage ⚡
 * @property string snowflake ❄
 * @property string snowman ☃
 * @property string snowmanWithoutSnow ⛄
 * @property string comet ☄
 * @property string fire 🔥
 * @property string droplet 💧
 * @property string waterWave 🌊
 */
class TravelPlaces
{
    use TravelPlacesTrait;

}