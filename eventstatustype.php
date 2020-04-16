<?php
namespace shgysk8zer0\PHPSchema;
use \shgysk8zer0\PHPSchema\Abstracts\{AbstractEventStatusType};
use \shgysk8zer0\PHPSchema\Interfaces\{EventStatusTypeInterface};
use \InvalidArgumentException;

class EventStatusType extends AbstractEventStatusType implements EventStatusTypeInterface
{
	public const STATUS = null;

	private $_value = null;

	public function __construct(string $type = self::STATUS)
	{
		if (is_null($type)) {
			$logger = new \shgysk8zer0\PHPAPI\SAPILogger();
			$type = $this::STATUS;
			$logger->debug('Setting status to {status}{lf}$this::STATUS: {this_status}{lf}self::STATUS: {self_status}', [
				'status'      => $type,
				'this_status' => $this::STATUS,
				'self_status' => self::STATUS,
				'lf'          => PHP_EOL,
			]);
		}
		$val = sprintf('%s::%s', __CLASS__, $type);
		if (defined($val)) {
			$this->_value = constant($val);
		} else {
			throw new InvalidArgumentException(sprintf('Invalid Event Status: %s', $type));
		}
	}

	public function __toString(): string
	{
		return $this->getStatus();
	}

	public function jsonSerialize(): string
	{
		return "{$this}";
	}

	public function getValue():? string
	{
		return $this->_value;
	}

	public function getStatus(): string
	{
		return $this::STATUS;
	}
}
