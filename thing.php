<?php
namespace shgysk8zer0\PHPSchema;

use \shgysk8zer0\PHPSchema\Interfaces\{
	ActionInterface,
	CreativeWorkInterface,
	ImageObjectInterface,
	ThingInterface,
};

use \shgysk8zer0\PHPAPI\Interfaces\{LoggerAwareInterface};

use \shgysk8zer0\PHPAPI\Traits\{LoggerAwareTrait};

use \shgysk8zer0\PHPAPI\{NullLogger, UUID};

class Thing implements ThingInterface, LoggerAwareInterface
{
	use LoggerAwareTrait;

	public const TYPE    = 'Thing';

	public const CONTEXT = 'https://schema.org';

	private $_additionalType            = null;

	private $_alternateName             = null;

	private $_identifier                = null;

	private $_disambiguatingDescription = null;

	private $_description               = null;

	private $_image                     = null;

	private $_mainEntryOfPage           = null;

	private $_name                      = null;

	private $_potentialAction           = [];

	private $_sameAs                    = [];

	private $_subjectOf                 = null;

	private $_url                       = null;

	public function __construct(?object $data = null)
	{
		$this->setLogger(new NullLogger());
		$this->logger->info('Creating new {type}', ['type' => $this::TYPE]);
		if (isset($data)) {
			$this->setFromObject($data);
		}
	}

	public function __clone()
	{
		if ($this->getIdentifier() !== null) {
			$this->setIdentifier(new UUID());
		}
	}

	public function __debugInfo(): array
	{
		return $this->jsonSerialize();
	}

	public function jsonSerialize(): array
	{
		return [
			'@context'                  => $this::CONTEXT,
			'@type'                     => $this::TYPE,
			'additionalType'            => $this->getAdditionalType(),
			'identifier'                => $this->getIdentifier(),
			'name'                      => $this->getName(),
			'alternateName'             => $this->getAlternateName(),
			'description'               => $this->getDescription(),
			'image'                     => $this->getImage(),
			'mainEntryOfPage'           => $this->getMainEntryOfPage(),
			'disambiguatingDescription' => $this->getDisambiguatingDescription(),
			'potentialAction'           => $this->getPotentialAction(),
			'subjectOf'                 => $this->getSubjectOf(),
			'sameAs'                    => $this->getSameAs(),
			'url'                       => $this->getUrl(),
		];
	}

	public function __toString(): string
	{
		return json_encode($this);
	}

	final public function getIdentifier():? string
	{
		return $this->_identifier;
	}

	final public function setIdentifier(?string $val): void
	{
		$this->_identifier = $val;
	}

	final public function getImage():? ImageObjectInterface
	{
		return $this->_image;
	}

	final public function setImage(?ImageObjectInterface $val): void
	{
		$this->_image = $val;
	}

	final public function getName():? string
	{
		return $this->_name;
	}

	final public function setName(?string $val): void
	{
		$this->_name = $val;
	}

	final public function getAlternateName():? string
	{
		return $this->_alternateName;
	}

	final public function setAlternateName(?string $val): void
	{
		$this->_alternateName = $val;
	}

	final public function getDescription():? string
	{
		return $this->_description;
	}

	final public function setDescription(?string $val): void
	{
		$this->_description = $val;
	}

	final public function getAdditionalType():? string
	{
		return $this->_additionalType;
	}

	final public function setAdditionalType(?string $val): void
	{
		$this->_additionalType = $val;
	}

	final public function getDisambiguatingDescription():? string
	{
		return $this->_disambiguatingDescription;
	}

	final public function setDisambiguatingDescription(?string $val): void
	{
		$this->_disambiguatingDescription = $val;
	}

	final public function getMainEntryOfPage():? CreativeWorkInterface
	{
		return $this->_mainEntryOfPage;
	}

	final public function setMainEntryOfPage(?CreativeWorkInterface $val): void
	{
		$this->_mainEntryOfPage = $val;
	}

	final public function getSubjectOf():? CreativeWorkInterface
	{
		return $this->_subjectOf;
	}

	final public function setSubjectOf(?CreativeWorkInterface $val): void
	{
		$this->_subjectOf = $val;
	}

	final public function addPotentialAction(ActionInterface $val): void
	{
		$this->_potentialAction[] = $val;
	}

	final public function getPotentialAction(): iterable
	{
		return $this->_potentialAction;
	}

	final public function setPotentialAction(ActionInterface ...$vals): void
	{
		$this->_potentialAction = $vals;
	}

	final public function addSameAs(string $val): void
	{
		$this->_sameAs[] = $val;
	}

	final public function getSameAs(): iterable
	{
		return $this->_sameAs;
	}

	final public function setSameAs(string ...$vals): void
	{
		$this->_sameAs = $vals;
	}

	final public function getUrl():? string
	{
		return $this->_url;
	}

	final public function setUrl(?string $val): void
	{
		if (filter_var($val, FILTER_VALIDATE_URL)) {
			$this->_url = $val;
		}
	}

	final public static function getSchemaUrl(): string
	{
		return sprintf('%s/%s', static::CONTEXT, static::TYPE);
	}

	public function setFromObject(object $data): void
	{
		$this->setIdentifier($data->identifier ?? null);
		$this->setName($data->name ?? null);
		$this->setUrl($data->url ?? null);

		if (isset($data->image)) {
			$this->setImage(new ImageObject($data->image));
		}
	}
}
