<?php
namespace shgysk8zer0\PHPSchema\Interfaces;

interface ServiceInterface extends IntangibleInterface
{
	// @see https://schema.org/Service
	public function getOffers(): iterable;

	public function setOffers(OfferInterface... $val): void;

	public function getServiceType():? string;

	public function setServiceType(?string $val): void;
}
