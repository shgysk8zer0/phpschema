<?php
namespace shgysk8zer0\PHPSchema;

use \shgysk8zer0\PHPSchema\Interfaces\{ImageObjectInterface, ThingInterface};
use \shgysk8zer0\PHPAPI\Interfaces\{LoggerAwareInterface};
use \shgysk8zer0\PHPAPI\Traits\{LoggerAwareTrait};
use \shgysk8zer0\PHPAPI\{NullLogger, UUID};

class Thing implements ThingInterface, LoggerAwareInterface
{
	use LoggerAwareTrait;

	public const TYPE = 'Thing';

	public const CONTEXT = 'https://schema.org';

	private $_identifier = null;

	private $_name = null;

	private $_image = null;

	private $_description = null;

	private $_url = null;

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
			'@context'    => $this::CONTEXT,
			'@type'       => $this::TYPE,
			'identifier'  => $this->getIdentifier(),
			'name'        => $this->getName(),
			'description' => $this->getDescription(),
			'image'       => $this->getImage(),
			'url'         => $this->getUrl(),
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

	final public function getDescription():? string
	{
		return $this->_description;
	}

	final public function setDescription(?string $val): void
	{
		$this->_description = $val;
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
