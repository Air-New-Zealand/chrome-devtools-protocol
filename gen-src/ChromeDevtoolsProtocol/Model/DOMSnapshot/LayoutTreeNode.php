<?php
namespace ChromeDevtoolsProtocol\Model\DOMSnapshot;

use ChromeDevtoolsProtocol\Model\DOM\Rect;

/**
 * Details of an element in the DOM tree with a LayoutObject.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class LayoutTreeNode implements \JsonSerializable
{
	/**
	 * The index of the related DOM node in the `domNodes` array returned by `getSnapshot`.
	 *
	 * @var int
	 */
	public $domNodeIndex;

	/**
	 * The absolute position bounding box.
	 *
	 * @var Rect
	 */
	public $boundingBox;

	/**
	 * Contents of the LayoutText, if any.
	 *
	 * @var string|null
	 */
	public $layoutText;

	/**
	 * The post-layout inline text nodes, if any.
	 *
	 * @var InlineTextBox[]|null
	 */
	public $inlineTextNodes;

	/**
	 * Index into the `computedStyles` array returned by `getSnapshot`.
	 *
	 * @var int|null
	 */
	public $styleIndex;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->domNodeIndex)) {
			$instance->domNodeIndex = (int)$data->domNodeIndex;
		}
		if (isset($data->boundingBox)) {
			$instance->boundingBox = Rect::fromJson($data->boundingBox);
		}
		if (isset($data->layoutText)) {
			$instance->layoutText = (string)$data->layoutText;
		}
		if (isset($data->inlineTextNodes)) {
			$instance->inlineTextNodes = [];
			foreach ($data->inlineTextNodes as $item) {
				$instance->inlineTextNodes[] = InlineTextBox::fromJson($item);
			}
		}
		if (isset($data->styleIndex)) {
			$instance->styleIndex = (int)$data->styleIndex;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->domNodeIndex !== null) {
			$data->domNodeIndex = $this->domNodeIndex;
		}
		if ($this->boundingBox !== null) {
			$data->boundingBox = $this->boundingBox->jsonSerialize();
		}
		if ($this->layoutText !== null) {
			$data->layoutText = $this->layoutText;
		}
		if ($this->inlineTextNodes !== null) {
			$data->inlineTextNodes = [];
			foreach ($this->inlineTextNodes as $item) {
				$data->inlineTextNodes[] = $item->jsonSerialize();
			}
		}
		if ($this->styleIndex !== null) {
			$data->styleIndex = $this->styleIndex;
		}
		return $data;
	}
}
