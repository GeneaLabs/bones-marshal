<?php namespace GeneaLabs\Bones\Marshal;

use GeneaLabs\Bones\Marshal\Commands\CommandBus;

/**
 * Class BonesKeeperBaseController
 * @package GeneaLabs\Bones\Keeper
 */
class BonesMarshalBaseController extends \BaseController
{
    /**
     * @var CommandBus
     */
    protected $commandBus;

    public function __construct(CommandBus $commandBus)
    {
        $this->commandBus = $commandBus;
    }

    /**
     * @param $command
     */
    protected function execute($command)
    {
        $this->commandBus->execute($command);
    }
}
