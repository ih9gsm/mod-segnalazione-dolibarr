<?php
/**
 * Placeholder class for Segnalazione objects.
 */
class Segnalazione
{
    /** @var int ID */
    public $id;
    /** @var string Title */
    public $title;

    /**
     * Constructor
     * @param int $id Optional identifier
     */
    public function __construct($id = 0)
    {
        $this->id = $id;
    }
}
