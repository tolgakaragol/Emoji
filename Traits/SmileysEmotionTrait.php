<?php

namespace TolgaKaragol\Emoji\Traits;

use TolgaKaragol\Emoji\Traits\Sub\SmileysEmotion\FaceSmilingTrait;
use TolgaKaragol\Emoji\Traits\Sub\SmileysEmotion\FaceAffectionTrait;
use TolgaKaragol\Emoji\Traits\Sub\SmileysEmotion\FaceTongueTrait;
use TolgaKaragol\Emoji\Traits\Sub\SmileysEmotion\FaceHandTrait;
use TolgaKaragol\Emoji\Traits\Sub\SmileysEmotion\FaceNeutralSkepticalTrait;
use TolgaKaragol\Emoji\Traits\Sub\SmileysEmotion\FaceSleepyTrait;
use TolgaKaragol\Emoji\Traits\Sub\SmileysEmotion\FaceUnwellTrait;
use TolgaKaragol\Emoji\Traits\Sub\SmileysEmotion\FaceHatTrait;
use TolgaKaragol\Emoji\Traits\Sub\SmileysEmotion\FaceGlassesTrait;
use TolgaKaragol\Emoji\Traits\Sub\SmileysEmotion\FaceConcernedTrait;
use TolgaKaragol\Emoji\Traits\Sub\SmileysEmotion\FaceNegativeTrait;
use TolgaKaragol\Emoji\Traits\Sub\SmileysEmotion\FaceCostumeTrait;
use TolgaKaragol\Emoji\Traits\Sub\SmileysEmotion\CatFaceTrait;
use TolgaKaragol\Emoji\Traits\Sub\SmileysEmotion\MonkeyFaceTrait;
use TolgaKaragol\Emoji\Traits\Sub\SmileysEmotion\EmotionTrait;

/**
 * Trait SmileysEmotionTrait
 * @package TolgaKaragol\Emoji\Traits\SmileysEmotionTrait
 */
trait SmileysEmotionTrait
{
    use FaceSmilingTrait;
    use FaceAffectionTrait;
    use FaceTongueTrait;
    use FaceHandTrait;
    use FaceNeutralSkepticalTrait;
    use FaceSleepyTrait;
    use FaceUnwellTrait;
    use FaceHatTrait;
    use FaceGlassesTrait;
    use FaceConcernedTrait;
    use FaceNegativeTrait;
    use FaceCostumeTrait;
    use CatFaceTrait;
    use MonkeyFaceTrait;
    use EmotionTrait;
}