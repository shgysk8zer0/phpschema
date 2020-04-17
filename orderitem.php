<?php
namespace shgysk8zer0\PHPSchema;

use \shgysk8zer0\PHPSchema\Interfaces\{
	OrderItemInterface,
	OrderStatusInterface,
	ProductOrServiceInterface,
};

use \shgysk8zer0\PHPSchema\Traits\{OffersTrait};

class OrderItem extends Intangible implements OrderItemInterface
{
	use OffersTrait;

	public const TYPE = 'OrderItem';

	private $_orderItemNumber = null;

	private $_orderItemStatus = null;

	private $_orderQuantity = 0;

	private $_orderedItem = [];

	public function jsonSerialize(): array
	{
		return array_merge(
			parent::jsonSerialize(),
			[
				'offers'          => $this->getOffers(),
				'orderItemNumber' => $this->getOrderItemNumber(),
				'orderItemStatus' => $this->getOrderItemStatus(),
				'orderQuantity'   => $this->getOrderQuantity(),
				'orderedItem'     => $this->getOrderedItem(),
			]
		);
	}

	public function getOrderedItem(): iterable
	{
		return $this->_orderedItem;
	}

	public function setOrderedItem(ProductOrServiceInterface ...$vals): void
	{
		$this->_orderedItem = $vals;
	}

	public function getOrderItemNumber():? string
	{
		return $this->_orderItemNumber;
	}

	public function setOrderItemNumber(?string $val): void
	{
		$this->_orderItemNumber = $val;
	}

	public function getOrderItemStatus():? OrderStatusInterface
	{
		return $this->_orderItemStatus;
	}

	public function setOrderItemStatus(?OrderStatusInterface $val): void
	{
		$this->_orderItemStatus = $val;
	}

	public function getOrderQuantity(): int
	{
		return $this->_orderQuantity;
	}

	public function setOrderQuantity(int $val): void
	{
		$this->_orderQuantity = $val;
	}
}
