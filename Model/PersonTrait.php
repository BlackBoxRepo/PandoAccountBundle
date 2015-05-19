<?php
namespace BlackBoxCode\Pando\AccountBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

trait PersonTrait
{
    /**
     * @ORM\ManyToMany(targetEntity="Account", mappedBy="persons")
     */
    private $accounts;

    /**
     * {@inheritdoc}
     */
    public function getAccounts()
    {
        if (is_null($this->accounts)) $this->accounts = new ArrayCollection();

        return $this->accounts;
    }

    /**
     * {@inheritdoc}
     */
    public function addAccount(AccountInterface $account)
    {
        if (is_null($this->accounts)) $this->accounts = new ArrayCollection();
        $this->accounts->add($account);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeAccount(AccountInterface $account)
    {
        if (is_null($this->accounts)) $this->accounts = new ArrayCollection();
        $this->accounts->removeElement($account);
    }
}
