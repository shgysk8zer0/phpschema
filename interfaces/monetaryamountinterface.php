<?php
namespace shgysk8zer0\PHPSchema\Interfaces;
/**
 * @SEE https://schema.org/MonetaryAmount
 * Interface for Montary Values (currency + value)
 */
interface MonetaryAmountInterface extends StructuredValueInterface
{
	public function getCurrency(): string;

	public function setCurrency(string $val): void;

	public function getValue(): float;

	public function setValue(float $val): void;

	public function getCurrencySymbol(): string;

	public function setCurrencySymbol(?string $val): void;
}
