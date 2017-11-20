<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\DOMSnapshot\GetSnapshotRequest;
use ChromeDevtoolsProtocol\Model\DOMSnapshot\GetSnapshotResponse;

class DOMSnapshotDomain implements DOMSnapshotDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function getSnapshot(ContextInterface $ctx, GetSnapshotRequest $request): GetSnapshotResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'DOMSnapshot.getSnapshot', $request);
		return GetSnapshotResponse::fromJson($response);
	}
}