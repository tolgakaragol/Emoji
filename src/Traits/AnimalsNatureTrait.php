<?php

namespace TolgaKaragol\Emoji\Traits;

use TolgaKaragol\Emoji\Traits\Sub\AnimalsNature\AnimalMammalTrait;
use TolgaKaragol\Emoji\Traits\Sub\AnimalsNature\AnimalBirdTrait;
use TolgaKaragol\Emoji\Traits\Sub\AnimalsNature\AnimalAmphibianTrait;
use TolgaKaragol\Emoji\Traits\Sub\AnimalsNature\AnimalReptileTrait;
use TolgaKaragol\Emoji\Traits\Sub\AnimalsNature\AnimalMarineTrait;
use TolgaKaragol\Emoji\Traits\Sub\AnimalsNature\AnimalBugTrait;
use TolgaKaragol\Emoji\Traits\Sub\AnimalsNature\PlantFlowerTrait;
use TolgaKaragol\Emoji\Traits\Sub\AnimalsNature\PlantOtherTrait;

/**
 * Trait AnimalsNatureTrait
 * @package TolgaKaragol\Emoji\Traits\AnimalsNatureTrait
 */
trait AnimalsNatureTrait
{
    use AnimalMammalTrait;
    use AnimalBirdTrait;
    use AnimalAmphibianTrait;
    use AnimalReptileTrait;
    use AnimalMarineTrait;
    use AnimalBugTrait;
    use PlantFlowerTrait;
    use PlantOtherTrait;
}