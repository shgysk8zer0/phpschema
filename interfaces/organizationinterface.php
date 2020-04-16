<?php
namespace shgysk8zer0\PHPSchema\Interfaces;

interface OrganizationInterface extends ContactableInterface
{
	public function getLogo():? ImageObjectInterface;

	public function setLogo(?ImageObjectInterface $val): void;
}
