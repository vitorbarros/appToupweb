<?php
namespace Budget\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Stdlib\Hydrator;

/**
 * MobileApplication
 *
 * @ORM\Table(name="mobile_application")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="Budget\Entity\Repository\MobileApplicationRepository")
 */
class MobileApplication
{
    /**
     * @var integer
     *
     * @ORM\Column(name="mobile_application_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mobileApplicationId;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile_application_name", type="string", length=255, nullable=false)
     */
    private $mobileApplicationName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="mobile_application_include_layout", type="boolean", nullable=false)
     */
    private $mobileApplicationIncludeLayout;

    /**
     * @var boolean
     *
     * @ORM\Column(name="mobile_application_include_content", type="boolean", nullable=false)
     */
    private $mobileApplicationIncludeContent;

    /**
     * @var boolean
     *
     * @ORM\Column(name="mobile_application_ios", type="boolean", nullable=false)
     */
    private $mobileApplicationIos;

    /**
     * @var boolean
     *
     * @ORM\Column(name="mobile_application_android", type="boolean", nullable=false)
     */
    private $mobileApplicationAndroid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="mobile_application_windows_phone", type="boolean", nullable=false)
     */
    private $mobileApplicationWindowsPhone;

    /**
     * @var boolean
     *
     * @ORM\Column(name="mobile_application_desktop", type="boolean", nullable=false)
     */
    private $mobileApplicationDesktop;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile_application_rules_description", type="text", length=65535, nullable=false)
     */
    private $mobileApplicationRulesDescription;

    public function __construct(array $options = array())
    {
        (new Hydrator\ClassMethods())->hydrate($options, $this);
    }

    /**
     * @return int
     */
    public function getMobileApplicationId()
    {
        return $this->mobileApplicationId;
    }

    /**
     * @param int $mobileApplicationId
     * @return MobileApplication
     */
    public function setMobileApplicationId($mobileApplicationId)
    {
        $this->mobileApplicationId = $mobileApplicationId;
        return $this;
    }

    /**
     * @return string
     */
    public function getMobileApplicationName()
    {
        return $this->mobileApplicationName;
    }

    /**
     * @param string $mobileApplicationName
     * @return MobileApplication
     */
    public function setMobileApplicationName($mobileApplicationName)
    {
        $this->mobileApplicationName = $mobileApplicationName;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getMobileApplicationIncludeLayout()
    {
        return $this->mobileApplicationIncludeLayout;
    }

    /**
     * @param boolean $mobileApplicationIncludeLayout
     * @return MobileApplication
     */
    public function setMobileApplicationIncludeLayout($mobileApplicationIncludeLayout)
    {
        $this->mobileApplicationIncludeLayout = $mobileApplicationIncludeLayout;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getMobileApplicationIncludeContent()
    {
        return $this->mobileApplicationIncludeContent;
    }

    /**
     * @param boolean $mobileApplicationIncludeContent
     * @return MobileApplication
     */
    public function setMobileApplicationIncludeContent($mobileApplicationIncludeContent)
    {
        $this->mobileApplicationIncludeContent = $mobileApplicationIncludeContent;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getMobileApplicationIos()
    {
        return $this->mobileApplicationIos;
    }

    /**
     * @param boolean $mobileApplicationIos
     * @return MobileApplication
     */
    public function setMobileApplicationIos($mobileApplicationIos)
    {
        $this->mobileApplicationIos = $mobileApplicationIos;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getMobileApplicationAndroid()
    {
        return $this->mobileApplicationAndroid;
    }

    /**
     * @param boolean $mobileApplicationAndroid
     * @return MobileApplication
     */
    public function setMobileApplicationAndroid($mobileApplicationAndroid)
    {
        $this->mobileApplicationAndroid = $mobileApplicationAndroid;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getMobileApplicationWindowsPhone()
    {
        return $this->mobileApplicationWindowsPhone;
    }

    /**
     * @param boolean $mobileApplicationWindowsPhone
     * @return MobileApplication
     */
    public function setMobileApplicationWindowsPhone($mobileApplicationWindowsPhone)
    {
        $this->mobileApplicationWindowsPhone = $mobileApplicationWindowsPhone;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getMobileApplicationDesktop()
    {
        return $this->mobileApplicationDesktop;
    }

    /**
     * @param boolean $mobileApplicationDesktop
     * @return MobileApplication
     */
    public function setMobileApplicationDesktop($mobileApplicationDesktop)
    {
        $this->mobileApplicationDesktop = $mobileApplicationDesktop;
        return $this;
    }

    /**
     * @return string
     */
    public function getMobileApplicationRulesDescription()
    {
        return $this->mobileApplicationRulesDescription;
    }

    /**
     * @param string $mobileApplicationRulesDescription
     * @return MobileApplication
     */
    public function setMobileApplicationRulesDescription($mobileApplicationRulesDescription)
    {
        $this->mobileApplicationRulesDescription = $mobileApplicationRulesDescription;
        return $this;
    }
}

