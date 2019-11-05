<?php

namespace TolgaKaragol\Emoji\Category;

use TolgaKaragol\Emoji\Category\Sub\Objects\Clothing;
use TolgaKaragol\Emoji\Category\Sub\Objects\Sound;
use TolgaKaragol\Emoji\Category\Sub\Objects\Music;
use TolgaKaragol\Emoji\Category\Sub\Objects\MusicalInstrument;
use TolgaKaragol\Emoji\Category\Sub\Objects\Phone;
use TolgaKaragol\Emoji\Category\Sub\Objects\Computer;
use TolgaKaragol\Emoji\Category\Sub\Objects\LightVideo;
use TolgaKaragol\Emoji\Category\Sub\Objects\BookPaper;
use TolgaKaragol\Emoji\Category\Sub\Objects\Money;
use TolgaKaragol\Emoji\Category\Sub\Objects\Mail;
use TolgaKaragol\Emoji\Category\Sub\Objects\Writing;
use TolgaKaragol\Emoji\Category\Sub\Objects\Office;
use TolgaKaragol\Emoji\Category\Sub\Objects\Lock;
use TolgaKaragol\Emoji\Category\Sub\Objects\Tool;
use TolgaKaragol\Emoji\Category\Sub\Objects\Science;
use TolgaKaragol\Emoji\Category\Sub\Objects\Medical;
use TolgaKaragol\Emoji\Category\Sub\Objects\Household;
use TolgaKaragol\Emoji\Category\Sub\Objects\OtherObject;
use TolgaKaragol\Emoji\Traits\ObjectsTrait;

