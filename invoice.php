<?php
namespace shgysk8zer0\PHPSchema;
use \shgysk8zer0\PHPSchema\Interfaces\{
	InvoiceInterface,
	PaymentStatusTypeInterface,
	PersonOrOrganizationInterface,
	MonetaryAmountInterface,
	OrderInterface,
};

use \shgysk8zer0\PHPSchema\Traits\{DateTimeTrait};

use \DateTimeInterface;

class Invoice extends Intangible implements InvoiceInterface
{
	use DateTimeTrait;

	public const TYPE = 'Invoice';

	private $_confirmationNumber = null;

	private $_customer = null;

	private $_paymentDueDate = null;

	private $_paymentStatus = null;

	private $_provider = null;

	private $_referencesOrder = null;

	private $_scheduledPaymentDate = null;

	private $_totalPaymentDue = null;

	public function jsonSerialize(): array
	{
		return array_merge(
			parent::jsonSerialize(),
			[
				'confirmationNumber'   => $this->getConfirmationNumber(),
				'customer'             => $this->getCustomer(),
				'paymentDueDate'       => $this->getPaymentDueDateAsString(),
				'provider'             => $this->getProvider(),
				'referencesOrder'      => $this->getReferencesOrder(),
				'scheduledPaymentDate' => $this->getScheduledPaymentDateAsString(),
				'totalPaymentDue'      => $this->getTotalPaymentDue(),
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

	public function getPaymentDueDate():? DateTimeInterface
	{
		return $this->_paymentDueDate;
	}

	public function getPaymentDueDateAsString():? string
	{
		return $this->_stringifyDate($this->getPaymentDueDate());
	}

	public function setPaymentDueDate(?DateTimeInterface $val): void
	{
		$this->_paymentDueDate = $val;
	}

	public function getPaymentStatus():? PaymentStatusTypeInterface
	{
		return $this->_paymentStatus;
	}

	public function setPaymentStatus(?PaymentStatusTypeInterface $val): void
	{
		$this->_paymentStatus = $val;
	}

	public function getProvider():? PersonOrOrganizationInterface
	{
		return $this->_provider;
	}

	public function setProvider(?PersonOrOrganizationInterface $val): void
	{
		$this->_provider = $val;
	}

	public function getReferencesOrder():? OrderInterface
	{
		return $this->_referencesOrder;
	}

	public function setReferencesOrder(?OrderInterface $val): void
	{
		$this->_referencesOrder = $val;
	}

	public function getScheduledPaymentDate():? DateTimeInterface
	{
		return $this->_scheduledPaymentDate;
	}

	public function getScheduledPaymentDateAsString():? string
	{
		return $this->_stringifyDate($this->getScheduledPaymentDate());
	}

	public function setScheduledPaymentDate(?DateTimeInterface $val): void
	{
		$this->_scheduledPaymentDate = $val;
	}

	public function getTotalPaymentDue():? MonetaryAmountInterface
	{
		return $this->_totalPaymentDue;
	}

	public function setTotalPaymentDue(?MonetaryAmountInterface $val): void
	{
		$this->_totalPaymentDue = $val;
	}
}
