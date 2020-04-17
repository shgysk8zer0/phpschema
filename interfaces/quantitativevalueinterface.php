<?php
namespace shgysk8zer0\PHPSchema\Interfaces;

interface QuantitativeValueInterface extends AbstractValueInterface
{
	public function getAdditionalProperty():? PropertyValueInterface;

	public function setAdditionalProperty(?PropertyValueInterface $val): void;
}
