<?php namespace GeneaLabs\Bones\Marshal;


use GeneaLabs\Bones\Marshal\Events\EventGenerator;
use Watson\Validating\ValidatingTrait;

class BonesMarshalBaseModel extends \Model
{
    use ValidatingTrait;
    use EventGenerator;

    /**
     * @var bool
     */
    protected $throwValidationExceptions = true;
}
