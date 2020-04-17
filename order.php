<?php
namespace shgysk8zer0\PHPSchema;

use \shgysk8zer0\PHPSchema\Interfaces\{
	OrderInterface,
	OrderItemInterface,
	PersonOrOrganizationInterface,
};
use \shgysk8zer0\PHPSchema\Traits\{DateTimeTrait};
use \DateTimeInterface;
use \DateTimeImmutable;

class Order extends Intangible implements OrderInterface
{
	use DateTimeTrait;

	public const TYPE = 'Order';

	private $_confirmationNumber = null;

	private $_customer = null;

	private $_discount = null;

	private $_discountCode = null;

	private $_discountCurrency = null;

	private $_orderDate = null;

	private $_orderItem = [];

	private $_orderNumber = null;

	private $_seller = null;

	public function jsonSerialize(): array
	{
		return array_merge(
			parent::jsonSerialize(),
			[
				'customer'         => $this->getCustomer(),
				'discount'         => $this->getDiscount(),
				'discountCode'     => $this->getDiscountCode(),
				'discountCurrency' => $this->getDiscountCurrency(),
				'orderDate'        => $this->getOrderDateAsString(),
				'orderedItem'      => $this->getOrderedItem(),
				'orderNumber'      => $this->getOrderNumber(),
				'seller'           => $this->getSeller(),
			]
		);
	}

	public function getConfirmationNumber():? string
	{
		return $this->_confirmationNumber;
	}

	public function setConfirmationNumber(?string $val): void
	{
		$this->_confirmationNumber = $val;
	}

	public function getCustomer():? PersonOrOrganizationInterface
	{
		return $this->_customer;
	}

	public function setCustomer(?PersonOrOrganizationInterface $val): void
	{
		$this->_customer = $val;
	}

	public function getDiscount():? float
	{
		return $this->_discount;
	}

	public function setDiscount(?float $val): void
	{
		$this->_discount = $val;
	}

	public function getDiscountCode():? string
	{
		return $this->_discountCode;
	}

	public function setDiscountCode(?string $val): void
	{
		$this->_discountCode = $val;
	}

	public function getDiscountCurrency():? string
	{
		return $this->_discountCurrency;
	}

	public function setDiscounCurrency(?string $val): void
	{
		$this->_discountCurrency = $val;
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

	public function getOrderedItem(): iterable
	{
		return $this->_orderItem;
	}

	public function setOrderedItem(OrderItemInterface ...$vals): void
	{
		$this->_orderItem = $vals;
	}

	public function getOrderNumber():? string
	{
		return $this->_orderNumber;
	}

	public function setOrderNumber(?string $val): void
	{
		$this->_orderNumber = $val;
	}

	public function addOrderedItem(OrderItemInterface $val): void
	{
		if (! in_array($val)) {
			$this->_orderItem[] = $val;
		}
	}

	public function getSeller():? PersonOrOrganizationInterface
	{
		return $this->_seller;
	}

	public function setSeller(?PersonOrOrganizationInterface $val): void
	{
		$this->_seller = $val;
	}
}
