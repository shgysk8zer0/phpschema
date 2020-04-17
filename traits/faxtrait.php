<?php
namespace shgysk8zer0\PHPSchema\Traits;

trait FaxTrait
{
	private $_faxNumber = null;

	public function getFaxNumber():? string
	{
		return $this->_faxNumber;
	}

	public function setFaxNumber(?string $val): void
	{
		$this->_faxNumber = $val;
	}

	protected function _faxJSON(): array
	{
		return ['faxNumber' => $this->getFaxNumber()];
	}
}
