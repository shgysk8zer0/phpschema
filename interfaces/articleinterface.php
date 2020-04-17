<?php
namespace shgysk8zer0\PHPSchema\Interfaces;

interface ArticleInterface extends CreativeWorkInterface
{
	public function getArticleBody():? string;

	public function setArticleBody(?string $val): void;

	public function getArticleSection():? string;

	public function setArticleSection(?string $val): void;

	public function getPageEnd():? int;

	public function setPageEnd(?int $val): void;

	public function getPageStart():? int;

	public function setPageStart(?int $val): void;

	public function getPagination():? string;

	public function setPagination(?string $val): void;

	public function getWordCount():? int;

	// No setter. Determine from article text
}
