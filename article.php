<?php

namespace shgysk8zer0\PHPSchema;
use \shgysk8zer0\PHPSchema\Interfaces\{ArticleInterface};

class Article extends CreativeWork implements ArticleInterface
{
	public const TYPE = 'Article';

	private $_articleBody = null;

	private $_articleSection = null;

	private $_pageEnd = null;

	private $_pageStart = null;

	private $_pagination = null;

	public function jsonSerialize(): array
	{
		return array_merge(
			parent::jsonSerialize(),
			[
				'articleBody'    => $this->getArticleBody(),
				'articleSection' => $this->getArticleSection(),
				'pageEnd'        => $this->getPageEnd(),
				'pageStart'      => $this->getPageStart(),
				'pagination'     => $this->getPagination(),
				'wordCount'      => $this->getWordCount(),
			]
		);
	}
	public function getArticleBody():? string
	{
		return $this->_articleBody;
	}

	public function setArticleBody(?string $val): void
	{
		$this->_articleBody = $val;
	}

	public function getArticleSection():? string
	{
		return $this->_articleSection;
	}

	public function setArticleSection(?string $val): void
	{
		$this->_articleSection = $val;
	}

	public function getPageEnd():? int
	{
		return $this->_pageEnd;
	}

	public function setPageEnd(?int $val): void
	{
		$this->_pageEnd = $val;
	}

	public function getPageStart():? int
	{
		return $this->_pageStart;
	}

	public function setPageStart(?int $val): void
	{
		$this->_pageStart = $val;
	}

	public function getPagination():? string
	{
		return $this->_pagination;
	}

	public function setPagination(?string $val): void
	{
		$this->_pagination = $val;
	}

	public function getWordCount():? int
	{
		if (isset($this->_articleBody)) {
			return str_word_count(strip_tags($this->getArticleBody()), 0);
		} else {
			return 0;
		}
	}
}
