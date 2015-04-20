<?php
namespace BlackBoxCode\Pando\Bundle\AccountBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

trait NoteTrait
{
    /**
     * @var ArrayCollection<AccountInterface>
     *
     * @ORM\ManyToMany(targetEntity="Account", mappedBy="notes")
     */
    private $accounts;

    /**
     * {@inheritdoc}
     */
    public function getAccount()
    {
        if (is_null($this->accounts)) $this->accounts = new ArrayCollection();
        return $this->accounts->first() ?: null;
    }

    /**
     * {@inheritdoc}
     */
    public function setAccount(AccountInterface $account)
    {
        if (is_null($this->accounts)) $this->accounts = new ArrayCollection();
        $this->accounts->clear();
        $this->accounts->add($account);

        return $this;
    }
}
