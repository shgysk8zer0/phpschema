<?php
namespace shgysk8zer0\PHPSchema;
use \shgysk8zer0\PHPSchema\Interfaces\{QuantitativeValueInterface, PropertyValueInterface};
use \shgysk8zer0\PHPSchema\Abstracts\{AbstractValue};

class QuantitativeValue extends AbstractValue implements QuantitativeValueInterface
{
	public const TYPE = 'QuantitativeValue';

	private $_additionalProperty = null;

	public function jsonSerialize(): array
	{
		return array_merge(
			parent::jsonSerialize(),
			[
				'additionalProperty' => $this->getAdditionalProperty(),
			]
		);
	}

	public function getAdditionalProperty():? PropertyValueInterface
	{
		return $this->_additionalProperty;
	}

	public function setAdditionalProperty(?PropertyValueInterface $val): void
	{
		$this->_additionalProperty = $val;
	}
}
