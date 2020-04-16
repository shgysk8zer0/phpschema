<?php
namespace shgysk8zer0\PHPSchema;
use \shgysk8zer0\PHPSchema\Abstracts\{AbstractEventStatusType};
use \shgysk8zer0\PHPSchema\Interfaces\{EventStatusTypeInterface};
use \InvalidArgumentException;
use \JsonSerializable;

final class EventStatusType extends AbstractEventStatusType implements EventStatusTypeInterface, JsonSerializable
{
	private $_value = null;

	public function __construct(string $type)
	{
		$val = sprintf('%s::%s', __CLASS__, $type);
		if (defined($val)) {
			$this->_value = constant($val);
		} else {
			throw new InvalidArgumentException(sprintf('Invalid Event Status: %s', $type));
		}
	}

	public function __toString(): string
	{
		return $this->getValue() ?? 'undefined';
	}

	public function jsonSerialize(): string
	{
		return "{$this}";
	}

	public function getValue():? string
	{
		return $this->_value;
	}
}
