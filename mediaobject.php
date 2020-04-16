<?php
namespace shgysk8zer0\PHPSchema;
use \shgysk8zer0\PHPSchema\Interfaces\{MediaObjectInterface};
use \DateTimeInterface;
use \DateTimeImmutable;
use \InvalidArgumentException;

class MediaObject extends CreativeWork implements MediaObjectInterface
{

	public const TYPE = 'MediaObject';

	private $_bitRate = null;

	private $_contentSize = null;

	private $_contentUrl = null;

	private $_embedUrl = null;

	private $_encodingFormat = null;

	private $_height = null;

	private $_uploadDate = null;

	private $_width = null;

	public function jsonSerialize(): array
	{
		return array_merge(
			parent::jsonSerialize(),
			[
				'bitRate'        => $this->getBitRate(),
				'contentSize'    => $this->getContentSize(),
				'contentUrl'     => $this->getContentUrl(),
				'embedUrl'       => $this->getEmbedUrl(),
				'encodingFormat' => $this->getEncodingFormat(),
				'height'         => $this->getHeight(),
				'width'          => $this->getWidth(),
				'uploadDate'     => $this->getUploadDateAsString(),
			]
		);
	}

	public function getBitRate():? string
	{
		return $this->_bitRate;
	}

	public function setBitRate(?string $val): void
	{
		$this->_bitRate = $val;
	}

	public function getContentSize():? string
	{
		return $this->_contentSize;
	}

	public function setContentSize(?string $val): void
	{
		$this->_contentSize = $val;
	}

	public function getContentUrl():? string
	{
		return $this->_contentUrl;
	}

	public function setContentUrl(?string $val): void
	{
		if (isset($val) and ! filter_var($val, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED)) {
			throw new InvalidArgumentException(sprintf('%s is not a valid URL with path', $val));
		} else {
			$this->_contentUrl = $val;
		}
	}

	public function getEmbedUrl():? string
	{
		return $this->_embedUrl;
	}

	public function setEmbedUrl(?string $val): void
	{
		if (isset($val) and ! filter_var($val, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED)) {
			throw new InvalidArgumentException(sprintf('%s is not a valid embedding URL', $val));
		} else {
			$this->_embedUrl = $val;
		}
	}

	public function getEncodingFormat():? string
	{
		return $this->_encodingFormat;
	}

	public function setEncodingFormat(?string $val): void
	{
		$this->_encodingFormat = $val;
	}

	final public function getHeight():? int
	{
		return $this->_height;
	}

	final public function setHeight(?int $val): void
	{
		$this->_height = $val;
	}

	final public function getUploadDate():? DateTimeInterface
	{
		return $this->_uploadDate;
	}

	public function getUploadDateAsString():? string
	{
		return $this->_stringifyDate($this->getUploadDate());
	}

	final public function setUploadDate(?DateTimeInterface $val): void
	{
		$this->_uploadDate = $val;
	}

	final public function getWidth():? int
	{
		return $this->_width;
	}

	final public function setWidth(?int $val): void
	{
		$this->_width = $val;
	}

	public function setFromObject(?object $data): void
	{
		parent::setFromObject($data);
		$this->setHeight($data->height ?? null);
		$this->setWidth($data->width ?? null);

		if (isset($data->uploadDate)) {
			$this->setUploadDate(is_string($data->uploadDate)
				? new DateTimeImmutable($data->uploadDate)
				: $data->uploadDate
			);
		}
	}
}
