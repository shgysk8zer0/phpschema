<?php
namespace shgysk8zer0\PHPSchema\Interfaces;

use \DateTimeInterface;

interface MessageInterface extends CreativeWorkInterface
{
	public function addBccRecipient(PersonOrOrganizationInterface $val): void;

	public function getBccRecipient(): interable;

	public function setBccRecipient(...PersonOrOrganizationInterface $vals): void;

	public function addCcRecipient(PersonOrOrganizationInterface $val): void;

	public function getCcRecipient(): interable;

	public function setCcRecipient(...PersonOrOrganizationInterface $vals): void;

	public function getDateRead():? DateTimeInterface;

	public function getDateReadAsString():? string;

	public function setDateRead(?DateTimeInterface $val): void;

	public function getDateReceived():? DateTimeInterface;

	public function getDateReceivedAsString():? string;

	public function setDateReceived(?DateTimeInterface $val): void;

	public function getDateSent():? DateTimeInterface;

	public function getDateSentAsString():? string;

	public function setDateSent(?DateTimeInterface $val): void;

	public function addMessageAttachment(?CreativeWorkInterface $val): void;

	public function getMessageAttachment(): interable;

	public function setMessageAttachment(...CreativeWorkInterface $vals): void;

	public function addRecipient(?PersonOrOrganizationInterface $val): void;

	public function getRecipient(): iterable;

	public function setRecipient(...PersonOrOrganizationInterface $vals): void;

	public function getSender():? PersonOrOrganizationInterface;

	public function setSender(?PersonOrOrganizationInterface $val): void;

	public function getToRecipient():? PersonOrOrganizationInterface;

	public function setToRecipient(?PersonOrOrganizationInterface $val): void;
}
