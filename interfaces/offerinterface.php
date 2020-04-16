<?php
namespace shgysk8zer0\PHPSchema\Interfaces;

interface OfferInterface extends IntangibleInterface
{
	public function getPrice(): float;

	public function setPrice(?float $val): void;

	public function getPriceCurrency():? string;

	public function setPriceCurrency(?string $val): void;
}
