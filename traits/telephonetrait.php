<?php
namespace shgysk8zer0\PHPSchema\Traits;

trait TelephoneTrait
{
	private $_telephone = null;

	final public function getTelephone():? string
	{
		return $this->_telephone;
	}

	final public function setTelephone(?string $val): void
	{
		$this->_telephone = $val;
	}
}
