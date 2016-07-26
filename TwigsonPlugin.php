<?php
/**
 * Twigson
 * A Craft CMS Twig Filter for reading JSON file or url
 *
 * @author    Hidayat Sagita
 * @see       https://github.com/hdytsgt
 */

namespace Craft;

class TwigsonPlugin extends BasePlugin
{
    public function getName()
    {
        return Craft::t( 'Twigson' );
    }

    public function getVersion()
    {
        return '1.0.0';
    }

    public function getDeveloper()
    {
        return 'Hidayat Sagita';
    }

    public function getDeveloperUrl()
    {
        return 'https://github.com/hdytsgt';
    }
    
    public function getPluginUrl()
    {
        return 'https://github.com/hdytsgt/Twigson';
    }

    public function getDocumentationUrl()
    {
        return $this->getPluginUrl() . '/blob/master/README.md';
    }

    public function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/hdytsgt/Twigson/master/changelog.json';
    }
    
    public function getSourceLanguage()
    {
        return 'en';
    }

    public function hasCpSection()
    {
        return false;
    }

    public function addTwigExtension()
    {
        Craft::import( 'plugins.twigson.twigextensions.TwigsonTwigExtension' );

        return new TwigsonTwigExtension();
    }

}