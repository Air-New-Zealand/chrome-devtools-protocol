<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StepIntoRequestBuilder
{
	private $breakOnAsyncCall;
	private $skipList;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): StepIntoRequest
	{
		$instance = new StepIntoRequest();
		$instance->breakOnAsyncCall = $this->breakOnAsyncCall;
		$instance->skipList = $this->skipList;
		return $instance;
	}


	/**
	 * @param bool|null $breakOnAsyncCall
	 *
	 * @return self
	 */
	public function setBreakOnAsyncCall($breakOnAsyncCall): self
	{
		$this->breakOnAsyncCall = $breakOnAsyncCall;
		return $this;
	}


	/**
	 * @param LocationRange[]|null $skipList
	 *
	 * @return self
	 */
	public function setSkipList($skipList): self
	{
		$this->skipList = $skipList;
		return $this;
	}
}
