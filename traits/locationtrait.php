<?php
namespace shgysk8zer0\PHPSchema\Traits;

use \shgysk8zer0\PHPSchema\Interfaces\{PlaceInterface};

trait LocationTrait
{
	private $_location = null;

	final public function getLocation():? PlaceInterface
	{
		return $this->_location;
	}

	final public function setLocation(?PlaceInterface $val): void
	{
		$this->_location = $val;
	}
}
