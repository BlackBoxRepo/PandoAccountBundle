<?php
namespace BlackBoxCode\Pando\Bundle\AccountBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\IdTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
trait AccountTrait
{
    use IdTrait;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", options={"unsigned":true})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $number;

    /**
     * @var ArrayCollection<NoteInterface>
     *
     * @ORM\ManyToMany(targetEntity="Note", inversedBy="accounts")
     * @ORM\JoinTable(
     *     joinColumns={@ORM\JoinColumn(nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(nullable=false, unique=true)}
     * )
     */
    private $notes;

    /**
     * @var ArrayCollection<PersonInterface>
     *
     * @ORM\ManyToMany(targetEntity="Person", inversedBy="accounts")
     * @ORM\JoinTable(
     *     joinColumns={@ORM\JoinColumn(nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(nullable=false)}
     * )
     */
    private $persons;

    /**
     * {@inheritdoc}
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * {@inheritdoc}
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getNotes()
    {
        if (is_null($this->notes)) $this->notes = new ArrayCollection();
    
        return $this->notes;
    }
    
    /**
     * {@inheritdoc}
     */
    public function addNote(NoteInterface $note)
    {
        if (is_null($this->notes)) $this->notes = new ArrayCollection();
        $this->notes->add($note);
    
        return $this;
    }
    
    /**
     * {@inheritdoc}
     */
    public function removeNote(NoteInterface $note)
    {
        if (is_null($this->notes)) $this->notes = new ArrayCollection();
        $this->notes->removeElement($note);
    }

    /**
     * {@inheritdoc}
     */
    public function getPersons()
    {
        if (is_null($this->persons)) $this->persons = new ArrayCollection();

        return $this->persons;
    }

    /**
     * {@inheritdoc}
     */
    public function addPerson(PersonInterface $person)
    {
        if (is_null($this->persons)) $this->persons = new ArrayCollection();
        $this->persons->add($person);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removePerson(PersonInterface $person)
    {
        if (is_null($this->persons)) $this->persons = new ArrayCollection();
        $this->persons->removeElement($person);
    }
}
