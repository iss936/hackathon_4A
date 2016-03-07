<?php
class admin
{
    
    public $is_connected = false;

    public function __construct()
    {
    }
    
    public function listAction($args)
    {
		$view = new view("admin","list");
    }
    
}