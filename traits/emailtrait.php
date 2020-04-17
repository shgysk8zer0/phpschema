<?php
namespace shgysk8zer0\PHPSchema\Traits;
use \InvalidArgumentException;
trait EmailTrait
{
	private $_email = null;

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
				throw new InvalidArgumentException('Expected a valid email address');
			}
		}
	}

	protected function _emailJSON(): array
	{
		return ['email' => $this->getEmail()];
	}
}
