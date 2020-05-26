<?php
namespace shgysk8zer0\PHPSchema;

use \shgysk8zer0\PHPSchema\Interfaces\{
	EntryPointInterface,
	SoftwareApplicationInterface,
};

class EntryPoint extends Intangible implements EntryPointInterface
{
	public const TYPE = 'EntryPoint';

	private $_actionApplication = null;

	private $_applicationPlatform = null;

	private $_contentType = null;

	private $_encodingType = null;

	private $httpMethod = null;

	private $_urlTemplate = null;

	public function jsonSerialize(): array
	{
		return array_merge(
			parent::jsonSerialize(),
			[
				'actionApplication'   => $this->getActionApplication(),
				'applicationPlatform' => $this->getApplicationPlatform(),
				'contentType'         => $this->getContentType(),
				'encodingType'        => $this->getEncodingType(),
				'httpMethod'          => $this->getHttpMethod(),
				'urlTemplate'         => $this->getUrlTemplate(),
			]
		);
	}

	public function getActionApplication():? SoftwareApplicationInterface
	{
		return $this->_actionApplication;
	}

	public function setActionApplication(?SoftwareApplicationInterface $val): void
	{
		$this->_actionApplication = $val;
	}

	public function getApplicationPlatform():? string
	{
		return $this->_applicationPlatform;
	}

	public function setApplicatioinPlatform(?string $val): void
	{
		$this->_applicationPlatform = $val;
	}

	public function getContentType():? string
	{
		return $this->_contentType;
	}

	public function setContentType(?string $val): void
	{
		$this->_contentType = $val;
	}

	public function getEncodingType():? string
	{
		return $this->_encodingType;
	}

	public function setEncodingType(?string $val): void
	{
		$this->_encodingType = $val;
	}

	public function getHttpMethod():? string
	{
		return $this->_httpMethod;
	}

	public function setHttpMethod(?string $val): void
	{
		$this->_httpMethod = $val;
	}

	public function getUrlTemplate():? string
	{
		return $this->_urlTemplate;
	}

	public function setUrlTemplate(?string $val): void
	{
		$this->_urlTemplate = $val;
	}
}
