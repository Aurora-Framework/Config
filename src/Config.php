<?php

namespace Aurora;

use Aurora\Helper\StatefulTrait;

class Config
{
	/**
	 * Helper trait
	 */
	use StatefulTrait;

	/**
	 * Constructor
	 * @param array|string $data Data to store in Config
	 */
	public function __construct($data = array())
	{
		$this->setData($data);
	}

	/**
	 * Merge two config instances of Config
	 *
	 * @param  \Aurora\Config $Config Instance of config to merge
	 * @return null
	 */
	public function merge(Config $Config, $as = null)
	{
		if ($as !== null) {
			$this->data[(string) $as] = $Config->toArray();
		} else {
			$this->data = array_replace_recursive($this->data, $Config->toArray());
		}
	}

}
