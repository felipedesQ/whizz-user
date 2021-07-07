<?php

namespace Whizz\User\Entity\Common;

use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\UuidInterface;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\Type;
use Whizz\SharedObject\Domain\ValueObject\EntityId;
use Whizz\SharedObject\Domain\ValueObject\EntityUuid;


/**
 * @ORM\MappedSuperclass
 */
abstract class IdentifiableEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     */
    protected $id;


    public function getId(): EntityId
    {
        return EntityId::fromInteger($this->id);
    }

    public function setId(EntityId $id): self
    {
        $this->id = $id->toInteger();
        return $this;
    }

    /**
     * For having minimal human readable presentation of the entity
     *
     * @return string
     */
    protected function getInternalEntityName(): string
    {
        return self::class . ' #' . $this->getId();
    }

    /**
     * @Accessor(getter="getStringUuid")
     * @Type("string")
     * @var UuidInterface
     *
     * @ORM\Column(name="uuid", type="uuid", unique=true)
     * 
     */
    protected $uuid;

    public function getUuid(): ?EntityUuid
    {
        if (is_null($this->uuid)) {
            return null;
        }

        return EntityUuid::fromString($this->uuid->toString());
    }

    public function getStringUuid()
    {
        if (is_null($this->uuid)) {
            return null;
        }

        return $this->uuid->toString();
    }

    final public function setUuid(UuidInterface $uuid)
    {
        if ($this->uuid === null) {
            $this->uuid = $uuid;
            return;
        }
        if ($this->uuid->equals($uuid)) {
            return;
        }
        throw new DomainException('Replacing UUID is not allowed');
    }

    /**
     * Cloned entity is always a new entity
     */
    public function __clone()
    {
        if ($this->id !== null) {
            $this->id = null;
        }
        if ($this->uuid !== null) {
            $this->uuid = null;
        }
    }

}
