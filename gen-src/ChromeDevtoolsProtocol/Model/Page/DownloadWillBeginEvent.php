<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Fired when page is about to start a download.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DownloadWillBeginEvent implements \JsonSerializable
{
	/**
	 * Id of the frame that caused download to begin.
	 *
	 * @var string
	 */
	public $frameId;

	/**
	 * URL of the resource being downloaded.
	 *
	 * @var string
	 */
	public $url;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
		}
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		return $data;
	}
}
