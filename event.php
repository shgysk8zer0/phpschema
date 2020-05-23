<?php
namespace shgysk8zer0\PHPSchema;

use \shgysk8zer0\PHPSchema\Interfaces\{
	DurationInterface,
	EventAttendanceModeInterface,
	EventInterface,
	EventStatusTypeInterface,
	PersonOrOrganizationInterface,
	OfferInterface,
	PlaceInterface,
	ThingInterface,
};

use \shgysk8zer0\PHPSchema\Traits\{
	OffersTrait,
	LocationTrait,
	DateTimeTrait,
	Durationtrait,
};

use \DateInterval;
use \DateTimeInterface;

class Event extends Thing implements EventInterface
{
	use DateTimeTrait;
	use LocationTrait;
	use OffersTrait;
	use DurationTrait;

	public const TYPE = 'Event';

	private $_about = null;

	private $_doorTime = null;

	private $_duration = null;

	private $_endDate = null;

	private $_eventAttendanceMode = null;

	private $_eventStatus = null;

	private $_performer = null;

	private $_organizer = null;

	private $_startDate = null;

	private $_subEvent = [];


	public function jsonSerialize(): array
	{
		return array_merge(
			parent::jsonSerialize(),
			[
				'about'               => $this->getAbout(),
				'doorTime'            => $this->getDoorTimeAsString(),
				'duration'            => $this->getDurationAsString(),
				'endDate'             => $this->getEndDateAsString(),
				'eventAttendanceMode' => $this->getEventAttendanceMode(),
				'eventStatus'         => $this->getEventStatus(),
				'location'            => $this->getLocation(),
				'performer'           => $this->getPerformer(),
				'organizer'           => $this->getOrganizer(),
				'startdate'           => $this->getStartDateAsString(),
				'offers'              => $this->getOffers(),
				'subEvent'            => $this->getSubEvent(),
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

	final public function getDuration():? DurationInterface
	{
		if (isset($this->_duration)) {
			return $this->_duration;
		} else {
			return Duration::fromDaterange($this->getStartDate(), $this->getEndDate());
		}
	}

	public function getDurationAsString():? string
	{
		if ($dur = $this->getDuration()) {
			return $dur->getDateIntervalAsString();
		} else {
			return null;
		}
	}

	final public function getDurationAsDateInterval():? DateInterval
	{
		if ($dur = $this->getDuration()) {
			return $dur->getDateInterval();
		} else {
			return null;
		}
	}

	final public function setDuration(?DurationInterface $val): void
	{
		$this->_duration = $val;
	}

	final public function setDurationFromDateInterval(?DateInterval $val): void
	{
		$this->setDuration($this->getDurationFromDateInterval($val));
	}

	final public function setDurationFromDateRange(
		?DateTimeInterface $from,
		?DateTimeInterface $to
	): void
	{
		$this->setDuration($this->getDurationFromDateRange($from, $to));
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

	public function getEventAttendanceMode():? EventAttendanceModeInterface
	{
		return $this->_eventAttendanceMode;
	}

	public function setEventAttendanceMode(?EventAttendanceModeInterface $val): void
	{
		$this->_eventAttendanceMode = $val;
	}

	public function getEventStatus():? EventStatusTypeInterface
	{
		return $this->_eventStatus;
	}

	public function setEventStatus(?EventStatusTypeInterface $val): void
	{
		$this->_eventStatus = $val;
	}

	public function getPerformer():? PersonOrOrganizationInterface
	{
		return $this->_performer;
	}

	public function setPerformer(?PersonOrOrganizationInterface $val): void
	{
		$this->_performer = $val;
	}

	public function getOrganizer():? PersonOrOrganizationInterface
	{
		return $this->_organizer;
	}

	public function setOrganizer(?PersonOrOrganizationInterface $val): void
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
