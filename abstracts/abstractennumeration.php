<?php
namespace shgysk8zer0\PHPSchema\Abstracts;
use \InvalidArgumentException;

abstract class AbstractEnnumerable
{
	public const ALLOWED_VALUES = [];

	protected $_value = null;

	public function __construct(string $val)
	{
		if (in_array($val, $this::ALLOWED_VALUES)) {
			$this->_value = $val;
		} else {
			throw new InvalidArgumentException(sprintf('"%s" is not in the list of allowd values for %s', $val, get_class($this)));
		}
	}

	public function getValue():? string
	{
		return $this->_value;
	}
}
