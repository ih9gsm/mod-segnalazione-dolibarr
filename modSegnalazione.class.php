<?php
/**
 * Dolibarr Module Segnalazione
 */
include_once DOL_DOCUMENT_ROOT . '/core/modules/DolibarrModules.class.php';

class modSegnalazione extends DolibarrModules
{
    /**
     * Constructor. Define module name, number, family, description, etc.
     * @param \DoliDB $db Database handler
     */
    public function __construct($db)
    {
        global $langs, $conf;

        $this->db = $db;
        $this->numero      = 500000; // Unique ID > 100000 to avoid conflicts
        $this->rights_class = 'segnalazione';
        $this->family      = 'interface';
        $this->module_position = 500; // Gives some sort in list
        $this->name        = preg_replace('/^mod/i', '', get_class($this));
        $this->description = 'Minimal Segnalazione module';
        $this->version     = 'development';
        $this->const_name  = 'MAIN_MODULE_SEGNALAZIONE';
        $this->special     = 0;
        $this->picto       = 'generic';

        // Data directories to create when module is enabled
        $this->dirs = array('/segnalazione/temp');

        // Config pages
        $this->config_page_url = array('segnalazione_setup.php@segnalazione');

        // Dependencies
        $this->depends = array();
        $this->requiredby = array();
        $this->conflictwith = array();
        $this->langfiles = array('segnalazione@segnalazione');

        // Constants
        $this->const = array();

        // Rights
        $this->rights = array();
        $r = 0;
        $this->rights[$r][0] = 500001;
        $this->rights[$r][1] = 'Use Segnalazione module';
        $this->rights[$r][2] = 'r';
        $this->rights[$r][3] = 1; // Enable by default
    }

    /**
     * Init module. Called when enabling the module.
     * @param string $options Options
     * @return int
     */
    public function init($options='')
    {
        $sql = array();
        return $this->_init($sql, $options);
    }

    /**
     * Remove module. Called when disabling the module.
     * @param string $options Options
     * @return int
     */
    public function remove($options='')
    {
        $sql = array();
        return $this->_remove($sql, $options);
    }
}
