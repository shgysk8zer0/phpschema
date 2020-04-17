<?php
namespace shgysk8zer0\PHPSchema\Interfaces;
use \DateTimeInterface;

interface OrderInterface extends IntangibleInterface
{
	public function getCustomer():? PersonOrOrganizationInterface;

	public function setCustomer(?PersonOrOrganizationInterface $val): void;

	public function getOrderDate():? DateTimeInterface;

	public function setOrderDate(?DateTimeInterface $val): void;

	public function getOrderDateAsString():? string;

	public function getOrderItem(): iterable;

	public function addOrderItem(OrderItemInterface $val): void;

	public function getSeller():? PersonOrOrganizationInterface;

	public function setSeller(?PersonOrOrganizationInterface $val): void;
}
