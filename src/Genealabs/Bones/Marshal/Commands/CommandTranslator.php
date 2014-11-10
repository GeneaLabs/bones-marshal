<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 11/10/14
 * Time: 1:55 PM
 */
namespace GeneaLabs\Bones\Marshal\Commands;

interface CommandTranslator
{
    public function toHandler($command);
}