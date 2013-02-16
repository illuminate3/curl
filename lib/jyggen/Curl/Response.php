<?php
/**
 * A simple and lightweight cURL library with support for multiple requests in parallel.
 *
 * @package     Curl
 * @version     2.0
 * @author      Jonas Stendahl
 * @license     MIT License
 * @copyright   2013 Jonas Stendahl
 * @link        http://github.com/jyggen/curl
 */

namespace jyggen\Curl;

class Response extends \Symfony\Component\HttpFoundation\Response
{

	public static function forge(Session $session, $content)
	{

		return new Response($content);

	}

}
