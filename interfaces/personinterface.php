<?php
namespace shgysk8zer0\PHPSchema\Interfaces;
use \DateTimeInterface;
interface PersonInterface extends PersonorOrganizationInterface
{
	public function getBirthDate():? DateTimeInterface;

	public function getBirthDateAsString():? string;

	public function setBirthDate(?DateTimeInterface $val): void;

	public function getWorksFor():? OrganizationInterface;

	public function setWorksFor(?OrganizationInterface $org): void;
}
