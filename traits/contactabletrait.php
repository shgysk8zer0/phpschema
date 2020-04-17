<?php
namespace shgysk8zer0\PHPSchema\Traits;

trait ContactableTrait
{
	use AddressTrait;
	use EmailTrait;
	use FaxTrait;
	use TelephoneTrait;

	protected function _contactableJSON(): array
	{
		return array_merge(
			$this->_addressJSON(),
			$this->_emailJSON(),
			$this->_faxJSON(),
			$this->_telephoneJSON()
		);
	}
}
