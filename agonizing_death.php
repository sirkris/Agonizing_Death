<?php

/**
 * Agonizing Death.
 * 
 * @package Agonizing_Death
 * @author Kris Craig <kriscraig@php.net>
 * @license WTFPLv3
 */

/**
 * Murders your PHP interpreter for no reason.
 * 
 * Having a bad day?  Free health care got you down?  Don't waste your time taking 
 * deep breaths and confronting the root causes of your depression!  That's for 
 * wusses.  Just run this script, instead!  Whether you're a frustrated Mariners fan 
 * or your boss asked you to code something in Magento, this simple function will 
 * serve as an outlet for your anger and bring some tiny amount of satisfaction to 
 * your otherwise hopeless, miserable existence.  There, feel better?
 * 
 * @throws Exception Because it can.
 */
function agonizing_death()
{
	try
	{
		throw new Exception( "Stop throwing yourself." );
	}
	catch( Exception $e )
	{
		agonizing_death();
	}
}

/* Uncomment if you're having the urge to beat the crap out of something.  --Kris */
//agonizing_death();
