<?php
namespace shgysk8zer0\PHPSchema;

use \shgysk8zer0\PHPSchema\Traits\{DateTimeTrait};
use \DateTimeInterface;
use \DateTimeImmutable;

class Order extends Thing
{
	use DateTimeTrait;

	public const TYPE = 'Order';

	private $_customer = null;

	private $_orderDate = null;

	private $_orderItem = [];

	private $_seller = null;

	public function jsonSerialize(): array
	{
		return array_merge(
			parent::jsonSerialize(),[
				'customer'  => $this->getCustomer(),
				'orderDate' => $this->getOrderDateAsString(),
				'orderItem' => $this->getOrderItem(),
				'seller'    => $this->getSeller(),
			]
		);
	}

	public function getCustomer():? PersonorOrganizationInterface
	{
		return $this->_customer;
	}

	public function setCustomer(?PersonorOrganizationInterface $val): void
	{
		$this->_customer = $val;
	}

	public function getOrderDate():? DateTimeInterface
	{
		return $this->_orderDate;
	}

	public function setOrderDate(?DateTimeInterface $val): void
	{
		$this->_orderDate = $val;
	}

	public function getOrderDateAsString():? string
	{
		return $this->_stringifyDate($this->getOrderDate());
	}

	public function getOrderItem(): iterable
	{
		return $this->_orderItem;
	}

	public function addOrderItem(OrderItemInterface $val): void
	{
		if (! in_array($val)) {
			$this->_orderItem[] = $val;
		}
	}

	public function getSeller():? PersonorOrganizationInterface
	{
		return $this->_seller;
	}

	public function setSeller(?PersonorOrganizationInterface $val): void
	{
		$this->_seller = $val;
	}
}
