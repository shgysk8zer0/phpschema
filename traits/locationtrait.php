<?php
namespace shgysk8zer0\PHPSchema\Traits;

use \shgysk8zer0\PHPSchema\Interfaces\{EventLocationInterface};

trait LocationTrait
{
	private $_location = null;

	public function getLocation():? EventLocationInterface
	{
		return $this->_location;
	}

	public function setLocation(?EventLocationInterface $val): void
	{
		$this->_location = $val;
	}
}
