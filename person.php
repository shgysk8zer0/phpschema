<?php
namespace shgysk8zer0\PHPSchema;
use \shgysk8zer0\PHPSchema\Interfaces\{PersonInterface};
use \Throwable;

class Person extends Thing implements PersonInterface
{
	use Traits\ContactableTrait;

	public const TYPE = 'Person';

	public function jsonSerialize(): array
	{
		return array_merge(
			parent::jsonSerialize(),
			[
				'email'     => $this->getEmail(),
				'telephone' => $this->getTelephone(),
				'address'   => $this->getAddress(),
			]
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
