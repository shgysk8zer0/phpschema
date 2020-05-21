<?php
namespace shgysk8zer0\PHPSchema;
use \shgysk8zer0\PHPSchema\Interfaces\{
	MessageInterface,
	CreativeWorkInterface,
	PersonOrOrganizationInterface,
}
use \DateTimeInterface;

interface Message extends CreativeWork implements MessageInterface
{
	public const TYPE = 'Message';

	private $_bccRecipient = [];

	private $_ccRecipient = [];

	private $_dateRead = null;

	private $_dateRecieved = null;

	private $_dateSent = null;

	private $_messageAttachment = [];

	private $_recipient = [];

	private $_sender = null;

	private $_toRecipient = null;

	public function addBccRecipient(PersonOrOrganizationInterface $val): void
	{
		$this->_bccRecipient[] = $val;
	}

	public function getBccRecipient(): interable
	{
		return $this->_bccRecipient;
	}

	public function setBccRecipient(...PersonOrOrganizationInterface $vals): void
	{
		$this->_bccRecipient = $vals;
	}

	public function addCcRecipient(PersonOrOrganizationInterface $val): void
	{
		$this->_ccRecipient[] = $val;
	}

	public function getCcRecipient(): interable
	{
		return $this->_ccRecipient;
	}

	public function setCcRecipient(...PersonOrOrganizationInterface $vals): void
	{
		$this->_ccRecipient = $vals;
	}

	public function getDateRead():? DateTimeInterface
	{
		return $this->_dateRead;
	}

	public function getDateReadAsString():? string
	{
		$date = $this->getDateRead();
		return isset($date) ? $date->formate($date::W3C) : null;
	}

	public function setDateRead(?DateTimeInterface $val): void
	{
		$this->_dateRead = $val;
	}

	public function getDateReceived():? DateTimeInterface;
	{
		return $this->_dateRecieved;
	}

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
