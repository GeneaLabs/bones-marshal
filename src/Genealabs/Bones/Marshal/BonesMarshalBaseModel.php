<?php namespace GeneaLabs\Bones\Marshal;


use GeneaLabs\Bones\Marshal\Events\EventGenerator;
use Watson\Validating\ValidatingTrait;

/**
 * Class BaseModel
 * @package GeneaLabs\Bones\Keeper\Models
 */
class BonesMarshalBaseModel extends \BaseModel
{
    use ValidatingTrait;
    use EventGenerator;

    /**
     * @var bool
     */
    protected $throwValidationExceptions = true;
}
