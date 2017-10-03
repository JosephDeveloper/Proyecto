<?php
/**
 *
 */
class Index_model
{
    private $data = array();

    public function __construct()
    {
        $this->data = array("PHP", "C#", "HTML");
    }

    public function datosPersonales()
    {
        return $this->data;
    }
}
