<?php
namespace shgysk8zer0\PHPSchema;
use \shgysk8zer0\PHPSchema\Interfaces\{OrganizationInterface};
use shgysk8zer0\PHPSchema\Traits\{OrganizationTrait};
use \Throwable;

class Organization extends Thing implements OrganizationInterface
{
	use OrganizationTrait;

	public const TYPE = 'Organization';

	public function jsonSerialize(): array
	{
		return array_merge(
			parent::jsonSerialize(),
			$this->_orgJSON()
		);
	}

	public function setFromObject(object $data): void
	{
		parent::setFromObject($data);
		$this->setEmail($data->email ?? null);
		$this->setTelephone($data->telephone ?? null);

		if (isset($data->address)) {
			$this->setAddress(new PostalAddress($data->address));
		}
	}
}
