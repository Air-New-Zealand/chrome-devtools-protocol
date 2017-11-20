<?php
namespace ChromeDevtoolsProtocol;

use ChromeDevtoolsProtocol\Domain\AccessibilityDomainInterface;
use ChromeDevtoolsProtocol\Domain\AnimationDomainInterface;
use ChromeDevtoolsProtocol\Domain\ApplicationCacheDomainInterface;
use ChromeDevtoolsProtocol\Domain\AuditsDomainInterface;
use ChromeDevtoolsProtocol\Domain\BrowserDomainInterface;
use ChromeDevtoolsProtocol\Domain\CSSDomainInterface;
use ChromeDevtoolsProtocol\Domain\CacheStorageDomainInterface;
use ChromeDevtoolsProtocol\Domain\ConsoleDomainInterface;
use ChromeDevtoolsProtocol\Domain\DOMDebuggerDomainInterface;
use ChromeDevtoolsProtocol\Domain\DOMDomainInterface;
use ChromeDevtoolsProtocol\Domain\DOMSnapshotDomainInterface;
use ChromeDevtoolsProtocol\Domain\DOMStorageDomainInterface;
use ChromeDevtoolsProtocol\Domain\DatabaseDomainInterface;
use ChromeDevtoolsProtocol\Domain\DebuggerDomainInterface;
use ChromeDevtoolsProtocol\Domain\DeviceOrientationDomainInterface;
use ChromeDevtoolsProtocol\Domain\EmulationDomainInterface;
use ChromeDevtoolsProtocol\Domain\HeadlessExperimentalDomainInterface;
use ChromeDevtoolsProtocol\Domain\HeapProfilerDomainInterface;
use ChromeDevtoolsProtocol\Domain\IODomainInterface;
use ChromeDevtoolsProtocol\Domain\IndexedDBDomainInterface;
use ChromeDevtoolsProtocol\Domain\InputDomainInterface;
use ChromeDevtoolsProtocol\Domain\InspectorDomainInterface;
use ChromeDevtoolsProtocol\Domain\LayerTreeDomainInterface;
use ChromeDevtoolsProtocol\Domain\LogDomainInterface;
use ChromeDevtoolsProtocol\Domain\MemoryDomainInterface;
use ChromeDevtoolsProtocol\Domain\NetworkDomainInterface;
use ChromeDevtoolsProtocol\Domain\OverlayDomainInterface;
use ChromeDevtoolsProtocol\Domain\PageDomainInterface;
use ChromeDevtoolsProtocol\Domain\PerformanceDomainInterface;
use ChromeDevtoolsProtocol\Domain\ProfilerDomainInterface;
use ChromeDevtoolsProtocol\Domain\RuntimeDomainInterface;
use ChromeDevtoolsProtocol\Domain\SchemaDomainInterface;
use ChromeDevtoolsProtocol\Domain\SecurityDomainInterface;
use ChromeDevtoolsProtocol\Domain\ServiceWorkerDomainInterface;
use ChromeDevtoolsProtocol\Domain\StorageDomainInterface;
use ChromeDevtoolsProtocol\Domain\SystemInfoDomainInterface;
use ChromeDevtoolsProtocol\Domain\TargetDomainInterface;
use ChromeDevtoolsProtocol\Domain\TetheringDomainInterface;
use ChromeDevtoolsProtocol\Domain\TracingDomainInterface;

