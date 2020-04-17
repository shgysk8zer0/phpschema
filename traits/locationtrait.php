<?php
namespace shgysk8zer0\PHPSchema\Traits;

use \shgysk8zer0\PHPSchema\Interfaces\{PlaceInterface};

trait LocationTrait
{
	private $_location = null;

	public function getLocation():? PlaceInterface
	{
		return $this->_location;
	}

	public function setLocation(?PlaceInterface $val): void
	{
		$this->_location = $val;
	}
}
