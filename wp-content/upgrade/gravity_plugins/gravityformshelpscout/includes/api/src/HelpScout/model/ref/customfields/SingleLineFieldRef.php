<?php
namespace HelpScout\model\ref\customfields;

// don't load directly
if ( ! defined( 'ABSPATH' ) ) {
    die();
}

use HelpScout\ValidationException;

class SingleLineFieldRef extends AbstractCustomFieldRef
{
    const LIMIT = 255;

    public function validate($value)
    {
        if (strlen($value) > self::LIMIT) {
            throw new ValidationException('Single line responses must be less than ' . self::LIMIT . ' characters long');
        }
    }
}
