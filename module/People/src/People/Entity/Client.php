<?php
namespace People\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Stdlib\Hydrator;

/**
 * Client
 *
 * @ORM\Table(name="client", indexes={@ORM\Index(name="fk_client_user_idx", columns={"user"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="People\Entity\Repository\ClientRepository")
 */
class Client
{
    /**
     * @var integer
     *
     * @ORM\Column(name="client_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $clientId;

    /**
     * @var string
     *
     * @ORM\Column(name="client_name", type="string", length=255, nullable=false)
     */
    private $clientName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="client_is_legal_person", type="boolean", nullable=false)
     */
    private $clientIsLegalPerson = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="client_is_physical_person", type="boolean", nullable=false)
     */
    private $clientIsPhysicalPerson = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="client_email", type="string", length=255, nullable=false)
     */
    private $clientEmail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="client_created_at", type="datetime", nullable=false)
     */
    private $clientCreatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="client_updated_at", type="datetime", nullable=false)
     */
    private $clientUpdatedAt;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user", referencedColumnName="user_id")
     * })
     */
    private $user;

    public function __construct(array $options = array())
    {
        (new Hydrator\ClassMethods())->hydrate($options, $this);
        $this->clientCreatedAt = new \DateTime("now");
        $this->clientUpdatedAt = new \DateTime("now");
    }

    /**
     * @return int
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @param int $clientId
     * @return Client
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;
        return $this;
    }

    /**
     * @return string
     */
    public function getClientName()
    {
        return $this->clientName;
    }

    /**
     * @param string $clientName
     * @return Client
     */
    public function setClientName($clientName)
    {
        $this->clientName = $clientName;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getClientIsLegalPerson()
    {
        return $this->clientIsLegalPerson;
    }

    /**
     * @param boolean $clientIsLegalPerson
     * @return Client
     */
    public function setClientIsLegalPerson($clientIsLegalPerson)
    {
        $this->clientIsLegalPerson = $clientIsLegalPerson;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getClientIsPhysicalPerson()
    {
        return $this->clientIsPhysicalPerson;
    }

    /**
     * @param boolean $clientIsPhysicalPerson
     * @return Client
     */
    public function setClientIsPhysicalPerson($clientIsPhysicalPerson)
    {
        $this->clientIsPhysicalPerson = $clientIsPhysicalPerson;
        return $this;
    }

    /**
     * @return string
     */
    public function getClientEmail()
    {
        return $this->clientEmail;
    }

    /**
     * @param string $clientEmail
     * @return Client
     */
    public function setClientEmail($clientEmail)
    {
        $this->clientEmail = $clientEmail;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getClientCreatedAt()
    {
        return $this->clientCreatedAt;
    }

    /**
     * @return \DateTime
     */
    public function getClientUpdatedAt()
    {
        return $this->clientUpdatedAt;
    }

    /**
     * @ORM\PreUpdate
     */
    public function setClientUpdatedAt()
    {
        $this->clientUpdatedAt = new \DateTime("now");
        return $this;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     * @return Client
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }
}

