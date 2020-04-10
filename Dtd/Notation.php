<?php
namespace Soothsilver\DtdParser\Dtd;

/**
 * Represents an XML notation declaration
 * See also: http://www.w3.org/TR/REC-xml/#Notations
 */
class Notation
{
    /**
     * @var string Notation name
     */
    public $name = "";
    /**
     * @var string Public ID or an empty string if there is no public ID
     */
    public $publicID = "";
    /**
     * @var string System ID (mandatory)
     */
    public $systemID = "";

    /**
     * Creates a new Notation.
     * @param string $name The notation name.
     * @param string $systemID The notation's system id.
     * @param string $publicID The notation's public id.
     */
    public function  __construct($name, $systemID, $publicID)
    {
        $this->name =$name;
        $this->systemID = $systemID;
        $this->publicID = $publicID;
    }
}
