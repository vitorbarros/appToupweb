<?php
namespace Budget\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Stdlib\Hydrator;

/**
 * WebApplication
 *
 * @ORM\Table(name="web_application")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="Budget\Entity\Repository\WebApplicationRepository")
 */
class WebApplication
{
    /**
     * @var integer
     *
     * @ORM\Column(name="web_application_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $webApplicationId;

    /**
     * @var string
     *
     * @ORM\Column(name="web_application_name", type="string", length=45, nullable=false)
     */
    private $webApplicationName;

    /**
     * @var string
     *
     * @ORM\Column(name="web_application_domain", type="string", length=45, nullable=false)
     */
    private $webApplicationDomain;

    /**
     * @var boolean
     *
     * @ORM\Column(name="web_application_include_layout", type="boolean", nullable=false)
     */
    private $webApplicationIncludeLayout;

    /**
     * @var boolean
     *
     * @ORM\Column(name="web_application_include_content", type="boolean", nullable=false)
     */
    private $webApplicationIncludeContent;

    /**
     * @var boolean
     *
     * @ORM\Column(name="web_application_has_integration", type="boolean", nullable=false)
     */
    private $webApplicationHasIntegration;

    /**
     * @var string
     *
     * @ORM\Column(name="web_application_description", type="text", length=65535, nullable=false)
     */
    private $webApplicationDescription;

    public function __construct(array $options = array())
    {
        (new Hydrator\ClassMethods())->hydrate($options, $this);
    }

    /**
     * @return int
     */
    public function getWebApplicationId()
    {
        return $this->webApplicationId;
    }

    /**
     * @param int $webApplicationId
     * @return WebApplication
     */
    public function setWebApplicationId($webApplicationId)
    {
        $this->webApplicationId = $webApplicationId;
        return $this;
    }

    /**
     * @return string
     */
    public function getWebApplicationName()
    {
        return $this->webApplicationName;
    }

    /**
     * @param string $webApplicationName
     * @return WebApplication
     */
    public function setWebApplicationName($webApplicationName)
    {
        $this->webApplicationName = $webApplicationName;
        return $this;
    }

    /**
     * @return string
     */
    public function getWebApplicationDomain()
    {
        return $this->webApplicationDomain;
    }

    /**
     * @param string $webApplicationDomain
     * @return WebApplication
     */
    public function setWebApplicationDomain($webApplicationDomain)
    {
        $this->webApplicationDomain = $webApplicationDomain;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getWebApplicationIncludeLayout()
    {
        return $this->webApplicationIncludeLayout;
    }

    /**
     * @param boolean $webApplicationIncludeLayout
     * @return WebApplication
     */
    public function setWebApplicationIncludeLayout($webApplicationIncludeLayout)
    {
        $this->webApplicationIncludeLayout = $webApplicationIncludeLayout;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getWebApplicationIncludeContent()
    {
        return $this->webApplicationIncludeContent;
    }

    /**
     * @param boolean $webApplicationIncludeContent
     * @return WebApplication
     */
    public function setWebApplicationIncludeContent($webApplicationIncludeContent)
    {
        $this->webApplicationIncludeContent = $webApplicationIncludeContent;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getWebApplicationHasIntegration()
    {
        return $this->webApplicationHasIntegration;
    }

    /**
     * @param boolean $webApplicationHasIntegration
     * @return WebApplication
     */
    public function setWebApplicationHasIntegration($webApplicationHasIntegration)
    {
        $this->webApplicationHasIntegration = $webApplicationHasIntegration;
        return $this;
    }

    /**
     * @return string
     */
    public function getWebApplicationDescription()
    {
        return $this->webApplicationDescription;
    }

    /**
     * @param string $webApplicationDescription
     * @return WebApplication
     */
    public function setWebApplicationDescription($webApplicationDescription)
    {
        $this->webApplicationDescription = $webApplicationDescription;
        return $this;
    }
}

