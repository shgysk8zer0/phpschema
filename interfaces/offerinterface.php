<?php
namespace shgysk8zer0\PHPSchema\Interfaces;
use \DateTimeInterface;

interface OfferInterface extends IntangibleInterface
{
	public function getAvailability():? ItemAvailabilityInterface;

	public function setAvailability(?ItemAvailabilityInterface $val): void;

	public function getPrice(): float;

	public function setPrice(?float $val): void;

	public function getPriceCurrency():? string;

	public function setPriceCurrency(?string $val): void;

	public function getPriceSpecification(): iterable;

	public function setPriceSpecification(PriceSpecificationInterface... $vals): void;

	public function getValidFrom():? DateTimeInterface;

	public function getValidFromAsString():? string;

	public function setValidFrom(?DateTimeInterface $val): void;

	public function getValidThrough():? DateTimeInterface;

	public function getValidThroughAsString():? string;

	public function setValidThrough(?DateTimeInterface $val): void;
}
