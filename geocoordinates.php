<?php
namespace shgysk8zer0\PHPSchema;
use \shgysk8zer0\PHPSchema\Interfaces\{GeoCoordinatesInterface};
use \shgysk8zer0\PHPSchema\Traits\{GeoCoordinatesTrait};

class GeoCoordinates extends StructuredValue implements GeoCoordinatesInterface
{
	use GeoCoordinatesTrait;

	public const TYPE = 'GeoCoordinates';

	public function jsonSerialize(): array
	{
		return array_merge(
			parent::jsonSerialize(),
			[
				'elevation' => $this->getElevation(),
				'latitude'  => $this->getLatitude(),
				'longitude' => $this->getLongitude(),
			]
		);
	}
}
