<?php
namespace Budget\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Stdlib\Hydrator;

/**
 * Product
 *
 * @ORM\Table(name="product", indexes={@ORM\Index(name="fk_product_site1_idx", columns={"site"}), @ORM\Index(name="fk_product_mobile_application1_idx", columns={"mobile_application"}), @ORM\Index(name="fk_product_web_application1_idx", columns={"web_application"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="Budget\Entity\Repository\ProductRepository")
 */
class Product
{
    /**
     * @var integer
     *
     * @ORM\Column(name="product_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $productId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="product_created_at", type="datetime", nullable=false)
     */
    private $productCreatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="product_updated_at", type="datetime", nullable=false)
     */
    private $productUpdatedAt;

    /**
     * @var Site
     *
     * @ORM\ManyToOne(targetEntity="Site")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="site", referencedColumnName="site_id")
     * })
     */
    private $site;

    /**
     * @var MobileApplication
     *
     * @ORM\ManyToOne(targetEntity="MobileApplication")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mobile_application", referencedColumnName="mobile_application_id")
     * })
     */
    private $mobileApplication;

    /**
     * @var WebApplication
     *
     * @ORM\ManyToOne(targetEntity="WebApplication")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="web_application", referencedColumnName="web_application_id")
     * })
     */
    private $webApplication;

    public function __construct(array $options = array())
    {
        (new Hydrator\ClassMethods())->hydrate($options, $this);
        $this->productCreatedAt = new \DateTime("now");
        $this->productUpdatedAt = new \DateTime("now");
    }

    /**
     * @return int
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param int $productId
     * @return Product
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getProductCreatedAt()
    {
        return $this->productCreatedAt;
    }

    /**
     * @return \DateTime
     */
    public function getProductUpdatedAt()
    {
        return $this->productUpdatedAt;
    }

    /**
     * @ORM\PreUpdate
     */
    public function setProductUpdatedAt()
    {
        $this->productUpdatedAt = new \DateTime("now");
        return $this;
    }

    /**
     * @return Site
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * @param Site $site
     * @return Product
     */
    public function setSite($site)
    {
        $this->site = $site;
        return $this;
    }

    /**
     * @return MobileApplication
     */
    public function getMobileApplication()
    {
        return $this->mobileApplication;
    }

    /**
     * @param MobileApplication $mobileApplication
     * @return Product
     */
    public function setMobileApplication($mobileApplication)
    {
        $this->mobileApplication = $mobileApplication;
        return $this;
    }

    /**
     * @return WebApplication
     */
    public function getWebApplication()
    {
        return $this->webApplication;
    }

    /**
     * @param WebApplication $webApplication
     * @return Product
     */
    public function setWebApplication($webApplication)
    {
        $this->webApplication = $webApplication;
        return $this;
    }
}

