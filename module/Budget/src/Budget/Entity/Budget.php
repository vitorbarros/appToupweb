<?php
namespace Budget\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Stdlib\Hydrator;
use People\Entity\Client;

/**
 * Budget
 *
 * @ORM\Table(name="budget", indexes={@ORM\Index(name="fk_budget_product1_idx", columns={"product"}), @ORM\Index(name="fk_budget_client1_idx", columns={"client"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="Budget\Entity\Repository\BudgetRepository")
 */
class Budget
{
    /**
     * @var integer
     *
     * @ORM\Column(name="budget_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $budgetId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="budget_created_at", type="datetime", nullable=false)
     */
    private $budgetCreatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="budget_updated_at", type="datetime", nullable=false)
     */
    private $budgetUpdatedAt;

    /**
     * @var float
     *
     * @ORM\Column(name="budget_price", type="float", precision=10, scale=0, nullable=true)
     */
    private $budgetPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="budget_estimate_hours", type="string", length=255, nullable=true)
     */
    private $budgetEstimateHours;

    /**
     * @var boolean
     *
     * @ORM\Column(name="budget_email_sent_auto", type="boolean", nullable=false)
     */
    private $budgetEmailSentAuto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="budget_email_sent_by_adm", type="boolean", nullable=false)
     */
    private $budgetEmailSentByAdm;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="budget_email_sent_by_adm_at", type="datetime", nullable=true)
     */
    private $budgetEmailSentByAdmAt;

    /**
     * @var Product
     *
     * @ORM\ManyToOne(targetEntity="Product")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product", referencedColumnName="product_id")
     * })
     */
    private $product;

    /**
     * @var Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client", referencedColumnName="client_id")
     * })
     */
    private $client;

    public function __construct(array $options = array())
    {
        (new Hydrator\ClassMethods())->hydrate($options, $this);
        $this->budgetCreatedAt = new \DateTime("now");
        $this->budgetUpdatedAt = new \DateTime("now");
    }

    /**
     * @return int
     */
    public function getBudgetId()
    {
        return $this->budgetId;
    }

    /**
     * @param int $budgetId
     * @return Budget
     */
    public function setBudgetId($budgetId)
    {
        $this->budgetId = $budgetId;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBudgetCreatedAt()
    {
        return $this->budgetCreatedAt;
    }

    /**
     * @return \DateTime
     */
    public function getBudgetUpdatedAt()
    {
        return $this->budgetUpdatedAt;
    }

    /**
     * @ORM\PreUpdate
     */
    public function setBudgetUpdatedAt()
    {
        $this->budgetUpdatedAt = new \DateTime("now");
        return $this;
    }

    /**
     * @return float
     */
    public function getBudgetPrice()
    {
        return $this->budgetPrice;
    }

    /**
     * @param float $budgetPrice
     * @return Budget
     */
    public function setBudgetPrice($budgetPrice)
    {
        $this->budgetPrice = $budgetPrice;
        return $this;
    }

    /**
     * @return string
     */
    public function getBudgetEstimateHours()
    {
        return $this->budgetEstimateHours;
    }

    /**
     * @param string $budgetEstimateHours
     * @return Budget
     */
    public function setBudgetEstimateHours($budgetEstimateHours)
    {
        $this->budgetEstimateHours = $budgetEstimateHours;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getBudgetEmailSentAuto()
    {
        return $this->budgetEmailSentAuto;
    }

    /**
     * @param boolean $budgetEmailSentAuto
     * @return Budget
     */
    public function setBudgetEmailSentAuto($budgetEmailSentAuto)
    {
        $this->budgetEmailSentAuto = $budgetEmailSentAuto;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getBudgetEmailSentByAdm()
    {
        return $this->budgetEmailSentByAdm;
    }

    /**
     * @param boolean $budgetEmailSentByAdm
     * @return Budget
     */
    public function setBudgetEmailSentByAdm($budgetEmailSentByAdm)
    {
        $this->budgetEmailSentByAdm = $budgetEmailSentByAdm;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBudgetEmailSentByAdmAt()
    {
        return $this->budgetEmailSentByAdmAt;
    }

    /**
     * @return Budget
     */
    public function setBudgetEmailSentByAdmAt()
    {
        $this->budgetEmailSentByAdmAt = new \DateTime("now");
        return $this;
    }

    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param Product $product
     * @return Budget
     */
    public function setProduct($product)
    {
        $this->product = $product;
        return $this;
    }

    /**
     * @return Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param Client $client
     * @return Budget
     */
    public function setClient($client)
    {
        $this->client = $client;
        return $this;
    }
}

