<?php
namespace shgysk8zer0\PHPSchema;
use \shgysk8zer0\PHPSchema\Interfaces\{OfferInterface, ItemAvailabilityInterface};
use \shgysk8zer0\PHPSchema\Traits\{DateTimeTrait, PriceSpecificationTrait};
use \DateTimeInterface;

class Offer extends Intangible implements OfferInterface
{
	use DateTimeTrait;
	use PriceSpecificationTrait;

	public const TYPE = 'Offer';

	private $_availablity = null;

	private $_price = 0;

	private $_price_currency = null;

	private $_validFrom = null;

	private $_validThrough = null;

	public function __construct(?object $data = null)
	{
		parent::__construct($data);
		if (isset($data)) {
			$this->setFromData($data);
		} else {
			$this->setAvailability(new InStock());
		}
	}

	public function jsonSerialize(): array
	{
		return array_merge(
			parent::jsonSerialize(),
			[
				'availability'       => $this->getAvailability(),
				'price'              => $this->getPrice(),
				'priceCurrency'      => $this->getPriceCurrency(),
				'priceSpecification' => $this->getPriceSpecification(),
				'validFrom'          => $this->getValidFromAsString(),
				'validThrough'       => $this->getValidThroughAsString(),
			]
		);
	}

	public function getAvailability():? ItemAvailabilityInterface
	{
		return $this->_availability;
	}

	public function setAvailability(?ItemAvailabilityInterface $val): void
	{
		$this->_availability = $val;
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

	public function getValidFrom():? DateTimeInterface
	{
		return $this->_validFrom;
	}

	public function getValidFromAsString():? string
	{
		return $this->_stringifyDate($this->getValidFrom());
	}

	public function setValidFrom(?DateTimeInterface $val): void
	{
		$this->_validFrom = $val;
	}

	public function getValidThrough():? DateTimeInterface
	{
		return $this->_validThrough;
	}

	public function getValidThroughAsString():? string
	{
		return $this->_stringifyDate($this->getValidThrough());
	}

	public function setValidThrough(?DateTimeInterface $val): void
	{
		$this->_validThrough = $val;
	}
}
