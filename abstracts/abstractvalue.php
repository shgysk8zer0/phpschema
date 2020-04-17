<?php
namespace shgysk8zer0\PHPSchema\Abstracts;
use \shgysk8zer0\PHPSchema\{StructuredValue};
use \shgysk8zer0\PHPSchema\Interfaces\{AbstractValueInterface};
/**
 * This class MUST never be used on its own. It exists for other classes
 * to extend it only.
 */
abstract class AbstractValue extends StructuredValue implements AbstractValueInterface
{
	private $_minValue = null;

	private $_maxValue = null;

	private $_unitCode = null;

	private $_unitText = null;

	private $_value = null;

	public function jsonSerialize(): array
	{
		return array_merge(
			parent::jsonSerialize(),
			[
				'minValue' => $this->getMinValue(),
				'maxValue' => $this->getMaxValue(),
				'unitCode' => $this->getUnitCode(),
				'unitText' => $this->getUnitText(),
				'value'    => $this->getValue(),
			]
		);
	}

	public function getMinValue():? float
	{
		return $this->_minValue;
	}

	public function setMinValue(?float $val): void
	{
		$this->_minValue = $val;
	}

	public function getMaxValue():? float
	{
		return $this->_maxValue;
	}

	public function setMaxValue(?float $val): void
	{
		$this->_maxValue = $val;
	}

	public function getUnitCode():? string
	{
		return $this->_unitCode;
	}

	public function setUnitCode(?string $val): void
	{
		$this->_unitCode = $val;
	}

	public function getUnitText():? string
	{
		return $this->_unitText;
	}

	public function setUnitText(?string $val): void
	{
		$this->_unitText = $val;
	}

	public function getValue()
	{
		return $this->_value;
	}

	public function setValue($val): void
	{
		$this->_value = $val;
	}
}
