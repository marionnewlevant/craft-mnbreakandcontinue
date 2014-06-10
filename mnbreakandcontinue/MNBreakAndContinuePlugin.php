<?php
namespace Craft;

/**
 * MN Break and Continue
 *
 * @package   Craft
 * @author    Marion Newlevant
 * @copyright Copyright (c) 2014, Marion Newlevant
 * @license   MIT
 * @link      https://github.com/marionnewlevant/craft-mnbreakandcontinue
 */

class MNBreakAndContinuePlugin extends BasePlugin
{
	public function getName()
	{
		return Craft::t('MN Break and Continue');
	}

	public function getVersion()
	{
		return '1.0';
	}

	public function getDeveloper()
	{
		return 'Marion Newlevant';
	}

	public function getDeveloperUrl()
	{
		return 'http://marion.newlevant.com';
	}

	public function addTwigExtension()
	{
		Craft::import('plugins.mnbreakandcontinue.twigextensions.MNBreakAndContinueTwigExtension');
		return new MNBreakAndContinueTwigExtension();
	}
}
