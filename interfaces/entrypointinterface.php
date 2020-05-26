<?php
namespace shgysk8zer0\PHPSchema\Interfaces;

interface EntryPointInterface extends IntangibleInterface
{
	public function getActionApplication():? SoftwareApplicationInterface;

	public function setActionApplication(?SoftwareApplicationInterface $val): void;

	public function getApplicationPlatform():? string;

	public function setApplicatioinPlatform(?string $val): void;

	public function getContentType():? string;

	public function setContentType(?string $val): void;

	public function getEncodingType():? string;

	public function setEncodingType(?string $val): void;

	public function getHttpMethod():? string;

	public function setHttpMethod(?string $val): void;

	public function getUrlTemplate():? string;

	public function setUrlTemplate(?string $val): void;
}
