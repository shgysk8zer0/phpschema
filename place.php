<?php
namespace shgysk8zer0\PHPSchema;
use \shgysk8zer0\PHPSchema\Interfaces\{GeoCoordinatesInterface, PostalAddressInterface};
use \shgysk8zer0\PHPSchema\Traits\{GeoTrait, AddressTrait};
class Place extends Thing
{
	public const TYPE = 'Place';

	use GeoTrait;
	use AddressTrait;

	public function jsonSerialize(): array
	{
		return array_merge(
			parent::jsonSerialize(),
			[
				'address' => $this->getAddress(),
				'geo'     => $this->getGeo(),
			]
		);
	}
}
