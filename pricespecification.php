<?php
namespace shgysk8zer0\PHPSchema;

use \shgysk8zer0\PHPSchema\Interfaces\{
	QuantitativeValueInterface,
	PriceSpecificationInterface,
};

use \DateTimeInterface;

class PriceSpecification extends StructuredValue implements PriceSpecificationInterface
{
	public const TYPE = 'PriceSpecification';

	private $_eligibleQuantity = null;

	private $_maxPrice = null;

	private $_minPrice = null;

	private $_price = null;

	private $_priceCurrency = null;

	private $_validFrom = null;

	private $_validThrough = null;

	private $_valuAddedTaxIncluded = null;

	public function jsonSerialize(): array
	{
		return array_merge(
			parent::jsonSerialize(),
			[
				'eligibleQuantity'      => $this->getEligibleQuantity(),
				'maxPrice'              => $this->getMaxPrice(),
				'minPrice'              => $this->getMinPrice(),
				'price'                 => $this->getPrice(),
				'priceCurrency'         => $this->getPriceCurrency(),
				'validFrom'             => $this->getValidFromAsString(),
				'validThrough'          => $this->getValidThroughAsString(),
				'valueAddedTaxIncluded' => $this->getValueAddedTaxIncluded(),
			]
		);
	}

	public function getEligibleQuantity():? QuantitativeValueInterface
	{
		return $this->_eligibleQuantity;
	}

	public function setEligibleQuantity(?QuantitativeValueInterface $val): void
	{
		$this->_eligibleQuantity = $val;
	}

	public function getMaxPrice():? float
	{
		return $this->_maxPrice;
	}

	public function setMaxPrice(?float $val): void
	{
		$this->_maxPrice = $val;
	}

	public function getMinPrice():? float
	{
		return $this->_minPrice;
	}

	public function setMinPrice(?float $val): void
	{
		$this->_minPrice = $val;
	}

	public function getPrice():? float
	{
		return $this->_price;
	}

	public function setPrice(?float $val): void
	{
		$this->_price = $val;
	}

	public function getPriceCurrency():? string
	{
		return $this->_priceCurrency;
	}

	public function setPriceCurrency(?string $val): void
	{
		$this->_priceCurrency = $val;
	}

	public function getValidFrom():? DateTimeInterface
	{
		return $this->_validFrom;
	}

	public function getValidFromAsString():? string
	{
		if (isset($this->_validFrom)) {
			return $this->getValidFrom()->format(DateTimeInterface::W3C);
		} else {
			return null;
		}
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
		if (isset($this->_validThrough)) {
			return $this->getValidThrough()->format(DateTimeInterface::W3C);
		} else {
			return null;
		}
	}

	public function setValidThrough(?DateTimeInterface $val): void
	{
		$this->_validThrough = $val;
	}

	public function getValueAddedTaxIncluded():? bool
	{
		return $this->_valuAddedTaxIncluded;
	}

	public function setValueAddedTaxIncluded(?bool $val): void
	{
		$this->_valuAddedTaxIncluded = $val;
	}
}
