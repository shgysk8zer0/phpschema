<?php
namespace shgysk8zer0\PHPSchema;
use \shgysk8zer0\PHPSchema\Interfaces\{GeoCoordinatesInterface};

class GeoCoordinates extends StructuredValue implements GeoCoordinatesInterface
{
	public const TYPE = 'GeoCoordinates';

	private $_elevation = null;

	private $_latitude = null;

	private $_longitude = null;

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

	public function getElevation():? float
	{
		return $this->_elevation;
	}

	public function setElevation(?float $val): void
	{
		$this->_elevation = null;
	}

	public function getLatitude(): float
	{
		return $this->_latitude;
	}

	public function setLatitude(?float $val): void
	{
		$this->_latitude = $val;
	}

	public function getLongitude():? float
	{
		return $this->_longitude;
	}

	public function setLongitude(?float $val): void
	{
		$this->_longitude = $val;
	}
}
