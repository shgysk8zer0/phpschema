<?php
namespace shgysk8zer0\PHPSchema\Interfaces;
use \DateTimeInterface;

interface InvoiceInterface extends IntangibleInterface
{
	public function getConfirmationNumber():? string;

	public function setConfirmationNumber(?string $val): void;

	public function getCustomer():? PersonorOrganizationInterface;

	public function setCustomer(?ContaqctableInterface $val): void;

	public function getIdentifier():? string;

	public function setIdentifier(?string $val): void;

	public function getPaymentDueDate():? DateTimeInterface;

	public function setPaymentDueDate(?DateTimeInterface $val): void;

	public function getPaymentStatus():? string;

	public function setPaymentStatus(?string $val): void;

	public function getProvider():? PersonorOrganizationInterface;

	public function setProvider(?PersonorOrganizationInterface $val): void;

	public function getReferencesOrder():? OrderInterface;

	public function setReferencesOrder(?OrderInterface $val): void;

	public function getScheduledPaymentDate():? DateTimeInterface;

	public function setScheduledPaymentDate(?DateTimeInterface $val): void;

	public function getTotalPaymentDue():? MonetaryAmountInterface;

	public function setTotalPaymentDue(?MonetaryAmountInterface $val): void;
}
