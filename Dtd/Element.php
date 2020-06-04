<?php
namespace Soothsilver\DtdParser\Dtd;

/**
 * Represents the definition of an element type. This includes attributes permitted for this element.
 */
class Element
{
    /**
     * The "ANY" content specification string. An element with this content specification may contain any number of any defined elements in any order.
     */
    const CONTENT_SPECIFICATION_ANY = "ANY";
    /**
     * The "EMPTY" content specification string. An element with this content specification may not contain anything, not even whitespace.
     */
    const CONTENT_SPECIFICATION_EMPTY = "EMPTY";
    /**
     * There was no !ELEMENT declaration for this element type in the DTD, but there was an ATTLIST declaration.
     * This is a boolean rather than a string.
     */
    const CONTENT_SPECIFICATION_NOT_GIVEN = false;

    /**
     * A value that indicates whether the element has mixed content.
     * @note {
     * A content declaration of pure text "(#PCDATA)" is considered to be mixed content.
     * }
     * @var boolean
     */
    public $mixed = false;

    /**
     * Name of the element. Formally, this is called the element type.
     * @var string
     */
    public $type = "";
    /**
     * Content specification of the element. For example, this could be (#PCDATA), EMPTY or (butterfly|mouse)+.
     * @var string
     */
    public $contentSpecification = Element::CONTENT_SPECIFICATION_NOT_GIVEN;
    /**
     * An array of all permitted attributes of this element.
     * @var Attribute[]
     */
    public $attributes = array();

    /**
     * Initializes a new instance of the Element class.
     * @param string $type Name of the element. Formally, this is called the element type.
     * @param string $contentModel Content specification of the element. For example, this could be (#PCDATA), EMPTY or (butterfly|mouse)+.
     * @param boolean $mixed A value that indicates whether this is a mixed element.
     */
    public function __construct($type, $contentModel, $mixed)
    {
        $this->mixed = $mixed;
        $this->type = $type;
        $this->contentSpecification = $contentModel;
    }

    /**
     * Returns a value that indicates whether the element has mixed content.
     * @note {
     * A content declaration of pure text "(#PCDATA)" is considered to be mixed content.
     * }
     * @return boolean
     */
    public function isMixed()
    {
        return $this->mixed;
    }

    /**
     * Returns a value that indicates whether the element may contain only text (that means, its content specification is (#PCDATA) or (#PCDATA)*.
     * @return bool
     */
    public function isPureText()
    {
        return $this->contentSpecification === "(#PCDATA)" || $this->contentSpecification === "(#PCDATA)*";
    }
}
