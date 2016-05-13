<?php namespace controllers;
    
    class Router
    {
    	private $root;
    	public function __construct($page)
    	{
    		$this->root = 'views/' . $page . '.php';
            if(file_exists($this->root))
            {
            	require_once($this->root);
            }
            else
            {
            	require_once('index.php');
            }
    	}
    }
 ?>