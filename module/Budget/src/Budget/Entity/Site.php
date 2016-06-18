<?php
namespace Budget\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Stdlib\Hydrator;

/**
 * Site
 *
 * @ORM\Table(name="site")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="Budget\Entity\Repository\SiteRepository")
 */
class Site
{
    /**
     * @var integer
     *
     * @ORM\Column(name="site_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $siteId;

    /**
     * @var string
     *
     * @ORM\Column(name="site_name", type="string", length=255, nullable=false)
     */
    private $siteName;

    /**
     * @var integer
     *
     * @ORM\Column(name="site_number_of_pages", type="integer", nullable=false)
     */
    private $siteNumberOfPages;

    /**
     * @var boolean
     *
     * @ORM\Column(name="site_include_layout", type="boolean", nullable=false)
     */
    private $siteIncludeLayout;

    /**
     * @var boolean
     *
     * @ORM\Column(name="site_include_content", type="boolean", nullable=false)
     */
    private $siteIncludeContent;

    /**
     * @var boolean
     *
     * @ORM\Column(name="site_seo_optmization", type="boolean", nullable=false)
     */
    private $siteSeoOptmization;

    /**
     * @var boolean
     *
     * @ORM\Column(name="site_include_logo", type="boolean", nullable=false)
     */
    private $siteIncludeLogo;

    /**
     * @var string
     *
     * @ORM\Column(name="site_domain", type="string", length=100, nullable=false)
     */
    private $siteDomain;

    public function __construct(array $options = array())
    {
        (new Hydrator\ClassMethods())->hydrate($options, $this);
    }

    /**
     * @return int
     */
    public function getSiteId()
    {
        return $this->siteId;
    }

    /**
     * @param int $siteId
     * @return Site
     */
    public function setSiteId($siteId)
    {
        $this->siteId = $siteId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSiteName()
    {
        return $this->siteName;
    }

    /**
     * @param string $siteName
     * @return Site
     */
    public function setSiteName($siteName)
    {
        $this->siteName = $siteName;
        return $this;
    }

    /**
     * @return int
     */
    public function getSiteNumberOfPages()
    {
        return $this->siteNumberOfPages;
    }

    /**
     * @param int $siteNumberOfPages
     * @return Site
     */
    public function setSiteNumberOfPages($siteNumberOfPages)
    {
        $this->siteNumberOfPages = $siteNumberOfPages;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getSiteIncludeLayout()
    {
        return $this->siteIncludeLayout;
    }

    /**
     * @param boolean $siteIncludeLayout
     * @return Site
     */
    public function setSiteIncludeLayout($siteIncludeLayout)
    {
        $this->siteIncludeLayout = $siteIncludeLayout;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getSiteIncludeContent()
    {
        return $this->siteIncludeContent;
    }

    /**
     * @param boolean $siteIncludeContent
     * @return Site
     */
    public function setSiteIncludeContent($siteIncludeContent)
    {
        $this->siteIncludeContent = $siteIncludeContent;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getSiteSeoOptmization()
    {
        return $this->siteSeoOptmization;
    }

    /**
     * @param boolean $siteSeoOptmization
     * @return Site
     */
    public function setSiteSeoOptmization($siteSeoOptmization)
    {
        $this->siteSeoOptmization = $siteSeoOptmization;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getSiteIncludeLogo()
    {
        return $this->siteIncludeLogo;
    }

    /**
     * @param boolean $siteIncludeLogo
     * @return Site
     */
    public function setSiteIncludeLogo($siteIncludeLogo)
    {
        $this->siteIncludeLogo = $siteIncludeLogo;
        return $this;
    }

    /**
     * @return string
     */
    public function getSiteDomain()
    {
        return $this->siteDomain;
    }

    /**
     * @param string $siteDomain
     * @return Site
     */
    public function setSiteDomain($siteDomain)
    {
        $this->siteDomain = $siteDomain;
        return $this;
    }
}

