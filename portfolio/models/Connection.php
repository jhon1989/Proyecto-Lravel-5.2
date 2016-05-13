<?php namespace models;

   class Connection
   {
   	   private $connection;
   	   private $conn = array(
   	   	  'host'=>'localhost',
   	      'user'=>'root', 
   	      'password'='',
   	      'dbName'='portfoli');

   	   public function __construct()
   	   {
   	   	 $this->connection = new \mysqli(
   	   	 	$this->conn['host'], 
   	   	 	$this->conn['user'], 
   	   	 	$this->conn['password']);
   	   }

   	    public function query($sql)
   	    {
           $this->connection->query(sql);
   	    }

   	    public function __destruct()
   	    {
   	    	$this->connection->close();
   	    	unset(this->conn);
   	    	unset($this->conn)
   	    }

   }

 ?>