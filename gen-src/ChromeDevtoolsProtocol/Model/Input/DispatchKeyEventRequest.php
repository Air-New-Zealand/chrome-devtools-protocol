<?php

namespace ChromeDevtoolsProtocol\Model\Input;

/**
 * Request for Input.dispatchKeyEvent command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DispatchKeyEventRequest implements \JsonSerializable
{
	/**
	 * Type of the key event.
	 *
	 * @var string
	 */
	public $type;

	/**
	 * Bit field representing pressed modifier keys. Alt=1, Ctrl=2, Meta/Command=4, Shift=8 (default: 0).
	 *
	 * @var int|null
	 */
	public $modifiers;

	/**
	 * Time at which the event occurred.
	 *
	 * @var int|float
	 */
	public $timestamp;

	/**
	 * Text as generated by processing a virtual key code with a keyboard layout. Not needed for for `keyUp` and `rawKeyDown` events (default: "")
	 *
	 * @var string|null
	 */
	public $text;

	/**
	 * Text that would have been generated by the keyboard if no modifiers were pressed (except for shift). Useful for shortcut (accelerator) key handling (default: "").
	 *
	 * @var string|null
	 */
	public $unmodifiedText;

	/**
	 * Unique key identifier (e.g., 'U+0041') (default: "").
	 *
	 * @var string|null
	 */
	public $keyIdentifier;

	/**
	 * Unique DOM defined string value for each physical key (e.g., 'KeyA') (default: "").
	 *
	 * @var string|null
	 */
	public $code;

	/**
	 * Unique DOM defined string value describing the meaning of the key in the context of active modifiers, keyboard layout, etc (e.g., 'AltGr') (default: "").
	 *
	 * @var string|null
	 */
	public $key;

	/**
	 * Windows virtual key code (default: 0).
	 *
	 * @var int|null
	 */
	public $windowsVirtualKeyCode;

	/**
	 * Native virtual key code (default: 0).
	 *
	 * @var int|null
	 */
	public $nativeVirtualKeyCode;

	/**
	 * Whether the event was generated from auto repeat (default: false).
	 *
	 * @var bool|null
	 */
	public $autoRepeat;

	/**
	 * Whether the event was generated from the keypad (default: false).
	 *
	 * @var bool|null
	 */
	public $isKeypad;

	/**
	 * Whether the event was a system key event (default: false).
	 *
	 * @var bool|null
	 */
	public $isSystemKey;

	/**
	 * Whether the event was from the left or right side of the keyboard. 1=Left, 2=Right (default: 0).
	 *
	 * @var int|null
	 */
	public $location;

	/**
	 * Editing commands to send with the key event (e.g., 'selectAll') (default: []). These are related to but not equal the command names used in `document.execCommand` and NSStandardKeyBindingResponding. See https://source.chromium.org/chromium/chromium/src/+/master:third_party/blink/renderer/core/editing/commands/editor_command_names.h for valid command names.
	 *
	 * @var string[]|null
	 */
	public $commands;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		if (isset($data->modifiers)) {
			$instance->modifiers = (int)$data->modifiers;
		}
		if (isset($data->timestamp)) {
			$instance->timestamp = $data->timestamp;
		}
		if (isset($data->text)) {
			$instance->text = (string)$data->text;
		}
		if (isset($data->unmodifiedText)) {
			$instance->unmodifiedText = (string)$data->unmodifiedText;
		}
		if (isset($data->keyIdentifier)) {
			$instance->keyIdentifier = (string)$data->keyIdentifier;
		}
		if (isset($data->code)) {
			$instance->code = (string)$data->code;
		}
		if (isset($data->key)) {
			$instance->key = (string)$data->key;
		}
		if (isset($data->windowsVirtualKeyCode)) {
			$instance->windowsVirtualKeyCode = (int)$data->windowsVirtualKeyCode;
		}
		if (isset($data->nativeVirtualKeyCode)) {
			$instance->nativeVirtualKeyCode = (int)$data->nativeVirtualKeyCode;
		}
		if (isset($data->autoRepeat)) {
			$instance->autoRepeat = (bool)$data->autoRepeat;
		}
		if (isset($data->isKeypad)) {
			$instance->isKeypad = (bool)$data->isKeypad;
		}
		if (isset($data->isSystemKey)) {
			$instance->isSystemKey = (bool)$data->isSystemKey;
		}
		if (isset($data->location)) {
			$instance->location = (int)$data->location;
		}
		if (isset($data->commands)) {
			$instance->commands = [];
			foreach ($data->commands as $item) {
				$instance->commands[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->modifiers !== null) {
			$data->modifiers = $this->modifiers;
		}
		if ($this->timestamp !== null) {
			$data->timestamp = $this->timestamp;
		}
		if ($this->text !== null) {
			$data->text = $this->text;
		}
		if ($this->unmodifiedText !== null) {
			$data->unmodifiedText = $this->unmodifiedText;
		}
		if ($this->keyIdentifier !== null) {
			$data->keyIdentifier = $this->keyIdentifier;
		}
		if ($this->code !== null) {
			$data->code = $this->code;
		}
		if ($this->key !== null) {
			$data->key = $this->key;
		}
		if ($this->windowsVirtualKeyCode !== null) {
			$data->windowsVirtualKeyCode = $this->windowsVirtualKeyCode;
		}
		if ($this->nativeVirtualKeyCode !== null) {
			$data->nativeVirtualKeyCode = $this->nativeVirtualKeyCode;
		}
		if ($this->autoRepeat !== null) {
			$data->autoRepeat = $this->autoRepeat;
		}
		if ($this->isKeypad !== null) {
			$data->isKeypad = $this->isKeypad;
		}
		if ($this->isSystemKey !== null) {
			$data->isSystemKey = $this->isSystemKey;
		}
		if ($this->location !== null) {
			$data->location = $this->location;
		}
		if ($this->commands !== null) {
			$data->commands = [];
			foreach ($this->commands as $item) {
				$data->commands[] = $item;
			}
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return DispatchKeyEventRequestBuilder
	 */
	public static function builder(): DispatchKeyEventRequestBuilder
	{
		return new DispatchKeyEventRequestBuilder();
	}
}
