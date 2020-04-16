<?php
namespace shgysk8zer0\PHPSchema\Interfaces;

interface OrganizationInterface extends PersonorOrganizationInterface
{
	public function getLogo():? ImageObjectInterface;

	public function setLogo(?ImageObjectInterface $val): void;
}
