<?php
namespace shgysk8zer0\PHPSchema;
use \shgysk8zer0\PHPSchema\Interfaces\{ProductInterface};
use \shgysk8zer0\PHPSchema\Traits\{OffersTrait};

class Product extends Thing implements ProductInterface
{
	use OffersTrait;

	public const TYPE = 'Product';

	public function JsonSerializable(): array
	{
		return array_merge(
			parent::jsonSerialize(),
			[
				'offers' => $this->getOffers(),
			]
		);
	}
}
