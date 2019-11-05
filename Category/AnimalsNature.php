<?php

namespace TolgaKaragol\Emoji\Category;

use TolgaKaragol\Emoji\Category\Sub\AnimalsNature\AnimalMammal;
use TolgaKaragol\Emoji\Category\Sub\AnimalsNature\AnimalBird;
use TolgaKaragol\Emoji\Category\Sub\AnimalsNature\AnimalAmphibian;
use TolgaKaragol\Emoji\Category\Sub\AnimalsNature\AnimalReptile;
use TolgaKaragol\Emoji\Category\Sub\AnimalsNature\AnimalMarine;
use TolgaKaragol\Emoji\Category\Sub\AnimalsNature\AnimalBug;
use TolgaKaragol\Emoji\Category\Sub\AnimalsNature\PlantFlower;
use TolgaKaragol\Emoji\Category\Sub\AnimalsNature\PlantOther;
use TolgaKaragol\Emoji\Traits\AnimalsNatureTrait;

/**
 * Class AnimalsNature
 * @package TolgaKaragol\Emoji\Category\AnimalsNature
 *
 * @method static AnimalMammal animalMammal()
 * @method static AnimalBird animalBird()
 * @method static AnimalAmphibian animalAmphibian()
 * @method static AnimalReptile animalReptile()
 * @method static AnimalMarine animalMarine()
 * @method static AnimalBug animalBug()
 * @method static PlantFlower plantFlower()
 * @method static PlantOther plantOther()
 */
class AnimalsNature
{
    use AnimalsNatureTrait;

}