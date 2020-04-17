<?php
namespace shgysk8zer0\PHPSchema;
/**
 * @SEE https://schema.org/MonetaryAmount
 * Interface for Montary Values (currency + value)
 */
use \shgysk8zer0\PHPSchema\Interfaces\{MonetaryAmountInterface};

class MonetaryAmount extends StructuredValue implements MonetaryAmountInterface
{
	public const TYPE = 'MonetaryAmount';

	private $_currency = 'USD';

	private $_value = 0;

	private $_currencySymbol = '$';

	public function jsonSerialize(): array
	{
		return array_merge(
			parent::jsonSerialize(),
			[
				'currency'       => $this->getCurrency(),
				'value'          => $this->getValue(),
				'currencySymbol' => $this->getCurrencySymbol(),
			]
		);
	}
	public function getCurrency(): string
	{
		return $this->_currency;
	}

	public function setCurrency(string $val): void
	{
		$this->_currency = $val;
	}

	public function getValue(): float
	{
		return $this->_value;
	}

	public function setValue(float $val): void
	{
		$this->_value = $val;
	}

	public function getCurrencySymbol(): string
	{
		return $this->_currencySymbol;
	}

	public function setCurrencySymbol(?string $val): void
	{
		$this->_currencySymbol = $val;
	}
}
