<?php

namespace Whizz\User\Repository;


use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\NoResultException;
use Whizz\SharedObject\Domain\ValueObject\EntityUuid;
use Ramsey\Uuid\Uuid;
use Whizz\User\Entity\UserEntity;

class UserRepository extends ServiceEntityRepository
{

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserEntity::class);
    }

    public function save(UserEntity $entity): void
    {
        $this->getEntityManager()->persist($entity);
        $this->getEntityManager()->flush($entity);
    }

    public function update(UserEntity $entity): void
    {
        $this->getEntityManager()->flush($entity);
    }

    public function getUserByUuid(EntityUuid $entityUuid): UserEntity
    {
        $qb = $this->getEntityManager()->createQueryBuilder();
        $qb->select('e')
            ->from(UserEntity::class, 'e')
            ->where('e.uuid = :uuid')
        ;
        $qb->setParameter('uuid', $entityUuid->toString());

        try {
            return $qb->getQuery()->getSingleResult();
        } catch (NoResultException $e) {
            throw new EntityNotFoundException(
                sprintf('No entity found for uuid %s', $entityUuid->toString())
            );
        }
    }

    public function getNonExpiredByApiKey(string $apiKey): UserEntity
    {
        $qb = $this->getEntityManager()->createQueryBuilder();
        $qb
            ->select('u')
            ->from(UserEntity::class, 'u')
            ->where('u.apiKey = :apiKey')
            ->andWhere('u.apiKeyExpiresAt > CURRENT_TIMESTAMP()')
            ->setParameter('apiKey', $apiKey);

        try {
            return $qb->getQuery()->getSingleResult();
        } catch (NoResultException $e) {
            throw new EntityNotFoundException('User (non expired) not found with the apiKey provided: ' . $apiKey);
        }
    }
}