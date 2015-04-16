<?php
namespace BlackBoxCode\Pando\Bundle\AccountBundle\Model;

use BlackBoxCode\Pando\Bundle\NoteBundle\Model\NoteTypeInterface as NoteBundleNoteTypeInterface;

interface NoteTypeInterface extends NoteBundleNoteTypeInterface
{
    const ACCOUNT = 'Account';
}
