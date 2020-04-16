<?php
namespace shgysk8zer0\PHPSchema\Interfaces;

interface PersonorOrganizationInterface extends ThingInterface
{
	public function getAddress():? PostalAddressInterface;

	public function setAddress(?PostalAddressInterface $val): void;

	public function getEmail():? string;

	public function setEmail(?string $val): void;

	public function getFaxNumber():? string;

	public function setFaxNumber(?string $val): void;

	public function getTelephone():? string;

	public function setTelephone(?string $val): void;
}
