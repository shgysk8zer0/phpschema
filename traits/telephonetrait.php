<?php
namespace shgysk8zer0\PHPSchema\Traits;

trait TelephoneTrait
{
	private $_telephone = null;

	public function getTelephone():? string
	{
		return $this->_telephone;
	}

	public function setTelephone(?string $val): void
	{
		$this->_telephone = $val;
	}

	protected function _telephoneJSON(): array
	{
		return ['telephone' => $this->getTelephone()];
	}
}
