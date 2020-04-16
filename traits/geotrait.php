<?php
namespace shgysk8zer0\PHPSchema\Traits;
use \shgysk8zer0\PHPSchema\Interfaces\{GeoCoordinatesInterface};
trait GeoTrait
{
	private $_geo = null;
	public function getGeo():? GeoCoordinatesInterface
	{
		return $this->_geo;
	}

	public function setGeo(?GeoCoordinatesInterface $val): void
	{
		$this->_geo = $val;
	}
}
