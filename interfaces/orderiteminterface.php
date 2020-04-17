<?php
namespace shgysk8zer0\PHPAPI\Interfaces;

interface OrderItemInterface extends ProductOrServiceInterface
{
	public function getOrderItemNumber():? string;

	public function setOrderItemNumber(?string $val): void;

	public function getOrderItemStatus():? string;

	public function setOrderItemStatus(?string $val): void;

	public function getOrderQuantity(): int;

	public function setOrderQuantity(int $val): void;
}
