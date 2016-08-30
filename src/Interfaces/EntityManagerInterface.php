<?php

namespace Creaturemyst\VekaEsdeka\Interfaces;

use GuzzleHttp\ClientInterface;

interface EntityManagerInterface
{
    /**
     * Returns ClientInterface.
     *
     * @return ClientInterface
     */
    public function getClient() : ClientInterface;

    /**
     * Persists Entity.
     *
     * @param EntityInterface $entity
     * @return void
     */
    public function persist(EntityInterface &$entity);

    /**
     * Delete Entity.
     *
     * @param EntityInterface $entity
     * @return void
     */
    public function delete(EntityInterface &$entity);
}
