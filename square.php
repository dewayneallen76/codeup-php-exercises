<?php 
require_once('rectangle.php');

class Square extends Rectangle 
{
	public function __construct($height) 
	{
		parent::__construct($height,$height);
	}

	public function perimeter() 
	{
		return ($this->height + $this->height) + ($this->width + $this->width);
	}

	public function area() 
	{
		return $this->height * $this->width;
	}
}



 ?>