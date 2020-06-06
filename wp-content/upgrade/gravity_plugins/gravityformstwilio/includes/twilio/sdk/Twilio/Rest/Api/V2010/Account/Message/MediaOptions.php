<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account\Message;

// don't load directly
if ( ! defined( 'ABSPATH' ) ) {
    die();
}

use Twilio\Options;
use Twilio\Values;

abstract class MediaOptions {
    /**
     * @param string $dateCreatedBefore Filter by date created
     * @param string $dateCreated Filter by date created
     * @param string $dateCreatedAfter Filter by date created
     * @return ReadMediaOptions Options builder
     */
    public static function read($dateCreatedBefore = Values::NONE, $dateCreated = Values::NONE, $dateCreatedAfter = Values::NONE) {
        return new ReadMediaOptions($dateCreatedBefore, $dateCreated, $dateCreatedAfter);
    }
}

class ReadMediaOptions extends Options {
    /**
     * @param string $dateCreatedBefore Filter by date created
     * @param string $dateCreated Filter by date created
     * @param string $dateCreatedAfter Filter by date created
     */
    public function __construct($dateCreatedBefore = Values::NONE, $dateCreated = Values::NONE, $dateCreatedAfter = Values::NONE) {
        $this->options['dateCreatedBefore'] = $dateCreatedBefore;
        $this->options['dateCreated'] = $dateCreated;
        $this->options['dateCreatedAfter'] = $dateCreatedAfter;
    }

    /**
     * Only show media created on the given date, or before/after using date inequalities.
     * 
     * @param string $dateCreatedBefore Filter by date created
     * @return $this Fluent Builder
     */
    public function setDateCreatedBefore($dateCreatedBefore) {
        $this->options['dateCreatedBefore'] = $dateCreatedBefore;
        return $this;
    }

    /**
     * Only show media created on the given date, or before/after using date inequalities.
     * 
     * @param string $dateCreated Filter by date created
     * @return $this Fluent Builder
     */
    public function setDateCreated($dateCreated) {
        $this->options['dateCreated'] = $dateCreated;
        return $this;
    }

    /**
     * Only show media created on the given date, or before/after using date inequalities.
     * 
     * @param string $dateCreatedAfter Filter by date created
     * @return $this Fluent Builder
     */
    public function setDateCreatedAfter($dateCreatedAfter) {
        $this->options['dateCreatedAfter'] = $dateCreatedAfter;
        return $this;
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Api.V2010.ReadMediaOptions ' . implode(' ', $options) . ']';
    }
}