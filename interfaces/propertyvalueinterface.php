<?php
namespace shgysk8zer0\PHPSchema\Interfaces;

interface PropertyValueInterface extends AbstractValueInterface
{
	public function getPropertyID():? string;

	public function setPropertyID(?string $val): void;
}
