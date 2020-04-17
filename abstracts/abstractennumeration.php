<?php
namespace shgysk8zer0\PHPSchema\Abstracts;

use \shgysk8zer0\PHPSchema\{Intangible};
use \shgysk8zer0\PHPSchema\Interfaces\{EnnumerationInterface};
use \InvalidArgumentException;

abstract class AbstractEnnumeration extends Intangible implements EnnumerationInterface
{
	public const TYPE = 'Ennumeration';

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
