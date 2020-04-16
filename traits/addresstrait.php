<?php
namespace shgysk8zer0\PHPSchema\Traits;
use \shgysk8zer0\PHPSchema\Interfaces\PostalAddressInterface;

trait AddressTrait
{
	private $_address = null;

	final public function getAddress():? PostalAddressInterface
	{
		return $this->_address;
	}

	final public function setAddress(?PostalAddressInterface $val): void
	{
		$this->_address = $val;
	}
}
