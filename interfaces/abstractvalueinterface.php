<?php
namespace shgysk8zer0\PHPSchema\Interfaces;

/**
 * This interface MUST never be used on its own. It exists for other Interfaces
 * to extend it only.
 */
interface AbstractValueInterface extends StructuredValueInterface
{
	public function getMinValue():? float;

	public function setMinValue(?float $val): void;

	public function getMaxValue():? float;

	public function setMaxValue(?float $val): void;

	public function getUnitCode():? string;

	public function setUnitCode(?string $val): void;

	public function getUnitText():? string;

	public function setUnitText(?string $val): void;

	public function getValue();

	public function setValue($val): void;
}
