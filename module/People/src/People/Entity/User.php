<?php
namespace People\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Stdlib\Hydrator;
use Zend\Crypt\Key\Derivation\Pbkdf2;
use Zend\Math\Rand;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="People\Entity\Repository\UserRepository")
 */
class User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_username", type="string", length=100, nullable=false)
     */
    private $userUsername;

    /**
     * @var string
     *
     * @ORM\Column(name="user_password", type="string", length=255, nullable=false)
     */
    private $userPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="user_activation_key", type="string", length=100, nullable=false)
     */
    private $userActivationKey;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_status", type="boolean", nullable=false)
     */
    private $userStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="user_salt", type="string", length=100, nullable=false)
     */
    private $userSalt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="user_created_at", type="datetime", nullable=false)
     */
    private $userCreatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="user_updated_at", type="datetime", nullable=false)
     */
    private $userUpdatedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="user_role", type="string", length=100, nullable=false)
     */
    private $userRole;

    public function __construct(array $options = array())
    {
        (new Hydrator\ClassMethods())->hydrate($options, $this);
        $this->userCreatedAt = new \DateTime("now");
        $this->userUpdatedAt = new \DateTime("now");
        $this->userSalt = base64_encode(Rand::getBytes(8, true));
        $this->userActivationKey = md5($this->userUsername . $this->userSalt);
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     * @return User
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserUsername()
    {
        return $this->userUsername;
    }

    /**
     * @param string $userUsername
     * @return User
     */
    public function setUserUsername($userUsername)
    {
        $this->userUsername = $userUsername;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserPassword()
    {
        return $this->userPassword;
    }

    /**
     * @param string $userPassword
     * @return User
     */
    public function setUserPassword($userPassword)
    {
        $this->userPassword = $this->encryptPassword($userPassword);
        return $this;
    }

    /**
     * @return string
     */
    public function getUserActivationKey()
    {
        return $this->userActivationKey;
    }

    /**
     * @return boolean
     */
    public function getUserStatus()
    {
        return $this->userStatus;
    }

    /**
     * @param boolean $userStatus
     * @return User
     */
    public function setUserStatus($userStatus)
    {
        $this->userStatus = $userStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserSalt()
    {
        return $this->userSalt;
    }

    /**
     * @return User
     */
    public function setUserSalt()
    {
        $this->userSalt = base64_encode(Rand::getBytes(8, true));
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUserCreatedAt()
    {
        return $this->userCreatedAt;
    }

    /**
     * @return \DateTime
     */
    public function getUserUpdatedAt()
    {
        return $this->userUpdatedAt;
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUserUpdatedAt()
    {
        $this->userUpdatedAt = new \DateTime("now");
        return $this;
    }

    /**
     * @return string
     */
    public function getUserRole()
    {
        return $this->userRole;
    }

    /**
     * @param string $userRole
     * @return User
     */
    public function setUserRole($userRole)
    {
        $this->userRole = $userRole;
        return $this;
    }

    public function encryptPassword($password)
    {
        return base64_encode(Pbkdf2::calc('sha256', $password, $this->userSalt, 10000, 120));
    }
}

