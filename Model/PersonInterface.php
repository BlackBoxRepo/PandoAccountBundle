<?php
namespace BlackBoxCode\Pando\Bundle\AccountBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;

interface PersonInterface extends \BlackBoxCode\Pando\Bundle\PersonBundle\Model\PersonInterface
{
    /**
     * @return ArrayCollection<AccountInterface>
     */
    public function getAccounts();

    /**
     * @param AccountInterface $account
     *
     * @return $this
     */
    public function addAccount(AccountInterface $account);

    /**
     * @param AccountInterface $account
     */
    public function removeAccount(AccountInterface $account);
}
