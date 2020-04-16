<?php
namespace shgysk8zer0\PHPSchema;
use \shgysk8zer0\PHPSchema\Abstracts\{AbstractItemAvailability};
use \shgysk8zer0\PHPSchema\Interfaces\{ItemAvailabilityInterface};
use \InvalidArgumentException;

class ItemAvailability extends AbstractItemAvailability implements ItemAvailabilityInterface
{
	public const STATUS = 'InStock';

	private $_value = null;

	public function __construct(string $type = self::STATUS)
	{
		if (is_null($type)) {
			$type = $this::STATUS;
		}
		$val = sprintf('%s::%s', __CLASS__, $type);

		if (defined($val)) {
			$this->_value = constant($val);
		} else {
			throw new InvalidArgumentException(sprintf('Invalid Item Availability: %s', $type));
		}
	}

	public function __debugInfo(): array
	{
		return [
			'status' => $this->getStatus(),
			'value'  => $this->getValue(),
		];
	}

	public function __toString(): string
	{
		return $this->getStatus();
	}

	public function jsonSerialize(): string
	{
		return $this->getStatus();
	}

	public function getValue():? string
	{
		return $this->_value;
	}

	public function getStatus():? string
	{
		return $this::STATUS;
	}
}
