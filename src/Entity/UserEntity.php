<?php

namespace Whizz\User\Entity;

use Whizz\SharedObject\Entity\BaseEntity;

/**
 * @ORM\Entity(repositoryClass="Whizz\User\Repository\UserRepository")
 * @ORM\Table(name="users")
 * @ORM\HasLifecycleCallbacks()
 */
class UserEntity extends BaseEntity
{
    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, unique=true, nullable=false)
     */
    protected $email;

    /**
     * The salt to use for hashing.
     *
     * @var string
     *
     * @ORM\Column(type="string", length=255, unique=false, nullable=true)
     */
    protected $salt;

    /**
     * Encrypted password. Must be persisted.
     *
     * @var string
     *
     * @ORM\Column(type="string", length=255, unique=false, nullable=true)
     */
    protected $password;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(type="datetime_immutable", nullable=true)
     */
    protected $lastLogin;

    /**
     * Random string sent to the user email address in order to verify it.
     *
     * @var string|null
     *
     * @ORM\Column(type="string", length=255, unique=false, nullable=true)
     */
    protected $confirmationToken;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, unique=false, nullable=false)
     */
    protected $firstName;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, unique=false, nullable=false)
     */
    protected $lastName;

    /**
     * @var string $phone
     *
     * @ORM\Column(name="phone", type="string", length=32, nullable=true)
     */
    protected $phone;

    /**
     * @var $apiKey
     *
     * @ORM\Column(name="api_key",type="string", nullable=true, unique=true)
     */
    protected $apiKey;

    /**
     * @var string $apiKey
     *
     * @ORM\Column(name="api_key_expires_at", type="datetime_immutable", nullable=true)
     */
    protected $apiKeyExpiresAt;

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getSalt(): string
    {
        return $this->salt;
    }

   public function setSalt(string $salt): self
    {
        $this->salt = $salt;

        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getLastLogin(): ?\DateTime
    {
        return $this->lastLogin;
    }

    public function setLastLogin(?\DateTime $lastLogin): self
    {
        $this->lastLogin = $lastLogin;

        return $this;
    }

    public function getConfirmationToken(): ?string
    {
        return $this->confirmationToken;
    }

    public function setConfirmationToken(?string $confirmationToken): self
    {
        $this->confirmationToken = $confirmationToken;

        return $this;
    }

     public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getApiKey()
    {
        return $this->apiKey;
    }

    public function setApiKey($apiKey): self
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    public function getApiKeyExpiresAt(): \DateTime
    {
        return $this->apiKeyExpiresAt;
    }

    public function setApiKeyExpiresAt(\DateTime $apiKeyExpiresAt = null ): self
    {
        $this->apiKeyExpiresAt = $apiKeyExpiresAt;

        return $this;
    }

}