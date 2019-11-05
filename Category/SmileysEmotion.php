<?php

namespace TolgaKaragol\Emoji\Category;

use TolgaKaragol\Emoji\Category\Sub\SmileysEmotion\FaceSmiling;
use TolgaKaragol\Emoji\Category\Sub\SmileysEmotion\FaceAffection;
use TolgaKaragol\Emoji\Category\Sub\SmileysEmotion\FaceTongue;
use TolgaKaragol\Emoji\Category\Sub\SmileysEmotion\FaceHand;
use TolgaKaragol\Emoji\Category\Sub\SmileysEmotion\FaceNeutralSkeptical;
use TolgaKaragol\Emoji\Category\Sub\SmileysEmotion\FaceSleepy;
use TolgaKaragol\Emoji\Category\Sub\SmileysEmotion\FaceUnwell;
use TolgaKaragol\Emoji\Category\Sub\SmileysEmotion\FaceHat;
use TolgaKaragol\Emoji\Category\Sub\SmileysEmotion\FaceGlasses;
use TolgaKaragol\Emoji\Category\Sub\SmileysEmotion\FaceConcerned;
use TolgaKaragol\Emoji\Category\Sub\SmileysEmotion\FaceNegative;
use TolgaKaragol\Emoji\Category\Sub\SmileysEmotion\FaceCostume;
use TolgaKaragol\Emoji\Category\Sub\SmileysEmotion\CatFace;
use TolgaKaragol\Emoji\Category\Sub\SmileysEmotion\MonkeyFace;
use TolgaKaragol\Emoji\Category\Sub\SmileysEmotion\Emotion;
use TolgaKaragol\Emoji\Traits\SmileysEmotionTrait;

