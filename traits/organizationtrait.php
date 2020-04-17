<?php
namespace shgysk8zer0\PHPSchema\Traits;
use \shgysk8zer0\PHPSchema\Interfaces\{ImageObjectInterface};

trait OrganizationTrait
{
	use ContactableTrait;

	private $_logo = null;

	protected function _orgJSON(): array
	{
		return array_merge(
			$this->_contactableJSON(),
			['logo' => $this->getLogo()]
		);
	}

	public function getLogo():? ImageObjectInterface
	{
		return $this->_logo;
	}

	public function setLogo(?ImageObjectInterface $val): void
	{
		$this->_logo = $val;
	}
}
