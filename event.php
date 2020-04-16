<?php
namespace shgysk8zer0\PHPSchema;

use \shgysk8zer0\PHPSchema\Interfaces\{
	EventInterface,
	EventStatusTypeInterface,
	ContactableInterface,
	ThingInterface,
	PlaceInterface,
	OfferInterface,
};

use \shgysk8zer0\PHPSchema\Traits\{OffersTrait, LocationTrait, DateTimeTrait};

use \DateTimeInterface;

class Event extends Thing implements EventInterface
{
	use DateTimeTrait;
	use LocationTrait;
	use OffersTrait;

	public const TYPE = 'Event';

	private $_about = null;

	private $_doorTime = null;

	private $_endDate = null;

	private $_eventStatus = null;

	private $_organizer = null;

	private $_startDate = null;

	private $_subEvent = [];


	public function jsonSerialize(): array
	{
		return array_merge(
			parent::jsonSerialize(),
			[
				'about'       => $this->getAbout(),
				'doorTime'    => $this->getDoorTimeAsString(),
				'endDate'     => $this->getEndDateAsString(),
				'eventStatus' => $this->getEventStatus(),
				'location'    => $this->getLocation(),
				'organizer'   => $this->getOrganizer(),
				'startdate'   => $this->getStartDateAsString(),
				'offers'      => $this->getOffers(),
				'subEvent'    => $this->getSubEvent(),
			]
		);
	}

	public function getAbout():? ThingInterface
	{
		return $this->_about;
	}

	public function setAbout(?ThingInterface $val): void
	{
		$this->_about = $val;
	}

	public function getDoorTime():? DateTimeInterface
	{
		return $this->_doorTime;
	}

	public function getDoorTimeAsString():? string
	{
		return $this->_stringifyDate($this->getDoorTime());
	}

	public function setDoorTime(?DateTimeInterface $val): void
	{
		$this->_doorTime = $val;
	}

	public function getEndDate():? DateTimeInterface
	{
		return $this->_endDate;
	}

	public function getEndDateAsString():? string
	{
		return $this->_stringifyDate($this->getEndDate());
	}

	public function setEndDate(?DateTimeInterface $val): void
	{
		$this->_endDate = $val;
	}

	public function getEventStatus():? EventStatusTypeInterface
	{
		return $this->_eventStatus;
	}

	public function setEventStatus(?EventStatusTypeInterface $val): void
	{
		$this->_eventStatus = $val;
	}

	public function getOrganizer():? ContactableInterface
	{
		return $this->_organizer;
	}

	public function setOrganizer(?ContactableInterface $val): void
	{
		$this->_organizer = $val;
	}

	public function getStartDate():? DateTimeInterface
	{
		return $this->_startDate;
	}

	public function getStartDateAsString():? string
	{
		return $this->_stringifyDate($this->getStartDate());
	}

	public function setStartDate(?DateTimeInterface $val): void
	{
		$this->_startDate = $val;
	}

	public function getSubEvent():? iterable
	{
		return $this->_subEvent;
	}

	public function setSubEvent(EventInterface ...$vals): void
	{
		$this->_subEvent = $vals;
	}
}
