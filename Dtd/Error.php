<?php

namespace Soothsilver\DtdParser\Dtd;

/**
 * Represents an error or a warning produced during the parsing of a DTD file.
 */
class Error
{
    /**
     * Error message indicating where and how the XML specification was violated.
     * @var string
     */
    private $message;

    /**
     * Gets the error message indicating where and how the XML specification was violated.
     * @return string Error message indicating where and how the XML specification was violated.
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Constructs a new instance of the Error class. For internal use only.
     * @param string $message The error message including line number.
     */
    public function __construct($message)
    {
        $this->message = $message;
    }
}
