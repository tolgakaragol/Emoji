<?php

namespace TolgaKaragol\Emoji\Traits\Sub\PeopleBody;

/**
 * Trait PersonRoleTrait
 * @package TolgaKaragol\Emoji\Traits\Sub\PeopleBody\PersonRoleTrait
 *
 * @property string healthWorker &amp;#x1f9d1&amp;#x200d&amp;#x2695️
 * @property string manHealthWorker &amp;#x1f468&amp;#x200d&amp;#x2695️
 * @property string womanHealthWorker &amp;#x1f469&amp;#x200d&amp;#x2695️
 * @property string student &amp;#x1f9d1&amp;#x200d🎓
 * @property string manStudent &amp;#x1f468&amp;#x200d🎓
 * @property string womanStudent &amp;#x1f469&amp;#x200d🎓
 * @property string teacher &amp;#x1f9d1&amp;#x200d🏫
 * @property string manTeacher &amp;#x1f468&amp;#x200d🏫
 * @property string womanTeacher &amp;#x1f469&amp;#x200d🏫
 * @property string judge &amp;#x1f9d1&amp;#x200d&amp;#x2696️
 * @property string manJudge &amp;#x1f468&amp;#x200d&amp;#x2696️
 * @property string womanJudge &amp;#x1f469&amp;#x200d&amp;#x2696️
 * @property string farmer &amp;#x1f9d1&amp;#x200d🌾
 * @property string manFarmer &amp;#x1f468&amp;#x200d🌾
 * @property string womanFarmer &amp;#x1f469&amp;#x200d🌾
 * @property string cook &amp;#x1f9d1&amp;#x200d🍳
 * @property string manCook &amp;#x1f468&amp;#x200d🍳
 * @property string womanCook &amp;#x1f469&amp;#x200d🍳
 * @property string mechanic &amp;#x1f9d1&amp;#x200d🔧
 * @property string manMechanic &amp;#x1f468&amp;#x200d🔧
 * @property string womanMechanic &amp;#x1f469&amp;#x200d🔧
 * @property string factoryWorker &amp;#x1f9d1&amp;#x200d🏭
 * @property string manFactoryWorker &amp;#x1f468&amp;#x200d🏭
 * @property string womanFactoryWorker &amp;#x1f469&amp;#x200d🏭
 * @property string officeWorker &amp;#x1f9d1&amp;#x200d💼
 * @property string manOfficeWorker &amp;#x1f468&amp;#x200d💼
 * @property string womanOfficeWorker &amp;#x1f469&amp;#x200d💼
 * @property string scientist &amp;#x1f9d1&amp;#x200d🔬
 * @property string manScientist &amp;#x1f468&amp;#x200d🔬
 * @property string womanScientist &amp;#x1f469&amp;#x200d🔬
 * @property string technologist &amp;#x1f9d1&amp;#x200d💻
 * @property string manTechnologist &amp;#x1f468&amp;#x200d💻
 * @property string womanTechnologist &amp;#x1f469&amp;#x200d💻
 * @property string singer &amp;#x1f9d1&amp;#x200d🎤
 * @property string manSinger &amp;#x1f468&amp;#x200d🎤
 * @property string womanSinger &amp;#x1f469&amp;#x200d🎤
 * @property string artist &amp;#x1f9d1&amp;#x200d🎨
 * @property string manArtist &amp;#x1f468&amp;#x200d🎨
 * @property string womanArtist &amp;#x1f469&amp;#x200d🎨
 * @property string pilot &amp;#x1f9d1&amp;#x200d&amp;#x2708️
 * @property string manPilot &amp;#x1f468&amp;#x200d&amp;#x2708️
 * @property string womanPilot &amp;#x1f469&amp;#x200d&amp;#x2708️
 * @property string astronaut &amp;#x1f9d1&amp;#x200d🚀
 * @property string manAstronaut &amp;#x1f468&amp;#x200d🚀
 * @property string womanAstronaut &amp;#x1f469&amp;#x200d🚀
 * @property string firefighter &amp;#x1f9d1&amp;#x200d🚒
 * @property string manFirefighter &amp;#x1f468&amp;#x200d🚒
 * @property string womanFirefighter &amp;#x1f469&amp;#x200d🚒
 * @property string policeOfficer 👮
 * @property string manPoliceOfficer &amp;#x1f46e&amp;#x200d&amp;#x2642️
 * @property string womanPoliceOfficer &amp;#x1f46e&amp;#x200d&amp;#x2640️
 * @property string detective 🕵
 * @property string manDetective &amp;#x1f575&amp;#xfe0f&amp;#x200d&amp;#x2642️
 * @property string womanDetective &amp;#x1f575&amp;#xfe0f&amp;#x200d&amp;#x2640️
 * @property string guard 💂
 * @property string manGuard &amp;#x1f482&amp;#x200d&amp;#x2642️
 * @property string womanGuard &amp;#x1f482&amp;#x200d&amp;#x2640️
 * @property string constructionWorker 👷
 * @property string manConstructionWorker &amp;#x1f477&amp;#x200d&amp;#x2642️
 * @property string womanConstructionWorker &amp;#x1f477&amp;#x200d&amp;#x2640️
 * @property string prince 🤴
 * @property string princess 👸
 * @property string personWearingTurban 👳
 * @property string manWearingTurban &amp;#x1f473&amp;#x200d&amp;#x2642️
 * @property string womanWearingTurban &amp;#x1f473&amp;#x200d&amp;#x2640️
 * @property string manWithSkullcap 👲
 * @property string womanWithHeadscarf 🧕
 * @property string manInTuxedo 🤵
 * @property string brideWithVeil 👰
 * @property string pregnantWoman 🤰
 * @property string breastFeeding 🤱
 */
