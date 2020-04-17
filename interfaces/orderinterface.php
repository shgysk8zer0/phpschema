<?php
namespace shgysk8zer0\PHPSchema\Interfaces;
use \DateTimeInterface;

interface OrderInterface extends IntangibleInterface
{
	public function getConfirmationNumber():? string;

	public function setConfirmationNumber(?string $val): void;

	public function getCustomer():? PersonOrOrganizationInterface;

	public function setCustomer(?PersonOrOrganizationInterface $val): void;

	public function getDiscount():? float;

	public function setDiscount(?float $val): void;

	public function getDiscountCode():? string;

	public function setDiscountCode(?string $val): void;

	public function getDiscountCurrency():? string;

	public function setDiscounCurrency(?string $val): void;

	public function getOrderDate():? DateTimeInterface;

	public function setOrderDate(?DateTimeInterface $val): void;

	public function getOrderDateAsString():? string;

	public function getOrderedItem(): iterable;

	public function addOrderedItem(OrderItemInterface $val): void;

	public function setOrderedItem(OrderItemInterface ...$vals): void;

	public function getOrderNumber():? string;

	public function setOrderNumber(?string $val): void;

	public function getSeller():? PersonOrOrganizationInterface;

	public function setSeller(?PersonOrOrganizationInterface $val): void;
}
