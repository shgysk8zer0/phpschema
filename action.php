<?php

namespace shgysk8zer0\PHPSchema;

use \shgysk8zer0\PHPSchema\Interfaces\{
	ActionInterface,
	ActionStatusTypeInterface,
	EntryPointInterface,
	PersonOrOrganizationInterface,
	PlaceInterface,
	ThingInterface,
};

use \shgysk8zer0\PHPSchema\Traits\{DateTimeTrait};

use \DateTimeInterface;

class Action extends Thing implements ActionInterface
{
	use DateTimeTrait;

	public const TYPE = 'Action';

	private $_actionStatus = null;

	private $_agent        = null;

	private $_endTime      = null;

	private $_instrument   = null;

	private $_location     = null;

	private $_participant  = [];

	private $_result       = null;

	private $_startTime    = null;

	private $_target       = null;

	public function jsonSerialize(): array
	{
		return array_merge(
			parent::jsonSerialize(),
			[
				'actionStatus' => $this->getActionStatus(),
				'agent'        => $this->getAgent(),
				'endTime'      => $this->getEndTimeAsString(),
				'instrument'   => $this->getInstrument(),
				'location'     => $this->getLocation(),
				'participant'  => $this->getParticipant(),
				'result'       => $this->getResult(),
				'startTime'    => $this->getStartTimeAsString(),
				'target'       => $this->getTarget(),
			]
		);
	}

	final public function getActionStatus():? ActionStatusTypeInterface
	{
		return $this->_actionStatus;
	}

	final public function setActionStatus(?ActionStatusTypeInterface $val): void
	{
		$this->_actionStatus = $val;
	}

	final public function getAgent():? PersonOrOrganizationInterface
	{
		return $this->_agent;
	}

	final public function setAgent(?PersonOrOrganizationInterface $val): void
	{
		$this->_agent = $val;
	}

	final public function getEndTime():? DateTimeInterface
	{
		return $this->_endTime;
	}

	final public function getEndTimeAsString():? string
	{
		return $this->_stringifyDate($this->getEndTime());
	}

	final public function setEndTime(DateTimeInterface $val): void
	{
		$this->_endTime = $val;
	}

	final public function getInstrument():? ThingInterface
	{
		return $this->_instrument;
	}

	final public function setInstrument(?ThingInterface $val): void
	{
		$this->_instrument = $val;
	}

	final public function getLocation():? PlaceInterface
	{
		return $this->_location;
	}

	final public function setLocation(?PlaceInterface $val): void
	{
		$this->_location = $val;
	}

	final public function getObject():? ThingInterface
	{
		return $this->_object;
	}

	final public function setObject(?ThingInterface $val): void
	{
		$this->_object =$val;
	}

	final public function addParticipant(PersonOrOrganizationInterface $val): void
	{
		$this->_participant[] = $val;
	}

	final public function getParticipant(): iterable
	{
		return $this->_participant;
	}

	final public function setParticipant(PersonOrOrganizationInterface ...$vals): void
	{
		$this->_participant = $vals;
	}

	final public function getResult():? ThingInterface
	{
		return $this->_result;
	}

	final public function setResult(?ThingInterface $val): void
	{
		$this->_result = $val;
	}

	final public function getStartTime():? DateTimeInterface
	{
		return $this->_startTime;
	}

	final public function getStartTimeAsString():? string
	{
		return $this->_stringifyDate($this->getStartTime());
	}

	final public function setStartTime(?DateTimeInterface $val): void
	{
		$this->_startTime = $val;
	}

	final public function getTarget():? EntryPointInterface
	{
		return $this->_target;
	}

	final public function setTarget(?EntryPointInterface $val): void
	{
		$this->_target = $val;
	}
}
