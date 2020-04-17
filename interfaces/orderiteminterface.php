<?php
namespace shgysk8zer0\PHPSchema\Interfaces;

interface OrderItemInterface extends ProductOrServiceInterface
{
	public function getOrderItemNumber():? string;

	public function setOrderItemNumber(?string $val): void;

	public function getOrderItemStatus():? OrderStatusInterface;

	public function setOrderItemStatus(?OrderStatusInterface $val): void;

	public function getOrderQuantity(): int;

	public function setOrderQuantity(int $val): void;

	public function getOrderedItem():? iterable;

	public function setOrderedItem(ProductOrServiceInterface... $vals): void;
}
