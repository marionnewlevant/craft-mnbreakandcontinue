<?php
namespace craft\plugins\mnbreakandcontinue\twigextensions;

use craft\plugins\mnbreakandcontinue\twigextensions\Break_TokenParser;
use craft\plugins\mnbreakandcontinue\twigextensions\Continue_TokenParser;

/**
 * MN Break and Continue
 *
 * @package   Craft
 * @author    Marion Newlevant
 * @copyright Copyright (c) 2014, Marion Newlevant
 * @license   MIT
 * @link      https://github.com/marionnewlevant/craft-mnbreakandcontinue
 */

class Twig_Extension extends \Twig_Extension
{
	public function getTokenParsers()
	{
		return [
			new Break_TokenParser(),
			new Continue_TokenParser(),
		];
	}

	public function getName()
	{
		return 'MN Break and Continue';
	}
}
