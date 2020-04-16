<?php
namespace shgysk8zer0\PHPSchema\Interfaces;

interface ProductInterface extends ThingInterface
{
	// @see https://schema.org/Product
	public function getOffers(): iterable;

	public function setOffers(OfferInterface... $val): void;

}
