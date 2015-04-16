<?php
namespace BlackBoxCode\Pando\Bundle\AccountBundle\Model;

use Doctrine\ORM\Mapping as ORM;

trait PersonTrait
{
    /**
     * @ORM\OneToOne(targetEntity="Account", mappedBy="person")
     */
    private $account;
}
