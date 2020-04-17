<?php
namespace shgysk8zer0\PHPSchema;
use \shgysk8zer0\PHPSchema\Interfaces\{ServiceInterface};
use \shgysk8zer0\PHPSchema\Traits\{OffersTrait};

class Service extends Intangible implements ServiceInterface
{
	use OffersTrait;

	public const TYPE = 'Service';

	public function JsonSerializable(): array
	{
		return array_merge(
			parent::jsonSerialize(),
			[
				'offers'      => $this->getOffers(),
				'serviceType' => $this->getServiceType(),
			]
		);
	}

	private $_serviceType = null;

	public function getServiceType():? string
	{
		return $this->_serviceType;
	}

	public function setServiceType(?string $val): void
	{
		$this->_serviceType = $val;
	}
}
