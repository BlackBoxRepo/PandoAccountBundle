<?php
namespace BlackBoxCode\Pando\Bundle\AccountBundle\Model;

interface NoteInterface extends \BlackBoxCode\Pando\Bundle\NoteBundle\Model\NoteInterface
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
