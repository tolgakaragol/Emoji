<?php

namespace TolgaKaragol\Emoji\Category;

use TolgaKaragol\Emoji\Category\Sub\Symbols\TransportSign;
use TolgaKaragol\Emoji\Category\Sub\Symbols\Warning;
use TolgaKaragol\Emoji\Category\Sub\Symbols\Arrow;
use TolgaKaragol\Emoji\Category\Sub\Symbols\Religion;
use TolgaKaragol\Emoji\Category\Sub\Symbols\Zodiac;
use TolgaKaragol\Emoji\Category\Sub\Symbols\AvSymbol;
use TolgaKaragol\Emoji\Category\Sub\Symbols\Gender;
use TolgaKaragol\Emoji\Category\Sub\Symbols\OtherSymbol;
use TolgaKaragol\Emoji\Category\Sub\Symbols\Keycap;
use TolgaKaragol\Emoji\Category\Sub\Symbols\Alphanum;
use TolgaKaragol\Emoji\Category\Sub\Symbols\Geometric;
use TolgaKaragol\Emoji\Traits\SymbolsTrait;

/**
 * Class Symbols
 * @package TolgaKaragol\Emoji\Category\Symbols
 *
 * @method static TransportSign transportSign()
 * @method static Warning warning()
 * @method static Arrow arrow()
 * @method static Religion religion()
 * @method static Zodiac zodiac()
 * @method static AvSymbol avSymbol()
 * @method static Gender gender()
 * @method static OtherSymbol otherSymbol()
 * @method static Keycap keycap()
 * @method static Alphanum alphanum()
 * @method static Geometric geometric()
 *
 * @property string aTMSign 🏧
 * @property string litterInBinSign 🚮
 * @property string potableWater 🚰
 * @property string wheelchairSymbol ♿
 * @property string menSRoom 🚹
 * @property string womenSRoom 🚺
 * @property string restroom 🚻
 * @property string babySymbol 🚼
 * @property string waterCloset 🚾
 * @property string passportControl 🛂
 * @property string customs 🛃
 * @property string baggageClaim 🛄
 * @property string leftLuggage 🛅
 * @property string warning ⚠
 * @property string childrenCrossing 🚸
 * @property string noEntry ⛔
 * @property string prohibited 🚫
 * @property string noBicycles 🚳
 * @property string noSmoking 🚭
 * @property string noLittering 🚯
 * @property string nonPotableWater 🚱
 * @property string noPedestrians 🚷
 * @property string noMobilePhones 📵
 * @property string noOneUnderEighteen 🔞
 * @property string radioactive ☢
 * @property string biohazard ☣
 * @property string upArrow ⬆
 * @property string upRightArrow ↗
 * @property string rightArrow ➡
 * @property string downRightArrow ↘
 * @property string downArrow ⬇
 * @property string downLeftArrow ↙
 * @property string leftArrow ⬅
 * @property string upLeftArrow ↖
 * @property string upDownArrow ↕
 * @property string leftRightArrow ↔
 * @property string rightArrowCurvingLeft ↩
 * @property string leftArrowCurvingRight ↪
 * @property string rightArrowCurvingUp ⤴
 * @property string rightArrowCurvingDown ⤵
 * @property string clockwiseVerticalArrows 🔃
 * @property string counterclockwiseArrowsButton 🔄
 * @property string bACKArrow 🔙
 * @property string eNDArrow 🔚
 * @property string oNArrow 🔛
 * @property string sOONArrow 🔜
 * @property string tOPArrow 🔝
 * @property string placeOfWorship 🛐
 * @property string atomSymbol ⚛
 * @property string om 🕉
 * @property string starOfDavid ✡
 * @property string wheelOfDharma ☸
 * @property string yinYang ☯
 * @property string latinCross ✝
 * @property string orthodoxCross ☦
 * @property string starAndCrescent ☪
 * @property string peaceSymbol ☮
 * @property string menorah 🕎
 * @property string dottedSixPointedStar 🔯
 * @property string aries ♈
 * @property string taurus ♉
 * @property string gemini ♊
 * @property string cancer ♋
 * @property string leo ♌
 * @property string virgo ♍
 * @property string libra ♎
 * @property string scorpio ♏
 * @property string sagittarius ♐
 * @property string capricorn ♑
 * @property string aquarius ♒
 * @property string pisces ♓
 * @property string ophiuchus ⛎
 * @property string shuffleTracksButton 🔀
 * @property string repeatButton 🔁
 * @property string repeatSingleButton 🔂
 * @property string playButton ▶
 * @property string fastForwardButton ⏩
 * @property string nextTrackButton ⏭
 * @property string playOrPauseButton ⏯
 * @property string reverseButton ◀
 * @property string fastReverseButton ⏪
 * @property string lastTrackButton ⏮
 * @property string upwardsButton 🔼
 * @property string fastUpButton ⏫
 * @property string downwardsButton 🔽
 * @property string fastDownButton ⏬
 * @property string pauseButton ⏸
 * @property string stopButton ⏹
 * @property string recordButton ⏺
 * @property string ejectButton ⏏
 * @property string cinema 🎦
 * @property string dimButton 🔅
 * @property string brightButton 🔆
 * @property string antennaBars 📶
 * @property string vibrationMode 📳
 * @property string mobilePhoneOff 📴
 * @property string femaleSign ♀
 * @property string maleSign ♂
 * @property string medicalSymbol ⚕
 * @property string infinity ♾
 * @property string recyclingSymbol ♻
 * @property string fleurDeLis ⚜
 * @property string tridentEmblem 🔱
 * @property string nameBadge 📛
 * @property string japaneseSymbolForBeginner 🔰
 * @property string hollowRedCircle ⭕
 * @property string checkMarkButton ✅
 * @property string checkBoxWithCheck ☑
 * @property string checkMark ✔
 * @property string multiplicationSign ✖
 * @property string crossMark ❌
 * @property string crossMarkButton ❎
 * @property string plusSign ➕
 * @property string minusSign ➖
 * @property string divisionSign ➗
 * @property string curlyLoop ➰
 * @property string doubleCurlyLoop ➿
 * @property string partAlternationMark 〽
 * @property string eightSpokedAsterisk ✳
 * @property string eightPointedStar ✴
 * @property string sparkle ❇
 * @property string doubleExclamationMark ‼
 * @property string exclamationQuestionMark ⁉
 * @property string questionMark ❓
 * @property string whiteQuestionMark ❔
 * @property string whiteExclamationMark ❕
 * @property string exclamationMark ❗
 * @property string wavyDash 〰
 * @property string copyright ©
 * @property string registered ®
 * @property string tradeMark ™
 * @property string keycapHashtag &amp;#x0023&amp;#xfe0f⃣
 * @property string keycapSnowFlake &amp;#x002a&amp;#xfe0f⃣
 * @property string keycap0 &amp;#x0030&amp;#xfe0f⃣
 * @property string keycap1 &amp;#x0031&amp;#xfe0f⃣
 * @property string keycap2 &amp;#x0032&amp;#xfe0f⃣
 * @property string keycap3 &amp;#x0033&amp;#xfe0f⃣
 * @property string keycap4 &amp;#x0034&amp;#xfe0f⃣
 * @property string keycap5 &amp;#x0035&amp;#xfe0f⃣
 * @property string keycap6 &amp;#x0036&amp;#xfe0f⃣
 * @property string keycap7 &amp;#x0037&amp;#xfe0f⃣
 * @property string keycap8 &amp;#x0038&amp;#xfe0f⃣
 * @property string keycap9 &amp;#x0039&amp;#xfe0f⃣
 * @property string keycap10 🔟
 * @property string inputLatinUppercase 🔠
 * @property string inputLatinLowercase 🔡
 * @property string inputNumbers 🔢
 * @property string inputSymbols 🔣
 * @property string inputLatinLetters 🔤
 * @property string aButtonBloodType 🅰
 * @property string aBButtonBloodType 🆎
 * @property string bButtonBloodType 🅱
 * @property string cLButton 🆑
 * @property string cOOLButton 🆒
 * @property string fREEButton 🆓
 * @property string information ℹ
 * @property string iDButton 🆔
 * @property string circledM Ⓜ
 * @property string nEWButton 🆕
 * @property string nGButton 🆖
 * @property string oButtonBloodType 🅾
 * @property string oKButton 🆗
 * @property string pButton 🅿
 * @property string sOSButton 🆘
 * @property string uPButton 🆙
 * @property string vSButton 🆚
 * @property string japaneseHereButton 🈁
 * @property string japaneseServiceChargeButton 🈂
 * @property string japaneseMonthlyAmountButton 🈷
 * @property string japaneseNotFreeOfChargeButton 🈶
 * @property string japaneseReservedButton 🈯
 * @property string japaneseBargainButton 🉐
 * @property string japaneseDiscountButton 🈹
 * @property string japaneseFreeOfChargeButton 🈚
 * @property string japaneseProhibitedButton 🈲
 * @property string japaneseAcceptableButton 🉑
 * @property string japaneseApplicationButton 🈸
 * @property string japanesePassingGradeButton 🈴
 * @property string japaneseVacancyButton 🈳
 * @property string japaneseCongratulationsButton ㊗
 * @property string japaneseSecretButton ㊙
 * @property string japaneseOpenForBusinessButton 🈺
 * @property string japaneseNoVacancyButton 🈵
 * @property string redCircle 🔴
 * @property string orangeCircle 🟠
 * @property string yellowCircle 🟡
 * @property string greenCircle 🟢
 * @property string blueCircle 🔵
 * @property string purpleCircle 🟣
 * @property string brownCircle 🟤
 * @property string blackCircle ⚫
 * @property string whiteCircle ⚪
 * @property string redSquare 🟥
 * @property string orangeSquare 🟧
 * @property string yellowSquare 🟨
 * @property string greenSquare 🟩
 * @property string blueSquare 🟦
 * @property string purpleSquare 🟪
 * @property string brownSquare 🟫
 * @property string blackLargeSquare ⬛
 * @property string whiteLargeSquare ⬜
 * @property string blackMediumSquare ◼
 * @property string whiteMediumSquare ◻
 * @property string blackMediumSmallSquare ◾
 * @property string whiteMediumSmallSquare ◽
 * @property string blackSmallSquare ▪
 * @property string whiteSmallSquare ▫
 * @property string largeOrangeDiamond 🔶
 * @property string largeBlueDiamond 🔷
 * @property string smallOrangeDiamond 🔸
 * @property string smallBlueDiamond 🔹
 * @property string redTrianglePointedUp 🔺
 * @property string redTrianglePointedDown 🔻
 * @property string diamondWithADot 💠
 * @property string radioButton 🔘
 * @property string whiteSquareButton 🔳
 * @property string blackSquareButton 🔲
 */
class Symbols
{
    use SymbolsTrait;

}