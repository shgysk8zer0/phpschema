<?php
namespace shgysk8zer0\PHPSchema\Abstracts;

use \shgysk8zer0\PHPSchema\{Intangible};
use \shgysk8zer0\PHPSchema\Interfaces\{EnumerationInterface};
use \InvalidArgumentException;

abstract class AbstractEnumeration extends Intangible implements EnumerationInterface
{
	public const TYPE = 'Enumeration';

	public function __toString(): string
	{
		return sprintf("%s/%s", $this::CONTEXT, $this::TYPE);
	}

	public function jsonSerialize(): array
	{
		return [
			'@context' => $this::CONTEXT,
			'@type'    => $this::TYPE,
		];
	}
}
