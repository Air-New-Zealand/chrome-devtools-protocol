<?php
namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Fired when HTTP request has finished loading.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class LoadingFinishedEvent implements \JsonSerializable
{
	/**
	 * Request identifier.
	 *
	 * @var string
	 */
	public $requestId;

	/**
	 * Timestamp.
	 *
	 * @var int|float
	 */
	public $timestamp;

	/**
	 * Total number of bytes received for this request.
	 *
	 * @var int|float
	 */
	public $encodedDataLength;

	/**
	 * Set when response was blocked due to being cross-site document response.
	 *
	 * @var bool|null
	 */
	public $blockedCrossSiteDocument;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->requestId)) {
			$instance->requestId = (string)$data->requestId;
		}
		if (isset($data->timestamp)) {
			$instance->timestamp = $data->timestamp;
		}
		if (isset($data->encodedDataLength)) {
			$instance->encodedDataLength = $data->encodedDataLength;
		}
		if (isset($data->blockedCrossSiteDocument)) {
			$instance->blockedCrossSiteDocument = (bool)$data->blockedCrossSiteDocument;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->requestId !== null) {
			$data->requestId = $this->requestId;
		}
		if ($this->timestamp !== null) {
			$data->timestamp = $this->timestamp;
		}
		if ($this->encodedDataLength !== null) {
			$data->encodedDataLength = $this->encodedDataLength;
		}
		if ($this->blockedCrossSiteDocument !== null) {
			$data->blockedCrossSiteDocument = $this->blockedCrossSiteDocument;
		}
		return $data;
	}
}
