<?php
namespace shgysk8zer0\PHPSchema\Interfaces;
use \DateTimeInterface;

interface InvoiceInterface extends IntangibleInterface
{
	public function getConfirmationNumber():? string;

	public function setConfirmationNumber(?string $val): void;

	public function getCustomer():? PersonOrOrganizationInterface;

	public function setCustomer(?PersonOrOrganizationInterface $val): void;

	public function getPaymentDueDate():? DateTimeInterface;

	public function getPaymentDueDateAsString():? string;

	public function setPaymentDueDate(?DateTimeInterface $val): void;

	public function getPaymentStatus():? PaymentStatusTypeInterface;

	public function setPaymentStatus(?PaymentStatusTypeInterface $val): void;

	public function getProvider():? PersonOrOrganizationInterface;

	public function setProvider(?PersonOrOrganizationInterface $val): void;

	public function getReferencesOrder():? OrderInterface;

	public function setReferencesOrder(?OrderInterface $val): void;

	public function getScheduledPaymentDate():? DateTimeInterface;

	public function getScheduledPaymentDateAsString():? string;

	public function setScheduledPaymentDate(?DateTimeInterface $val): void;

	public function getTotalPaymentDue():? MonetaryAmountInterface;

	public function setTotalPaymentDue(?MonetaryAmountInterface $val): void;
}
