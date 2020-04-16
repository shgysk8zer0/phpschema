<?php
namespace shgysk8zer0\PHPSchema;
use \shgysk8zer0\PHPSchema\Interfaces\{OfferInterface};

class Offer extends Intangible implements OfferInterface
{
	public const TYPE = 'Offer';

	private $_price = 0;

	private $_price_currency = null;

	public function jsonSerialize(): array
	{
		return [
			'price'         => $this->getPrice(),
			'priceCurrency' => $this->getPriceCurrency(),
		];
	}

	public function getPrice(): float
	{
		return $this->_price;
	}

	public function setPrice(?float $val): void
	{
		$this->_price = $val;
	}

	public function getPriceCurrency():? string
	{
		return $this->_price_currency;
	}

	public function setPriceCurrency(?string $val): void
	{
		$this->_price_currency = $val;
	}
}
