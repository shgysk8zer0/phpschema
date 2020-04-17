<?php
namespace shgysk8zer0\PHPSchema\Traits;

trait GeoCoordinatesTrait
{
	private $_elevation = null;

	private $_latitude = null;

	private $_longitude = null;

	public function getElevation():? float
	{
		return $this->_elevation;
	}

	public function setElevation(?float $val): void
	{
		$this->_elevation = $val;
	}

	public function getLatitude():? float
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