/**
 * Class SmileysEmotion
 * @package TolgaKaragol\Emoji\Category\SmileysEmotion
 *
 * @method static FaceSmiling faceSmiling()
 * @method static FaceAffection faceAffection()
 * @method static FaceTongue faceTongue()
 * @method static FaceHand faceHand()
 * @method static FaceNeutralSkeptical faceNeutralSkeptical()
 * @method static FaceSleepy faceSleepy()
 * @method static FaceUnwell faceUnwell()
 * @method static FaceHat faceHat()
 * @method static FaceGlasses faceGlasses()
 * @method static FaceConcerned faceConcerned()
 * @method static FaceNegative faceNegative()
 * @method static FaceCostume faceCostume()
 * @method static CatFace catFace()
 * @method static MonkeyFace monkeyFace()
 * @method static Emotion emotion()
 *
 * @property string grinningFace 😀
 * @property string grinningFaceWithBigEyes 😃
 * @property string grinningFaceWithSmilingEyes 😄
 * @property string beamingFaceWithSmilingEyes 😁
 * @property string grinningSquintingFace 😆
 * @property string grinningFaceWithSweat 😅
 * @property string rollingOnTheFloorLaughing 🤣
 * @property string faceWithTearsOfJoy 😂
 * @property string slightlySmilingFace 🙂
 * @property string upsideDownFace 🙃
 * @property string winkingFace 😉
 * @property string smilingFaceWithSmilingEyes 😊
 * @property string smilingFaceWithHalo 😇
 * @property string smilingFaceWithHearts 🥰
 * @property string smilingFaceWithHeartEyes 😍
 * @property string starStruck 🤩
 * @property string faceBlowingAKiss 😘
 * @property string kissingFace 😗
 * @property string smilingFace ☺
 * @property string kissingFaceWithClosedEyes 😚
 * @property string kissingFaceWithSmilingEyes 😙
 * @property string faceSavoringFood 😋
 * @property string faceWithTongue 😛
 * @property string winkingFaceWithTongue 😜
 * @property string zanyFace 🤪
 * @property string squintingFaceWithTongue 😝
 * @property string moneyMouthFace 🤑
 * @property string huggingFace 🤗
 * @property string faceWithHandOverMouth 🤭
 * @property string shushingFace 🤫
 * @property string thinkingFace 🤔
 * @property string zipperMouthFace 🤐
 * @property string faceWithRaisedEyebrow 🤨
 * @property string neutralFace 😐
 * @property string expressionlessFace 😑
 * @property string faceWithoutMouth 😶
 * @property string smirkingFace 😏
 * @property string unamusedFace 😒
 * @property string faceWithRollingEyes 🙄
 * @property string grimacingFace 😬
 * @property string lyingFace 🤥
 * @property string relievedFace 😌
 * @property string pensiveFace 😔
 * @property string sleepyFace 😪
 * @property string droolingFace 🤤
 * @property string sleepingFace 😴
 * @property string faceWithMedicalMask 😷
 * @property string faceWithThermometer 🤒
 * @property string faceWithHeadBandage 🤕
 * @property string nauseatedFace 🤢
 * @property string faceVomiting 🤮
 * @property string sneezingFace 🤧
 * @property string hotFace 🥵
 * @property string coldFace 🥶
 * @property string woozyFace 🥴
 * @property string dizzyFace 😵
 * @property string explodingHead 🤯
 * @property string cowboyHatFace 🤠
 * @property string partyingFace 🥳
 * @property string smilingFaceWithSunglasses 😎
 * @property string nerdFace 🤓
 * @property string faceWithMonocle 🧐
 * @property string confusedFace 😕
 * @property string worriedFace 😟
 * @property string slightlyFrowningFace 🙁
 * @property string frowningFace ☹
 * @property string faceWithOpenMouth 😮
 * @property string hushedFace 😯
 * @property string astonishedFace 😲
 * @property string flushedFace 😳
 * @property string pleadingFace 🥺
 * @property string frowningFaceWithOpenMouth 😦
 * @property string anguishedFace 😧
 * @property string fearfulFace 😨
 * @property string anxiousFaceWithSweat 😰
 * @property string sadButRelievedFace 😥
 * @property string cryingFace 😢
 * @property string loudlyCryingFace 😭
 * @property string faceScreamingInFear 😱
 * @property string confoundedFace 😖
 * @property string perseveringFace 😣
 * @property string disappointedFace 😞
 * @property string downcastFaceWithSweat 😓
 * @property string wearyFace 😩
 * @property string tiredFace 😫
 * @property string yawningFace 🥱
 * @property string faceWithSteamFromNose 😤
 * @property string poutingFace 😡
 * @property string angryFace 😠
 * @property string faceWithSymbolsOnMouth 🤬
 * @property string smilingFaceWithHorns 😈
 * @property string angryFaceWithHorns 👿
 * @property string skull 💀
 * @property string skullAndCrossbones ☠
 * @property string pileOfPoo 💩
 * @property string clownFace 🤡
 * @property string ogre 👹
 * @property string goblin 👺
 * @property string ghost 👻
 * @property string alien 👽
 * @property string alienMonster 👾
 * @property string robot 🤖
 * @property string grinningCat 😺
 * @property string grinningCatWithSmilingEyes 😸
 * @property string catWithTearsOfJoy 😹
 * @property string smilingCatWithHeartEyes 😻
 * @property string catWithWrySmile 😼
 * @property string kissingCat 😽
 * @property string wearyCat 🙀
 * @property string cryingCat 😿
 * @property string poutingCat 😾
 * @property string seeNoEvilMonkey 🙈
 * @property string hearNoEvilMonkey 🙉
 * @property string speakNoEvilMonkey 🙊
 * @property string kissMark 💋
 * @property string loveLetter 💌
 * @property string heartWithArrow 💘
 * @property string heartWithRibbon 💝
 * @property string sparklingHeart 💖
 * @property string growingHeart 💗
 * @property string beatingHeart 💓
 * @property string revolvingHearts 💞
 * @property string twoHearts 💕
 * @property string heartDecoration 💟
 * @property string heartExclamation ❣
 * @property string brokenHeart 💔
 * @property string redHeart ❤
 * @property string orangeHeart 🧡
 * @property string yellowHeart 💛
 * @property string greenHeart 💚
 * @property string blueHeart 💙
 * @property string purpleHeart 💜
 * @property string brownHeart 🤎
 * @property string blackHeart 🖤
 * @property string whiteHeart 🤍
 * @property string hundredPoints 💯
 * @property string angerSymbol 💢
 * @property string collision 💥
 * @property string dizzy 💫
 * @property string sweatDroplets 💦
 * @property string dashingAway 💨
 * @property string hole 🕳
 * @property string bomb 💣
 * @property string speechBalloon 💬
 * @property string eyeInSpeechBubble &amp;#x1f441&amp;#xfe0f&amp;#x200d&amp;#x1f5e8️
 * @property string leftSpeechBubble 🗨
 * @property string rightAngerBubble 🗯
 * @property string thoughtBalloon 💭
 * @property string zzz 💤
 */
class SmileysEmotion
{
    use SmileysEmotionTrait;

}