trait PersonRoleTrait
{
    protected static $healthWorker = '&#x1f9d1&#x200d&#x2695&#xfe0f;';
    protected static $manHealthWorker = '&#x1f468&#x200d&#x2695&#xfe0f;';
    protected static $womanHealthWorker = '&#x1f469&#x200d&#x2695&#xfe0f;';
    protected static $student = '&#x1f9d1&#x200d&#x1f393;';
    protected static $manStudent = '&#x1f468&#x200d&#x1f393;';
    protected static $womanStudent = '&#x1f469&#x200d&#x1f393;';
    protected static $teacher = '&#x1f9d1&#x200d&#x1f3eb;';
    protected static $manTeacher = '&#x1f468&#x200d&#x1f3eb;';
    protected static $womanTeacher = '&#x1f469&#x200d&#x1f3eb;';
    protected static $judge = '&#x1f9d1&#x200d&#x2696&#xfe0f;';
    protected static $manJudge = '&#x1f468&#x200d&#x2696&#xfe0f;';
    protected static $womanJudge = '&#x1f469&#x200d&#x2696&#xfe0f;';
    protected static $farmer = '&#x1f9d1&#x200d&#x1f33e;';
    protected static $manFarmer = '&#x1f468&#x200d&#x1f33e;';
    protected static $womanFarmer = '&#x1f469&#x200d&#x1f33e;';
    protected static $cook = '&#x1f9d1&#x200d&#x1f373;';
    protected static $manCook = '&#x1f468&#x200d&#x1f373;';
    protected static $womanCook = '&#x1f469&#x200d&#x1f373;';
    protected static $mechanic = '&#x1f9d1&#x200d&#x1f527;';
    protected static $manMechanic = '&#x1f468&#x200d&#x1f527;';
    protected static $womanMechanic = '&#x1f469&#x200d&#x1f527;';
    protected static $factoryWorker = '&#x1f9d1&#x200d&#x1f3ed;';
    protected static $manFactoryWorker = '&#x1f468&#x200d&#x1f3ed;';
    protected static $womanFactoryWorker = '&#x1f469&#x200d&#x1f3ed;';
    protected static $officeWorker = '&#x1f9d1&#x200d&#x1f4bc;';
    protected static $manOfficeWorker = '&#x1f468&#x200d&#x1f4bc;';
    protected static $womanOfficeWorker = '&#x1f469&#x200d&#x1f4bc;';
    protected static $scientist = '&#x1f9d1&#x200d&#x1f52c;';
    protected static $manScientist = '&#x1f468&#x200d&#x1f52c;';
    protected static $womanScientist = '&#x1f469&#x200d&#x1f52c;';
    protected static $technologist = '&#x1f9d1&#x200d&#x1f4bb;';
    protected static $manTechnologist = '&#x1f468&#x200d&#x1f4bb;';
    protected static $womanTechnologist = '&#x1f469&#x200d&#x1f4bb;';
    protected static $singer = '&#x1f9d1&#x200d&#x1f3a4;';
    protected static $manSinger = '&#x1f468&#x200d&#x1f3a4;';
    protected static $womanSinger = '&#x1f469&#x200d&#x1f3a4;';
    protected static $artist = '&#x1f9d1&#x200d&#x1f3a8;';
    protected static $manArtist = '&#x1f468&#x200d&#x1f3a8;';
    protected static $womanArtist = '&#x1f469&#x200d&#x1f3a8;';
    protected static $pilot = '&#x1f9d1&#x200d&#x2708&#xfe0f;';
    protected static $manPilot = '&#x1f468&#x200d&#x2708&#xfe0f;';
    protected static $womanPilot = '&#x1f469&#x200d&#x2708&#xfe0f;';
    protected static $astronaut = '&#x1f9d1&#x200d&#x1f680;';
    protected static $manAstronaut = '&#x1f468&#x200d&#x1f680;';
    protected static $womanAstronaut = '&#x1f469&#x200d&#x1f680;';
    protected static $firefighter = '&#x1f9d1&#x200d&#x1f692;';
    protected static $manFirefighter = '&#x1f468&#x200d&#x1f692;';
    protected static $womanFirefighter = '&#x1f469&#x200d&#x1f692;';
    protected static $policeOfficer = '&#x1f46e;';
    protected static $manPoliceOfficer = '&#x1f46e&#x200d&#x2642&#xfe0f;';
    protected static $womanPoliceOfficer = '&#x1f46e&#x200d&#x2640&#xfe0f;';
    protected static $detective = '&#x1f575;';
    protected static $manDetective = '&#x1f575&#xfe0f&#x200d&#x2642&#xfe0f;';
    protected static $womanDetective = '&#x1f575&#xfe0f&#x200d&#x2640&#xfe0f;';
    protected static $guard = '&#x1f482;';
    protected static $manGuard = '&#x1f482&#x200d&#x2642&#xfe0f;';
    protected static $womanGuard = '&#x1f482&#x200d&#x2640&#xfe0f;';
    protected static $constructionWorker = '&#x1f477;';
    protected static $manConstructionWorker = '&#x1f477&#x200d&#x2642&#xfe0f;';
    protected static $womanConstructionWorker = '&#x1f477&#x200d&#x2640&#xfe0f;';
    protected static $prince = '&#x1f934;';
    protected static $princess = '&#x1f478;';
    protected static $personWearingTurban = '&#x1f473;';
    protected static $manWearingTurban = '&#x1f473&#x200d&#x2642&#xfe0f;';
    protected static $womanWearingTurban = '&#x1f473&#x200d&#x2640&#xfe0f;';
    protected static $manWithSkullcap = '&#x1f472;';
    protected static $womanWithHeadscarf = '&#x1f9d5;';
    protected static $manInTuxedo = '&#x1f935;';
    protected static $brideWithVeil = '&#x1f470;';
    protected static $pregnantWoman = '&#x1f930;';
    protected static $breastFeeding = '&#x1f931;';
}