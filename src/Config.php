<?php

/**
 * Aurora - Framework
 *
 * Aurora is fast, simple, extensible Framework
 *
 * PHP version 6
 *
 * @category   Framework
 * @package    Aurora
 * @author     VeeeneX <veeenex@gmail.com>
 * @copyright  2015 Caroon
 * @license    MIT
 * @version    0.1.2
 * @link       http://caroon.com/Aurora
 *
 */


namespace Aurora;

/**
 * Config
 *
 * Config
 *
 * @category   Commnon
 * @package    Aurora
 * @author     VeeeneX <veeenex@gmail.com>
 * @copyright  2015 Caroon
 * @license    MIT
 * @version    0.1
 * @link       http://pear.php.net/package/PackageName
*/

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
	public function merge(Config $Config)
	{
		$this->data = array_replace_recursive($this->data, $Config->toArray());
	}

}
