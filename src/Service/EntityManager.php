<?php

namespace Creaturemyst\VekaEsdeka\Service;

use Creaturemyst\VekaEsdeka\Interfaces\EntityInterface;
use Creaturemyst\VekaEsdeka\Interfaces\EntityManagerInterface;
use GuzzleHttp\ClientInterface;

class EntityManager implements EntityManagerInterface
{
    /** @var ClientInterface HTTP Client */
    protected $client;

    /**
     * Sets HTTP Client.
     *
     * @param ClientInterface $client
     * @return EntityManager
     */
    public function setClient(ClientInterface $client) : EntityManager
    {
        $this->client = $client;
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getClient() : ClientInterface
    {
        return $this->client;
    }

    /**
     * @inheritdoc
     */
    public function persist(EntityInterface &$entity)
    {
        $entity->isPersisted() ? $this->createEntity($entity) : $this->saveEntity($entity);
    }

    /**
     * @inheritdoc
     */
    public function delete(EntityInterface &$entity)
    {
        // TODO: Implement delete() method.
    }

    /**
     * Create entity.
     *
     * @param EntityInterface $entity
     */
    protected function createEntity(EntityInterface &$entity)
    {
        $entity->setIsPersisted(true);
        // TODO: Creating entity
    }

    /**
     * Save entity.
     *
     * @param EntityInterface $entity
     */
    protected function saveEntity(EntityInterface &$entity)
    {
        // TODO: Saving entity
    }

    /**
     * Delete entity.
     *
     * @param EntityInterface $entity
     */
    protected function deleteEntity(EntityInterface &$entity)
    {
        // TODO: Delete entity
    }
}
