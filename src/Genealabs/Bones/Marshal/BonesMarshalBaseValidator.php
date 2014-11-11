<?php namespace GeneaLabs\Bones\Marshal;

use Illuminate\Validation\Factory as Validator;

class BonesMarshalBaseValidator
{
    /**
     * @var
     */
    protected $validator;

    public function __construct(Validator $validator)
    {
        $this->validator = $validator;
    }
}
