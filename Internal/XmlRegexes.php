<?php
namespace Soothsilver\DtdParser\Internal;

/**
 * Contains regular expressions for various productions in the XML specification
 */
class XmlRegexes {
    /**
     * @var string The NameChar production.
     */
    public $NameChar;
    /**
     * @var string The NameStartChar production.
     */
    public $NameStartChar;
    /**
     * @var string The NAME production.
     */
    public $Name;
    /**
     * @var string The NMTOKEN production.
     */
    public $NmToken;

    /**
     * Initializes members with productions from the specification.
     */
    public function __construct()
    {
        $this->NameChar = "[:A-Z_a-z\\-.0-9\\xC0-\\xD6\\xD8-\\xF6\\xF8-\\x{2FF}\\x{370}-\\x{37D}\\x{37F}-\\x{1FFF}\\x{200C}-\\x{200D}\\x{2070}-\\x{218F}\\x{2C00}-\\x{2FEF}\\x{3001}-\\x{D7FF}\\x{F900}-\\x{FDCF}\\x{FDF0}-\\x{FFFD}\\x{10000}-\\x{EFFFF}]";
        $this->NameStartChar = "[:A-Z_a-z\-.0-9\\xB7\\xC0-\\xD6\\xD8-\\xF6\\xF8-\\x{37D}\\x{37F}-\\x{1FFF}\\x{200C}-\\x{200D}\\x{203F}-\\x{2040}\\x{2070}-\\x{218F}\\x{2C00}-\\x{2FEF}\\x{3001}-\\x{D7FF}\\x{F900}-\\x{FDCF}\\x{FDF0}-\\x{FFFD}\\x{10000}-\\x{EFFFF}]";
        $this->Name = "{$this->NameStartChar}{$this->NameChar}*";
        $this->NmToken = "{$this->NameChar}+";
    }
}
