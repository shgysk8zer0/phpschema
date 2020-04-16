<?php
namespace shgysk8zer0\PHPSchema\Interfaces;

use \DateTimeInterface;

interface PriceSpecificationInterface extends StructuredValueInterface
{
	public function getEligibleQuantity():? QuantitativeValueInterface;

	public function setEligibleQuantity(?QuantitativeValueInterface $val): void;

	public function getMaxPrice():? float;

	public function setMaxPrice(?float $val): void;

	public function getMinPrice():? float;

	public function setMinPrice(?float $val): void;

	public function getPrice():? float;

	public function setPrice(?float $val): void;

	public function getPriceCurrency():? string;

	public function setPriceCurrency(?string $val): void;

	public function getValidFrom():? DateTimeInterface;

	public function getValidFromAsString():? string;

	public function setValidFrom(?DateTimeInterface $val): void;

	public function getValidThrough():? DateTimeInterface;

	public function getValidThroughAsString():? string;

	public function setValidThrough(?DateTimeInterface $val): void;

	public function getValueAddedTaxIncluded():? bool;

	public function setValueAddedTaxIncluded(?bool $val): void;
}
