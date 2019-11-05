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
 *
 * @property string chequeredFlag 🏁
 * @property string triangularFlag 🚩
 * @property string crossedFlags 🎌
 * @property string blackFlag 🏴
 * @property string whiteFlag 🏳
 * @property string rainbowFlag &amp;#x1f3f3&amp;#xfe0f&amp;#x200d🌈
 * @property string pirateFlag &amp;#x1f3f4&amp;#x200d&amp;#x2620️
 * @property string flagAscensionIsland &amp;#x1f1e6🇨
 * @property string flagAndorra &amp;#x1f1e6🇩
 * @property string flagUnitedArabEmirates &amp;#x1f1e6🇪
 * @property string flagAfghanistan &amp;#x1f1e6🇫
 * @property string flagAntiguaBarbuda &amp;#x1f1e6🇬
 * @property string flagAnguilla &amp;#x1f1e6🇮
 * @property string flagAlbania &amp;#x1f1e6🇱
 * @property string flagArmenia &amp;#x1f1e6🇲
 * @property string flagAngola &amp;#x1f1e6🇴
 * @property string flagAntarctica &amp;#x1f1e6🇶
 * @property string flagArgentina &amp;#x1f1e6🇷
 * @property string flagAmericanSamoa &amp;#x1f1e6🇸
 * @property string flagAustria &amp;#x1f1e6🇹
 * @property string flagAustralia &amp;#x1f1e6🇺
 * @property string flagAruba &amp;#x1f1e6🇼
 * @property string flagLandIslands &amp;#x1f1e6🇽
 * @property string flagAzerbaijan &amp;#x1f1e6🇿
 * @property string flagBosniaHerzegovina &amp;#x1f1e7🇦
 * @property string flagBarbados &amp;#x1f1e7🇧
 * @property string flagBangladesh &amp;#x1f1e7🇩
 * @property string flagBelgium &amp;#x1f1e7🇪
 * @property string flagBurkinaFaso &amp;#x1f1e7🇫
 * @property string flagBulgaria &amp;#x1f1e7🇬
 * @property string flagBahrain &amp;#x1f1e7🇭
 * @property string flagBurundi &amp;#x1f1e7🇮
 * @property string flagBenin &amp;#x1f1e7🇯
 * @property string flagStBarthLemy &amp;#x1f1e7🇱
 * @property string flagBermuda &amp;#x1f1e7🇲
 * @property string flagBrunei &amp;#x1f1e7🇳
 * @property string flagBolivia &amp;#x1f1e7🇴
 * @property string flagCaribbeanNetherlands &amp;#x1f1e7🇶
 * @property string flagBrazil &amp;#x1f1e7🇷
 * @property string flagBahamas &amp;#x1f1e7🇸
 * @property string flagBhutan &amp;#x1f1e7🇹
 * @property string flagBouvetIsland &amp;#x1f1e7🇻
 * @property string flagBotswana &amp;#x1f1e7🇼
 * @property string flagBelarus &amp;#x1f1e7🇾
 * @property string flagBelize &amp;#x1f1e7🇿
 * @property string flagCanada &amp;#x1f1e8🇦
 * @property string flagCocosKeelingIslands &amp;#x1f1e8🇨
 * @property string flagCongoKinshasa &amp;#x1f1e8🇩
 * @property string flagCentralAfricanRepublic &amp;#x1f1e8🇫
 * @property string flagCongoBrazzaville &amp;#x1f1e8🇬
 * @property string flagSwitzerland &amp;#x1f1e8🇭
 * @property string flagCTeDIvoire &amp;#x1f1e8🇮
 * @property string flagCookIslands &amp;#x1f1e8🇰
 * @property string flagChile &amp;#x1f1e8🇱
 * @property string flagCameroon &amp;#x1f1e8🇲
 * @property string flagChina &amp;#x1f1e8🇳
 * @property string flagColombia &amp;#x1f1e8🇴
 * @property string flagClippertonIsland &amp;#x1f1e8🇵
 * @property string flagCostaRica &amp;#x1f1e8🇷
 * @property string flagCuba &amp;#x1f1e8🇺
 * @property string flagCapeVerde &amp;#x1f1e8🇻
 * @property string flagCuraAo &amp;#x1f1e8🇼
 * @property string flagChristmasIsland &amp;#x1f1e8🇽
 * @property string flagCyprus &amp;#x1f1e8🇾
 * @property string flagCzechia &amp;#x1f1e8🇿
 * @property string flagGermany &amp;#x1f1e9🇪
 * @property string flagDiegoGarcia &amp;#x1f1e9🇬
 * @property string flagDjibouti &amp;#x1f1e9🇯
 * @property string flagDenmark &amp;#x1f1e9🇰
 * @property string flagDominica &amp;#x1f1e9🇲
 * @property string flagDominicanRepublic &amp;#x1f1e9🇴
 * @property string flagAlgeria &amp;#x1f1e9🇿
 * @property string flagCeutaMelilla &amp;#x1f1ea🇦
 * @property string flagEcuador &amp;#x1f1ea🇨
 * @property string flagEstonia &amp;#x1f1ea🇪
 * @property string flagEgypt &amp;#x1f1ea🇬
 * @property string flagWesternSahara &amp;#x1f1ea🇭
 * @property string flagEritrea &amp;#x1f1ea🇷
 * @property string flagSpain &amp;#x1f1ea🇸
 * @property string flagEthiopia &amp;#x1f1ea🇹
 * @property string flagEuropeanUnion &amp;#x1f1ea🇺
 * @property string flagFinland &amp;#x1f1eb🇮
 * @property string flagFiji &amp;#x1f1eb🇯
 * @property string flagFalklandIslands &amp;#x1f1eb🇰
 * @property string flagMicronesia &amp;#x1f1eb🇲
 * @property string flagFaroeIslands &amp;#x1f1eb🇴
 * @property string flagFrance &amp;#x1f1eb🇷
 * @property string flagGabon &amp;#x1f1ec🇦
 * @property string flagUnitedKingdom &amp;#x1f1ec🇧
 * @property string flagGrenada &amp;#x1f1ec🇩
 * @property string flagGeorgia &amp;#x1f1ec🇪
 * @property string flagFrenchGuiana &amp;#x1f1ec🇫
 * @property string flagGuernsey &amp;#x1f1ec🇬
 * @property string flagGhana &amp;#x1f1ec🇭
 * @property string flagGibraltar &amp;#x1f1ec🇮
 * @property string flagGreenland &amp;#x1f1ec🇱
 * @property string flagGambia &amp;#x1f1ec🇲
 * @property string flagGuinea &amp;#x1f1ec🇳
 * @property string flagGuadeloupe &amp;#x1f1ec🇵
 * @property string flagEquatorialGuinea &amp;#x1f1ec🇶
 * @property string flagGreece &amp;#x1f1ec🇷
 * @property string flagSouthGeorgiaSouthSandwichIslands &amp;#x1f1ec🇸
 * @property string flagGuatemala &amp;#x1f1ec🇹
 * @property string flagGuam &amp;#x1f1ec🇺
 * @property string flagGuineaBissau &amp;#x1f1ec🇼
 * @property string flagGuyana &amp;#x1f1ec🇾
 * @property string flagHongKongSARChina &amp;#x1f1ed🇰
 * @property string flagHeardMcDonaldIslands &amp;#x1f1ed🇲
 * @property string flagHonduras &amp;#x1f1ed🇳
 * @property string flagCroatia &amp;#x1f1ed🇷
 * @property string flagHaiti &amp;#x1f1ed🇹
 * @property string flagHungary &amp;#x1f1ed🇺
 * @property string flagCanaryIslands &amp;#x1f1ee🇨
 * @property string flagIndonesia &amp;#x1f1ee🇩
 * @property string flagIreland &amp;#x1f1ee🇪
 * @property string flagIsrael &amp;#x1f1ee🇱
 * @property string flagIsleOfMan &amp;#x1f1ee🇲
 * @property string flagIndia &amp;#x1f1ee🇳
 * @property string flagBritishIndianOceanTerritory &amp;#x1f1ee🇴
 * @property string flagIraq &amp;#x1f1ee🇶
 * @property string flagIran &amp;#x1f1ee🇷
 * @property string flagIceland &amp;#x1f1ee🇸
 * @property string flagItaly &amp;#x1f1ee🇹
 * @property string flagJersey &amp;#x1f1ef🇪
 * @property string flagJamaica &amp;#x1f1ef🇲
 * @property string flagJordan &amp;#x1f1ef🇴
 * @property string flagJapan &amp;#x1f1ef🇵
 * @property string flagKenya &amp;#x1f1f0🇪
 * @property string flagKyrgyzstan &amp;#x1f1f0🇬
 * @property string flagCambodia &amp;#x1f1f0🇭
 * @property string flagKiribati &amp;#x1f1f0🇮
 * @property string flagComoros &amp;#x1f1f0🇲
 * @property string flagStKittsNevis &amp;#x1f1f0🇳
 * @property string flagNorthKorea &amp;#x1f1f0🇵
 * @property string flagSouthKorea &amp;#x1f1f0🇷
 * @property string flagKuwait &amp;#x1f1f0🇼
 * @property string flagCaymanIslands &amp;#x1f1f0🇾
 * @property string flagKazakhstan &amp;#x1f1f0🇿
 * @property string flagLaos &amp;#x1f1f1🇦
 * @property string flagLebanon &amp;#x1f1f1🇧
 * @property string flagStLucia &amp;#x1f1f1🇨
 * @property string flagLiechtenstein &amp;#x1f1f1🇮
 * @property string flagSriLanka &amp;#x1f1f1🇰
 * @property string flagLiberia &amp;#x1f1f1🇷
 * @property string flagLesotho &amp;#x1f1f1🇸
 * @property string flagLithuania &amp;#x1f1f1🇹
 * @property string flagLuxembourg &amp;#x1f1f1🇺
 * @property string flagLatvia &amp;#x1f1f1🇻
 * @property string flagLibya &amp;#x1f1f1🇾
 * @property string flagMorocco &amp;#x1f1f2🇦
 * @property string flagMonaco &amp;#x1f1f2🇨
 * @property string flagMoldova &amp;#x1f1f2🇩
 * @property string flagMontenegro &amp;#x1f1f2🇪
 * @property string flagStMartin &amp;#x1f1f2🇫
 * @property string flagMadagascar &amp;#x1f1f2🇬
 * @property string flagMarshallIslands &amp;#x1f1f2🇭
 * @property string flagNorthMacedonia &amp;#x1f1f2🇰
 * @property string flagMali &amp;#x1f1f2🇱
 * @property string flagMyanmarBurma &amp;#x1f1f2🇲
 * @property string flagMongolia &amp;#x1f1f2🇳
 * @property string flagMacaoSARChina &amp;#x1f1f2🇴
 * @property string flagNorthernMarianaIslands &amp;#x1f1f2🇵
 * @property string flagMartinique &amp;#x1f1f2🇶
 * @property string flagMauritania &amp;#x1f1f2🇷
 * @property string flagMontserrat &amp;#x1f1f2🇸
 * @property string flagMalta &amp;#x1f1f2🇹
 * @property string flagMauritius &amp;#x1f1f2🇺
 * @property string flagMaldives &amp;#x1f1f2🇻
 * @property string flagMalawi &amp;#x1f1f2🇼
 * @property string flagMexico &amp;#x1f1f2🇽
 * @property string flagMalaysia &amp;#x1f1f2🇾
 * @property string flagMozambique &amp;#x1f1f2🇿
 * @property string flagNamibia &amp;#x1f1f3🇦
 * @property string flagNewCaledonia &amp;#x1f1f3🇨
 * @property string flagNiger &amp;#x1f1f3🇪
 * @property string flagNorfolkIsland &amp;#x1f1f3🇫
 * @property string flagNigeria &amp;#x1f1f3🇬
 * @property string flagNicaragua &amp;#x1f1f3🇮
 * @property string flagNetherlands &amp;#x1f1f3🇱
 * @property string flagNorway &amp;#x1f1f3🇴
 * @property string flagNepal &amp;#x1f1f3🇵
 * @property string flagNauru &amp;#x1f1f3🇷
 * @property string flagNiue &amp;#x1f1f3🇺
 * @property string flagNewZealand &amp;#x1f1f3🇿
 * @property string flagOman &amp;#x1f1f4🇲
 * @property string flagPanama &amp;#x1f1f5🇦
 * @property string flagPeru &amp;#x1f1f5🇪
 * @property string flagFrenchPolynesia &amp;#x1f1f5🇫
 * @property string flagPapuaNewGuinea &amp;#x1f1f5🇬
 * @property string flagPhilippines &amp;#x1f1f5🇭
 * @property string flagPakistan &amp;#x1f1f5🇰
 * @property string flagPoland &amp;#x1f1f5🇱
 * @property string flagStPierreMiquelon &amp;#x1f1f5🇲
 * @property string flagPitcairnIslands &amp;#x1f1f5🇳
 * @property string flagPuertoRico &amp;#x1f1f5🇷
 * @property string flagPalestinianTerritories &amp;#x1f1f5🇸
 * @property string flagPortugal &amp;#x1f1f5🇹
 * @property string flagPalau &amp;#x1f1f5🇼
 * @property string flagParaguay &amp;#x1f1f5🇾
 * @property string flagQatar &amp;#x1f1f6🇦
 * @property string flagRUnion &amp;#x1f1f7🇪
 * @property string flagRomania &amp;#x1f1f7🇴
 * @property string flagSerbia &amp;#x1f1f7🇸
 * @property string flagRussia &amp;#x1f1f7🇺
 * @property string flagRwanda &amp;#x1f1f7🇼
 * @property string flagSaudiArabia &amp;#x1f1f8🇦
 * @property string flagSolomonIslands &amp;#x1f1f8🇧
 * @property string flagSeychelles &amp;#x1f1f8🇨
 * @property string flagSudan &amp;#x1f1f8🇩
 * @property string flagSweden &amp;#x1f1f8🇪
 * @property string flagSingapore &amp;#x1f1f8🇬
 * @property string flagStHelena &amp;#x1f1f8🇭
 * @property string flagSlovenia &amp;#x1f1f8🇮
 * @property string flagSvalbardJanMayen &amp;#x1f1f8🇯
 * @property string flagSlovakia &amp;#x1f1f8🇰
 * @property string flagSierraLeone &amp;#x1f1f8🇱
 * @property string flagSanMarino &amp;#x1f1f8🇲
 * @property string flagSenegal &amp;#x1f1f8🇳
 * @property string flagSomalia &amp;#x1f1f8🇴
 * @property string flagSuriname &amp;#x1f1f8🇷
 * @property string flagSouthSudan &amp;#x1f1f8🇸
 * @property string flagSOTomPrNcipe &amp;#x1f1f8🇹
 * @property string flagElSalvador &amp;#x1f1f8🇻
 * @property string flagSintMaarten &amp;#x1f1f8🇽
 * @property string flagSyria &amp;#x1f1f8🇾
 * @property string flagEswatini &amp;#x1f1f8🇿
 * @property string flagTristanDaCunha &amp;#x1f1f9🇦
 * @property string flagTurksCaicosIslands &amp;#x1f1f9🇨
 * @property string flagChad &amp;#x1f1f9🇩
 * @property string flagFrenchSouthernTerritories &amp;#x1f1f9🇫
 * @property string flagTogo &amp;#x1f1f9🇬
 * @property string flagThailand &amp;#x1f1f9🇭
 * @property string flagTajikistan &amp;#x1f1f9🇯
 * @property string flagTokelau &amp;#x1f1f9🇰
 * @property string flagTimorLeste &amp;#x1f1f9🇱
 * @property string flagTurkmenistan &amp;#x1f1f9🇲
 * @property string flagTunisia &amp;#x1f1f9🇳
 * @property string flagTonga &amp;#x1f1f9🇴
 * @property string flagTurkey &amp;#x1f1f9🇷
 * @property string flagTrinidadTobago &amp;#x1f1f9🇹
 * @property string flagTuvalu &amp;#x1f1f9🇻
 * @property string flagTaiwan &amp;#x1f1f9🇼
 * @property string flagTanzania &amp;#x1f1f9🇿
 * @property string flagUkraine &amp;#x1f1fa🇦
 * @property string flagUganda &amp;#x1f1fa🇬
 * @property string flagUSOutlyingIslands &amp;#x1f1fa🇲
 * @property string flagUnitedNations &amp;#x1f1fa🇳
 * @property string flagUnitedStates &amp;#x1f1fa🇸
 * @property string flagUruguay &amp;#x1f1fa🇾
 * @property string flagUzbekistan &amp;#x1f1fa🇿
 * @property string flagVaticanCity &amp;#x1f1fb🇦
 * @property string flagStVincentGrenadines &amp;#x1f1fb🇨
 * @property string flagVenezuela &amp;#x1f1fb🇪
 * @property string flagBritishVirginIslands &amp;#x1f1fb🇬
 * @property string flagUSVirginIslands &amp;#x1f1fb🇮
 * @property string flagVietnam &amp;#x1f1fb🇳
 * @property string flagVanuatu &amp;#x1f1fb🇺
 * @property string flagWallisFutuna &amp;#x1f1fc🇫
 * @property string flagSamoa &amp;#x1f1fc🇸
 * @property string flagKosovo &amp;#x1f1fd🇰
 * @property string flagYemen &amp;#x1f1fe🇪
 * @property string flagMayotte &amp;#x1f1fe🇹
 * @property string flagSouthAfrica &amp;#x1f1ff🇦
 * @property string flagZambia &amp;#x1f1ff🇲
 * @property string flagZimbabwe &amp;#x1f1ff🇼
 * @property string flagEngland &amp;#x1f3f4&amp;#xe0067&amp;#xe0062&amp;#xe0065&amp;#xe006e&amp;#xe0067󠁿
 * @property string flagScotland &amp;#x1f3f4&amp;#xe0067&amp;#xe0062&amp;#xe0073&amp;#xe0063&amp;#xe0074󠁿
 * @property string flagWales &amp;#x1f3f4&amp;#xe0067&amp;#xe0062&amp;#xe0077&amp;#xe006c&amp;#xe0073󠁿
 */
class Flags
{
    use FlagsTrait;

}