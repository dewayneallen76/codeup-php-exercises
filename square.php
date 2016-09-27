<?php 

class Square extends Rectangle 
{
	public function perimeter() 
	{
		return ($this->height + $this->width) + ($this->height + $this->width);
	}
}


 ?>