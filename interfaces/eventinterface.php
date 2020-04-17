<?php
namespace shgysk8zer0\PHPSchema\Interfaces;
use \DateTimeInterface;

interface EventInterface extends ThingInterface
{
	public function getAbout():? ThingInterface;

	public function setAbout(?ThingInterface $val): void;

	public function getDoorTime():? DateTimeInterface;

	public function getDoorTimeAsString():? string;

	public function setDoorTime(?DateTimeInterface $val): void;

	public function getEndDate():? DateTimeInterface;

	public function getEndDateAsString():? string;

	public function setEndDate(?DateTimeInterface $val): void;

	public function getEventAttendanceMode():? EventAttendanceModeInterface;

	public function setEventAttendanceMode(?EventAttendanceModeInterface $val): void;

	public function getEventStatus():? EventStatusTypeInterface;

	public function setEventStatus(?EventStatusTypeInterface $val): void;

	public function getLocation():? PlaceInterface;

	public function setLocation(?PlaceInterface $val): void;

	public function getOffers(): iterable;

	public function setOffers(OfferInterface... $val): void;

	public function getOrganizer():? PersonOrOrganizationInterface;

	public function setOrganizer(?PersonOrOrganizationInterface $val): void;

	public function getPerformer():? PersonOrOrganizationInterface;

	public function setPerformer(?PersonOrOrganizationInterface $val): void;

	public function getStartDate():? DateTimeInterface;

	public function getStartDateAsString():? string;

	public function setStartDate(?DateTimeInterface $val): void;

	public function getSubEvent():? iterable;

	public function setSubEvent(EventInterface ...$vals): void;
}
