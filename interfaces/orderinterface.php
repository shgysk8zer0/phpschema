<?php
namespace shgysk8zer0\PHPSchema\Interfaces;
use \DateTimeInterface;

interface OrderInterface extends ThingInterface
{
	public function getCustomer():? PersonorOrganizationInterface;

	public function setCustomer(?PersonorOrganizationInterface $val): void;

	public function getOrderDate():? DateTimeInterface;

	public function setOrderDate(?DateTimeInterface $val): void;

	public function getOrderDateAsString():? string;

	public function getOrderItem(): iterable;

	public function addOrderItem(OrderItemInterface $val): void;

	public function getSeller():? PersonorOrganizationInterface;

	public function setSeller(?PersonorOrganizationInterface $val): void;
}
