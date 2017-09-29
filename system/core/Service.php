<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CI_Service {
    /**
     * Class constructor
     *
     * @return	void
     */
    public function __construct()
    {
        log_message('info', 'Service Class Initialized');
    }

    /**
     * __get magic
     *
     * Allows service to access CI's loaded classes using the same
     * syntax as controllers.
     *
     * @param	string	$key
     */
    public function __get($key)
    {
        return get_instance()->$key;
    }


}