/**
 * Interface for Chrome devtools protocol client.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface DevtoolsClientInterface
{
	/**
	 * Inspector domain.
	 *
	 * @experimental
	 */
	public function inspector(): InspectorDomainInterface;


	/**
	 * Memory domain.
	 *
	 * @experimental
	 */
	public function memory(): MemoryDomainInterface;


	/**
	 * Performance domain.
	 */
	public function performance(): PerformanceDomainInterface;


	/**
	 * Actions and events related to the inspected page belong to the page domain.
	 */
	public function page(): PageDomainInterface;


	/**
	 * This domain provides various functionality related to drawing atop the inspected page.
	 *
	 * @experimental
	 */
	public function overlay(): OverlayDomainInterface;


	/**
	 * This domain emulates different environments for the page.
	 */
	public function emulation(): EmulationDomainInterface;


	/**
	 * Security
	 */
	public function security(): SecurityDomainInterface;


	/**
	 * Audits domain allows investigation of page violations and possible improvements.
	 *
	 * @experimental
	 */
	public function audits(): AuditsDomainInterface;


	/**
	 * Network domain allows tracking network activities of the page. It exposes information about http, file, data and other requests and responses, their headers, bodies, timing, etc.
	 */
	public function network(): NetworkDomainInterface;


	/**
	 * Database domain.
	 *
	 * @experimental
	 */
	public function database(): DatabaseDomainInterface;


	/**
	 * IndexedDB domain.
	 *
	 * @experimental
	 */
	public function indexedDB(): IndexedDBDomainInterface;


	/**
	 * CacheStorage domain.
	 *
	 * @experimental
	 */
	public function cacheStorage(): CacheStorageDomainInterface;


	/**
	 * Query and modify DOM storage.
	 *
	 * @experimental
	 */
	public function domStorage(): DOMStorageDomainInterface;


	/**
	 * ApplicationCache domain.
	 *
	 * @experimental
	 */
	public function applicationCache(): ApplicationCacheDomainInterface;


	/**
	 * This domain exposes DOM read/write operations. Each DOM Node is represented with its mirror object that has an <code>id</code>. This <code>id</code> can be used to get additional information on the Node, resolve it into the JavaScript object wrapper, etc. It is important that client receives DOM events only for the nodes that are known to the client. Backend keeps track of the nodes that were sent to the client and never sends the same node twice. It is client's responsibility to collect information about the nodes that were sent to the client.<p>Note that <code>iframe</code> owner elements will return corresponding document elements as their child nodes.</p>
	 */
	public function dom(): DOMDomainInterface;


	/**
	 * This domain exposes CSS read/write operations. All CSS objects (stylesheets, rules, and styles) have an associated <code>id</code> used in subsequent operations on the related object. Each object type has a specific <code>id</code> structure, and those are not interchangeable between objects of different kinds. CSS objects can be loaded using the <code>get*ForNode()</code> calls (which accept a DOM node id). A client can also keep track of stylesheets via the <code>styleSheetAdded</code>/<code>styleSheetRemoved</code> events and subsequently load the required stylesheet contents using the <code>getStyleSheet[Text]()</code> methods.
	 *
	 * @experimental
	 */
	public function css(): CSSDomainInterface;


	/**
	 * This domain facilitates obtaining document snapshots with DOM, layout, and style information.
	 *
	 * @experimental
	 */
	public function domSnapshot(): DOMSnapshotDomainInterface;


	/**
	 * Input/Output operations for streams produced by DevTools.
	 */
	public function io(): IODomainInterface;


	/**
	 * DOM debugging allows setting breakpoints on particular DOM operations and events. JavaScript execution will stop on these operations as if there was a regular breakpoint set.
	 */
	public function domDebugger(): DOMDebuggerDomainInterface;


	/**
	 * Supports additional targets discovery and allows to attach to them.
	 */
	public function target(): TargetDomainInterface;


	/**
	 * This domain provides experimental commands only supported in headless mode.
	 *
	 * @experimental
	 */
	public function headlessExperimental(): HeadlessExperimentalDomainInterface;


	/**
	 * ServiceWorker domain.
	 *
	 * @experimental
	 */
	public function serviceWorker(): ServiceWorkerDomainInterface;


	/**
	 * Input domain.
	 */
	public function input(): InputDomainInterface;


	/**
	 * LayerTree domain.
	 *
	 * @experimental
	 */
	public function layerTree(): LayerTreeDomainInterface;


	/**
	 * DeviceOrientation domain.
	 *
	 * @experimental
	 */
	public function deviceOrientation(): DeviceOrientationDomainInterface;


	/**
	 * Tracing domain.
	 *
	 * @experimental
	 */
	public function tracing(): TracingDomainInterface;


	/**
	 * Animation domain.
	 *
	 * @experimental
	 */
	public function animation(): AnimationDomainInterface;


	/**
	 * Accessibility domain.
	 *
	 * @experimental
	 */
	public function accessibility(): AccessibilityDomainInterface;


	/**
	 * Storage domain.
	 *
	 * @experimental
	 */
	public function storage(): StorageDomainInterface;


	/**
	 * Provides access to log entries.
	 */
	public function log(): LogDomainInterface;


	/**
	 * The SystemInfo domain defines methods and events for querying low-level system information.
	 *
	 * @experimental
	 */
	public function systemInfo(): SystemInfoDomainInterface;


	/**
	 * The Tethering domain defines methods and events for browser port binding.
	 *
	 * @experimental
	 */
	public function tethering(): TetheringDomainInterface;


	/**
	 * The Browser domain defines methods and events for browser managing.
	 */
	public function browser(): BrowserDomainInterface;


	/**
	 * Provides information about the protocol schema.
	 */
	public function schema(): SchemaDomainInterface;


	/**
	 * Runtime domain exposes JavaScript runtime by means of remote evaluation and mirror objects. Evaluation results are returned as mirror object that expose object type, string representation and unique identifier that can be used for further object reference. Original objects are maintained in memory unless they are either explicitly released or are released along with the other objects in their object group.
	 */
	public function runtime(): RuntimeDomainInterface;


	/**
	 * Debugger domain exposes JavaScript debugging capabilities. It allows setting and removing breakpoints, stepping through execution, exploring stack traces, etc.
	 */
	public function debugger(): DebuggerDomainInterface;


	/**
	 * This domain is deprecated - use Runtime or Log instead.
	 */
	public function console(): ConsoleDomainInterface;


	/**
	 * Profiler domain.
	 */
	public function profiler(): ProfilerDomainInterface;


	/**
	 * HeapProfiler domain.
	 *
	 * @experimental
	 */
	public function heapProfiler(): HeapProfilerDomainInterface;
}