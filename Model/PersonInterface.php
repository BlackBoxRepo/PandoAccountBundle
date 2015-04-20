<?php
namespace BlackBoxCode\Pando\Bundle\AccountBundle\Model;

interface PersonInterface extends \BlackBoxCode\Pando\Bundle\PersonBundle\Model\PersonInterface
{
    /**
     * @return AccountInterface
     */
    public function getAccount();

    /**
     * @param AccountInterface $account
     * @return $this
     */
    public function setAccount(AccountInterface $account);
}
