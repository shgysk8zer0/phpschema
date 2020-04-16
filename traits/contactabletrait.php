<?php
namespace shgysk8zer0\PHPSchema\Traits;

trait ContactableTrait
{
	use TelephoneTrait;
	use EmailTrait;
	use AddressTrait;

	private $_faxNumber = null;

	public function getFaxNumber():? string
	{
		return $this->_faxNumber;
	}

	public function setFaxNumber(?string $val): void
	{
		$this->_faxNumber = $val;
	}
}
