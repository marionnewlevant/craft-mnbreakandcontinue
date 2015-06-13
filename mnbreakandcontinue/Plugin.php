<?php
namespace craft\plugins\mnbreakandcontinue;

use craft\plugins\mnbreakandcontinue\twigextensions\Twig_Extension;

/**
 * MN Break and Continue
 *
 * @package   Craft
 * @author    Marion Newlevant
 * @copyright Copyright (c) 2014, Marion Newlevant
 * @license   MIT
 * @link      https://github.com/marionnewlevant/craft-mnbreakandcontinue
 */

class Plugin extends \craft\app\base\Plugin {

	public function addTwigExtension()
	// this gets called by _addPluginTwigExtensions in app/web/View.php. Should return \Twig_Extension
	{
		return new Twig_Extension();
	}
}
