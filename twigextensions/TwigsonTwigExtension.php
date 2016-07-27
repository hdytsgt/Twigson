<?php
/**
 * Class TwigsonTwigExtension
 *
 * @author    Hidayat Sagita
 * @see       https://github.com/hdytsgt
 */

namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class TwigsonTwigExtension extends \Twig_Extension
{

	/**
	 * Extension Name
	 * 
	 * @return String
	 */
	public function getName()
	{
		return 'Twigson';
	}

	/**
	 * Filter
	 * 
	 * @return Array
	 */
	public function getFilters()
	{
		return [
			'twigson' => new \Twig_Filter_Method( $this, 'twigsonFilter', [ 'needs_context' => true ] )
		];
	}

	/**
	 * Add Twigson functionality into filter
	 *
	 * @param  Array  $context
	 * @param  String $path
	 * 
	 * @return Mixed
	 */
	public function twigsonFilter( $context, $path ) 
	{

		if( $path ) 
		{
			$json = @file_get_contents( $path );

			return ( $json ) ? json_decode( $json, true ) : [];
		}
	}
}