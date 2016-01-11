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

	public function getDescription()
	{
		return '{% break %} and {% continue %} twig tags';
	}

	public function getDocumentationUrl()
	{
		return 'https://github.com/marionnewlevant/craft-mnbreakandcontinue';
	}

	public function getVersion()
	{
		return '1.1';
	}

	public function getReleaseFeedUrl()
	{
		return 'https://raw.githubusercontent.com/marionnewlevant/craft-mnbreakandcontinue/master/releases.json';
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
