<?php
namespace BlackBoxCode\Pando\Bundle\AccountBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\BaseTrait;
use Doctrine\ORM\Mapping as ORM;

trait AccountTrait
{
    use BaseTrait;

    /**
     * @ORM\Column(type="integer", options={"unsigned":true})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $number;

    /**
     * @ORM\ManyToMany(targetEntity="Note", inversedBy="account")
     * @ORM\JoinTable(
     *     joinColumns={@ORM\JoinColumn(nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(nullable=false, unique=true)}
     * )
     */
    private $notes;

    /**
     * @ORM\ManyToMany(targetEntity="Person", inversedBy="accounts")
     * @ORM\JoinTable(
     *     joinColumns={@ORM\JoinColumn(nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(nullable=false)}
     * )
     */
    private $persons;
}
