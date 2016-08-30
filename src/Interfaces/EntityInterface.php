<?php

namespace Creaturemyst\VekaEsdeka\Interfaces;

interface EntityInterface
{
    /**
     * Returns TRUE if it`s persisted.
     *
     * @return bool
     */
    public function isPersisted() : bool;

    /**
     * Sets persisted flag.
     *
     * @param bool $isPersisted
     * @return EntityInterface
     */
    public function setIsPersisted(bool $isPersisted) : EntityInterface;
}
