<?php
namespace shgysk8zer0\PHPSchema\Interfaces;

use \DateTimeInterface;

interface ActionInterface extends ThingInterface
{
	public function getActionStatus():? ActionStatusTypeInterface;

	public function setActionStatus(?ActionStatusTypeInterface $val): void;

	public function getAgent():? PersonOrOrganizationInterface;

	public function setAgent(?PersonOrOrganizationInterface $val): void;

	public function getEndTime():? DateTimeInterface;

	public function getEndTimeAsString():? string;

	public function setEndTime(DateTimeInterface $val): void;

	public function getInstrument():? ThingInterface;

	public function setInstrument(?ThingInterface $val): void;

	public function getLocation():? PlaceInterface;

	public function setLocation(?PlaceInterface $val): void;

	public function getObject():? ThingInterface;

	public function setObject(?ThingInterface $val): void;

	public function addParticipant(PersonOrOrganizationInterface $val): void;

	public function getParticipant(): iterable;

	public function setParticipant(PersonOrOrganizationInterface ...$vals): void;

	public function getResult():? ThingInterface;

	public function setResult(?ThingInterface $val): void;

	public function getStartTime():? DateTimeInterface;

	public function getStartTimeAsString():? string;

	public function setStartTime(?DateTimeInterface $val): void;

	public function getTarget():? EntryPointInterface;

	public function setTarget(?EntryPointInterface $val): void;
}
