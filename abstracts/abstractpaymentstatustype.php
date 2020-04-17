<?php
namespace shgysk8zer0\PHPSchema\Abstracts;

use \shgysk8zer0\PHPSchema\Interfaces\{PaymentStatusTypeInterface};

abstract class AbstractPaymentStatusType implements PaymentStatusTypeInterface
{
	public const PaymentAutomaticallyApplied = 'https://schema.org/PaymentAutomaticallyApplied';

	public const PaymentComplete             = 'https://schema.org/PaymentComplete';

	public const PaymentDeclined             = 'https://schema.org/PaymentDeclined';

	public const PaymentDue                  = 'https://schema.org/PaymentDue';

	public const PaymentPastDue              = 'https://schema.org/PaymentDue';

	public const STATUS                      = null;

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
			throw new InvalidArgumentException(sprintf('Invalid Event Status: %s', $type));
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
		return "{$this}";
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
