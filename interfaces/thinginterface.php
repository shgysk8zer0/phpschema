<?php
namespace shgysk8zer0\PHPSchema\Interfaces;
use \JsonSerializable;

interface ThingInterface extends JsonSerializable
{
	public function getName():? string;

	public function setName(?string $val): void;

	public function getAlternateName():? string;

	public function setAlternateName(?string $val): void;

	public function getDescription():? string;

	public function setDescription(?string $val): void;

	public function getIdentifier():? string;

	public function setIdentifier(?string $val): void;

	public function getImage():? ImageObjectInterface;

	public function setImage(?ImageObjectInterface $val): void;

	public function getAdditionalType():? string;

	public function setAdditionalType(?string $val): void;

	public function getDisambiguatingDescription():? string;

	public function setDisambiguatingDescription(?string $val): void;

	public function getMainEntryOfPage():? CreativeWorkInterface;

	public function setMainEntryOfPage(?CreativeWorkInterface $val): void;

	public function getSubjectOf():? CreativeWorkInterface;

	public function setSubjectOf(?CreativeWorkInterface $val): void;

	public function addPotentialAction(ActionInterface $val): void;

	public function getPotentialAction(): iterable;

	public function setPotentialAction(ActionInterface ...$vals): void;

	public function addSameAs(string $val): void;

	public function getSameAs(): iterable;

	public function setSameAs(string ...$vals): void;

	public function getUrl():? string;

	public function setUrl(?string $val): void;

	public function setFromObject(object $data): void;

	public static function getSchemaUrl(): string;
}
