<?php

class Logger
{
	protected $log = array();

	/**
	 * Add to the log.
	 * @param string $key   
	 * @param string $value 
	 */
	public function add( $key, $value )
	{
		$this->log[$key] = $value;
	}

	/**
	 * Add an array of data to the log
	 * @param string $key   
	 * @param string $value 
	 */
	public function addArray( $key, $value )
	{
		$this->log[$key][] = $value;
	}

	/**
	 * Returns the log
	 * @return array 
	 */
	public function get()
	{
		return $this->log;
	}

	/**
	 * Loops through the media queries of the images and
	 * saves a human friendly description of the setting.
	 * @param  array $images 
	 */
	public function log_media_queries( $images )
    {
        foreach ( $images as $image ) {
            if ( ! isset($image['media_query']) ) continue;
            $size = $image['size'];
            $property = $image['media_query']['property'];
            $value = $image['media_query']['value'];
            $this->log['Media queries'][] = "\n- Use $size when $property is $value";
        }
    }
}