/**
 * Class Objects
 * @package TolgaKaragol\Emoji\Category\Objects
 *
 * @method static Clothing clothing()
 * @method static Sound sound()
 * @method static Music music()
 * @method static MusicalInstrument musicalInstrument()
 * @method static Phone phone()
 * @method static Computer computer()
 * @method static LightVideo lightVideo()
 * @method static BookPaper bookPaper()
 * @method static Money money()
 * @method static Mail mail()
 * @method static Writing writing()
 * @method static Office office()
 * @method static Lock lock()
 * @method static Tool tool()
 * @method static Science science()
 * @method static Medical medical()
 * @method static Household household()
 * @method static OtherObject otherObject()
 *
 * @property string glasses 👓
 * @property string sunglasses 🕶
 * @property string goggles 🥽
 * @property string labCoat 🥼
 * @property string safetyVest 🦺
 * @property string necktie 👔
 * @property string tShirt 👕
 * @property string jeans 👖
 * @property string scarf 🧣
 * @property string gloves 🧤
 * @property string coat 🧥
 * @property string socks 🧦
 * @property string dress 👗
 * @property string kimono 👘
 * @property string sari 🥻
 * @property string onePieceSwimsuit 🩱
 * @property string briefs 🩲
 * @property string shorts 🩳
 * @property string bikini 👙
 * @property string womanSClothes 👚
 * @property string purse 👛
 * @property string handbag 👜
 * @property string clutchBag 👝
 * @property string shoppingBags 🛍
 * @property string backpack 🎒
 * @property string manSShoe 👞
 * @property string runningShoe 👟
 * @property string hikingBoot 🥾
 * @property string flatShoe 🥿
 * @property string highHeeledShoe 👠
 * @property string womanSSandal 👡
 * @property string balletShoes 🩰
 * @property string womanSBoot 👢
 * @property string crown 👑
 * @property string womanSHat 👒
 * @property string topHat 🎩
 * @property string graduationCap 🎓
 * @property string billedCap 🧢
 * @property string rescueWorkerSHelmet ⛑
 * @property string prayerBeads 📿
 * @property string lipstick 💄
 * @property string ring 💍
 * @property string gemStone 💎
 * @property string mutedSpeaker 🔇
 * @property string speakerLowVolume 🔈
 * @property string speakerMediumVolume 🔉
 * @property string speakerHighVolume 🔊
 * @property string loudspeaker 📢
 * @property string megaphone 📣
 * @property string postalHorn 📯
 * @property string bell 🔔
 * @property string bellWithSlash 🔕
 * @property string musicalScore 🎼
 * @property string musicalNote 🎵
 * @property string musicalNotes 🎶
 * @property string studioMicrophone 🎙
 * @property string levelSlider 🎚
 * @property string controlKnobs 🎛
 * @property string microphone 🎤
 * @property string headphone 🎧
 * @property string radio 📻
 * @property string saxophone 🎷
 * @property string guitar 🎸
 * @property string musicalKeyboard 🎹
 * @property string trumpet 🎺
 * @property string violin 🎻
 * @property string banjo 🪕
 * @property string drum 🥁
 * @property string mobilePhone 📱
 * @property string mobilePhoneWithArrow 📲
 * @property string telephone ☎
 * @property string telephoneReceiver 📞
 * @property string pager 📟
 * @property string faxMachine 📠
 * @property string battery 🔋
 * @property string electricPlug 🔌
 * @property string laptop 💻
 * @property string desktopComputer 🖥
 * @property string printer 🖨
 * @property string keyboard ⌨
 * @property string computerMouse 🖱
 * @property string trackball 🖲
 * @property string computerDisk 💽
 * @property string floppyDisk 💾
 * @property string opticalDisk 💿
 * @property string dvd 📀
 * @property string abacus 🧮
 * @property string movieCamera 🎥
 * @property string filmFrames 🎞
 * @property string filmProjector 📽
 * @property string clapperBoard 🎬
 * @property string television 📺
 * @property string camera 📷
 * @property string cameraWithFlash 📸
 * @property string videoCamera 📹
 * @property string videocassette 📼
 * @property string magnifyingGlassTiltedLeft 🔍
 * @property string magnifyingGlassTiltedRight 🔎
 * @property string candle 🕯
 * @property string lightBulb 💡
 * @property string flashlight 🔦
 * @property string redPaperLantern 🏮
 * @property string diyaLamp 🪔
 * @property string notebookWithDecorativeCover 📔
 * @property string closedBook 📕
 * @property string openBook 📖
 * @property string greenBook 📗
 * @property string blueBook 📘
 * @property string orangeBook 📙
 * @property string books 📚
 * @property string notebook 📓
 * @property string ledger 📒
 * @property string pageWithCurl 📃
 * @property string scroll 📜
 * @property string pageFacingUp 📄
 * @property string newspaper 📰
 * @property string rolledUpNewspaper 🗞
 * @property string bookmarkTabs 📑
 * @property string bookmark 🔖
 * @property string label 🏷
 * @property string moneyBag 💰
 * @property string yenBanknote 💴
 * @property string dollarBanknote 💵
 * @property string euroBanknote 💶
 * @property string poundBanknote 💷
 * @property string moneyWithWings 💸
 * @property string creditCard 💳
 * @property string receipt 🧾
 * @property string chartIncreasingWithYen 💹
 * @property string currencyExchange 💱
 * @property string heavyDollarSign 💲
 * @property string envelope ✉
 * @property string eMail 📧
 * @property string incomingEnvelope 📨
 * @property string envelopeWithArrow 📩
 * @property string outboxTray 📤
 * @property string inboxTray 📥
 * @property string package 📦
 * @property string closedMailboxWithRaisedFlag 📫
 * @property string closedMailboxWithLoweredFlag 📪
 * @property string openMailboxWithRaisedFlag 📬
 * @property string openMailboxWithLoweredFlag 📭
 * @property string postbox 📮
 * @property string ballotBoxWithBallot 🗳
 * @property string pencil ✏
 * @property string blackNib ✒
 * @property string fountainPen 🖋
 * @property string pen 🖊
 * @property string paintbrush 🖌
 * @property string crayon 🖍
 * @property string memo 📝
 * @property string briefcase 💼
 * @property string fileFolder 📁
 * @property string openFileFolder 📂
 * @property string cardIndexDividers 🗂
 * @property string calendar 📅
 * @property string tearOffCalendar 📆
 * @property string spiralNotepad 🗒
 * @property string spiralCalendar 🗓
 * @property string cardIndex 📇
 * @property string chartIncreasing 📈
 * @property string chartDecreasing 📉
 * @property string barChart 📊
 * @property string clipboard 📋
 * @property string pushpin 📌
 * @property string roundPushpin 📍
 * @property string paperclip 📎
 * @property string linkedPaperclips 🖇
 * @property string straightRuler 📏
 * @property string triangularRuler 📐
 * @property string scissors ✂
 * @property string cardFileBox 🗃
 * @property string fileCabinet 🗄
 * @property string wastebasket 🗑
 * @property string locked 🔒
 * @property string unlocked 🔓
 * @property string lockedWithPen 🔏
 * @property string lockedWithKey 🔐
 * @property string key 🔑
 * @property string oldKey 🗝
 * @property string hammer 🔨
 * @property string axe 🪓
 * @property string pick ⛏
 * @property string hammerAndPick ⚒
 * @property string hammerAndWrench 🛠
 * @property string dagger 🗡
 * @property string crossedSwords ⚔
 * @property string pistol 🔫
 * @property string bowAndArrow 🏹
 * @property string shield 🛡
 * @property string wrench 🔧
 * @property string nutAndBolt 🔩
 * @property string gear ⚙
 * @property string clamp 🗜
 * @property string balanceScale ⚖
 * @property string probingCane 🦯
 * @property string link 🔗
 * @property string chains ⛓
 * @property string toolbox 🧰
 * @property string magnet 🧲
 * @property string alembic ⚗
 * @property string testTube 🧪
 * @property string petriDish 🧫
 * @property string dna 🧬
 * @property string microscope 🔬
 * @property string telescope 🔭
 * @property string satelliteAntenna 📡
 * @property string syringe 💉
 * @property string dropOfBlood 🩸
 * @property string pill 💊
 * @property string adhesiveBandage 🩹
 * @property string stethoscope 🩺
 * @property string door 🚪
 * @property string bed 🛏
 * @property string couchAndLamp 🛋
 * @property string chair 🪑
 * @property string toilet 🚽
 * @property string shower 🚿
 * @property string bathtub 🛁
 * @property string razor 🪒
 * @property string lotionBottle 🧴
 * @property string safetyPin 🧷
 * @property string broom 🧹
 * @property string basket 🧺
 * @property string rollOfPaper 🧻
 * @property string soap 🧼
 * @property string sponge 🧽
 * @property string fireExtinguisher 🧯
 * @property string shoppingCart 🛒
 * @property string cigarette 🚬
 * @property string coffin ⚰
 * @property string funeralUrn ⚱
 * @property string moai 🗿
 */
class Objects
{
    use ObjectsTrait;

}