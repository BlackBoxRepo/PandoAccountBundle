<?php
namespace BlackBoxCode\Pando\Bundle\AccountBundle\Model;

use Doctrine\ORM\Mapping as ORM;

trait NoteTrait
{
    /**
     * @ORM\ManyToMany(targetEntity="Account", mappedBy="notes")
     */
    private $account;
}
