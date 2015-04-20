<?php
namespace BlackBoxCode\Pando\Bundle\AccountBundle\Model;

use Doctrine\ORM\Mapping as ORM;

trait PersonTrait
{
    /**
     * @var AccountInterface
     *
     * @ORM\OneToOne(targetEntity="Account", mappedBy="person")
     */
    private $account;
    
    /**
     * {@inheritdoc}
     */
    public function getAccount()
    {
        return $this->account;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setAccount(AccountInterface $account)
    {
        $this->account = $account;
        
        return $this;
    }
}
