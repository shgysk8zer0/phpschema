<?php
namespace shgysk8zer0\PHPSchema\Traits;
use \shgysk8zer0\PHPSchema\Interfaces\PostalAddressInterface;
use \InvalidArgumentException;

trait ContactableTrait
{
	private $_address = null;

	private $_email = null;

	private $_telephone;

	private $_faxNumber = null;

	final public function getAddress():? PostalAddressInterface
	{
		return $this->_address;
	}

	final public function setAddress(?PostalAddressInterface $val): void
	{
		$this->_address = $val;
	}

	final public function getEmail():? string
	{
		return $this->_email;
	}

	final public function setEmail(?string $val): void
	{
		if (isset($val)) {
			if (filter_var($val, FILTER_VALIDATE_EMAIL)) {
				$this->_email = strtolower($val);
			} else {
				throw new \InvalidArgumentException('Expected a valid email address');
			}
		}
	}

	public function getFaxNumber():? string
	{
		return $this->_faxNumber;
	}

	public function setFaxNumber(?string $val): void
	{
		$this->_faxNumber = $val;
	}

	final public function getTelephone():? string
	{
		return $this->_telephone;
	}

	final public function setTelephone(?string $val): void
	{
		$this->_telephone = $val;
	}
}
