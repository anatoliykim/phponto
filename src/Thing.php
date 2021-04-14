<?php

declare(strict_types=1);

namespace PHPOnto;

/**
 * Class Thing
 */
abstract class Thing
{
    /**
     * Function returns whether current instance is some thing
     * @param Thing $thing
     * @return mixed
     */
    abstract public function isA(Thing $thing);
}