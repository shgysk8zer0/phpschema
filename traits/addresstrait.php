<?php
namespace shgysk8zer0\PHPSchema\Traits;
use \shgysk8zer0\PHPSchema\Interfaces\PostalAddressInterface;

trait AddressTrait
{
	private $_address = null;

	public function getAddress():? PostalAddressInterface
	{
		return $this->_address;
	}

	public function setAddress(?PostalAddressInterface $val): void
	{
		$this->_address = $val;
	}

	protected function _addressJSON(): array
	{
		return ['address' => $this->getAddress()];
	}
}
