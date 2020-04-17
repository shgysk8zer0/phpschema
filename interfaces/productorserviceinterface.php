<?php
namespace shgysk8zer0\PHPSchema\Interfaces;

interface ProductOrServiceInterface extends ThingInterface
{
	public function getOffers(): iterable;

	public function addOffers(OfferInterface... $vals): void;

	public function setOffers(OfferInterface... $vals): void;
}
