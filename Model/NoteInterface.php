<?php
namespace BlackBoxCode\Pando\AccountBundle\Model;

interface NoteInterface extends \BlackBoxCode\Pando\NoteBundle\Model\NoteInterface
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
