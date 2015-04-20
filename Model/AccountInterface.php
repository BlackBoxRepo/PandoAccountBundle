<?php
namespace BlackBoxCode\Pando\Bundle\AccountBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\IdInterface;
use Doctrine\Common\Collections\ArrayCollection;

interface AccountInterface extends IdInterface
{
    /**
     * @return integer
     */
    public function getNumber();

    /**
     * @param integer $number
     * @return $this
     */
    public function setNumber($number);

    /**
     * @return ArrayCollection<NoteInterface>
     */
    public function getNotes();

    /**
     * @param NoteInterface $note
     * @return $this
     */
    public function addNote(NoteInterface $note);

    /**
     * @param NoteInterface $note
     */
    public function removeNote(NoteInterface $note);

    /**
     * @return ArrayCollection<PersonInterface>
     */
    public function getPersons();

    /**
     * @param PersonInterface $person
     * @return $this
     */
    public function addPerson(PersonInterface $person);

    /**
     * @param PersonInterface $person
     */
    public function removePerson(PersonInterface $person);
}
