<?php
namespace ChromeDevtoolsProtocol\Model\CacheStorage;

/**
 * Request for CacheStorage.requestEntries command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RequestEntriesRequest implements \JsonSerializable
{
	/**
	 * ID of cache to get entries from.
	 *
	 * @var string
	 */
	public $cacheId;

	/**
	 * Number of records to skip.
	 *
	 * @var int
	 */
	public $skipCount;

	/**
	 * Number of records to fetch.
	 *
	 * @var int
	 */
	public $pageSize;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->cacheId)) {
			$instance->cacheId = (string)$data->cacheId;
		}
		if (isset($data->skipCount)) {
			$instance->skipCount = (int)$data->skipCount;
		}
		if (isset($data->pageSize)) {
			$instance->pageSize = (int)$data->pageSize;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->cacheId !== null) {
			$data->cacheId = $this->cacheId;
		}
		if ($this->skipCount !== null) {
			$data->skipCount = $this->skipCount;
		}
		if ($this->pageSize !== null) {
			$data->pageSize = $this->pageSize;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return RequestEntriesRequestBuilder
	 */
	public static function builder(): RequestEntriesRequestBuilder
	{
		return new RequestEntriesRequestBuilder();
	}
}