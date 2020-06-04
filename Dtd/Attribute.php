<?php
namespace Soothsilver\DtdParser\Dtd;

/**
 * Represents an attribute definition of a single attribute.
 */
class Attribute
{
    /**
     * The CDATA attribute type.
     */
    const ATTTYPE_CDATA = "CDATA";
    /**
     * The ID attribute type.
     */
    const ATTTYPE_ID = "ID";
    /**
     * The IDREF attribute type.
     */
    const ATTTYPE_IDREF = "IDREF";
    /**
     * The IDREFS attribute type.
     */
    const ATTTYPE_IDREFS = "IDREFS";
    /**
     * The ENTITY attribute type.
     */
    const ATTTYPE_ENTITY = "ENTITY";
    /**
     * The ENTITIES attribute type.
     */
    const ATTTYPE_ENTITIES = "ENTITIES";
    /**
     * The NMTOKEN attribute type.
     */
    const ATTTYPE_NMTOKEN = "NMTOKEN";
    /**
     * The NMTOKENS attribute type.
     */
    const ATTTYPE_NMTOKENS = "NMTOKENS";
    /**
     * This attribute's type is an enumeration.
     * The exact value of this constant is not relevant, it just has to be constant. The permitted values of the enumeration
     * are listed in the $enumeration array.
     */
    const ATTTYPE_ENUMERATION = "##ENUMERATION_INTERNAL_IDENTIFIER##";
    /**
     * The NOTATION attribute type. The permitted values are listed in the $enumeration array.
     */
    const ATTTYPE_NOTATION = "NOTATION";
    /**
     * The #REQUIRED default declaration. This attribute has no default value and must be present in valid XML files.
     */
    const DEFAULT_REQUIRED = "#REQUIRED";
    /**
     * The #IMPLIED default declaration. This attribute has no default value but it doesn't need to be present in valid XML files.
     */
    const DEFAULT_IMPLIED = "#IMPLIED";
    /**
     * The #FIXED default declaration. This attribute must be present and must have the value specified in $defaultValue in valid XML files.
     */
    const DEFAULT_FIXED = "#FIXED";
    /**
     * This attribute's default declaration is given as a default string. This means that if the attribute is present in an XML file, its value
     * is used. If the attribute is not present, the file is still valid, and the attribute is considered to have the value
     * specified in the $defaultValue of this attribute.
     * The exact value of this constant is not relevant, it just has to be constant.    *
     */
    const DEFAULT_IMPLICIT_DEFAULT = "##DEFAULT_VALUE_IF_EMPTY_INTERNAL_IDENTIFIER##";
    /**
     * Name of the attribute.
     * @var string
     */
    public $name;
    /**
     * Type of the attribute, given as one of the ATTTYPE_ constants of this class.
     * @var string
     */
    public $type;
    /**
     * An array of possible values of this attribute, if it's an enumeration type, or an array of possible notations, if it's a notation attribute.
     * If it's neither a notation or an enumeration-type attribute, this is FALSE.
     * @var array|bool
     */
    public $enumeration = array();
    /**
     * The default declaration of this attribute, given as one of the DEFAULT_ constants of this class.
     * @var string
     */
    public $defaultType;
    /**
     * Default value of this attribute, if this is relevant. It is relevant for DEFAULT_FIXED and DEFAULT_IMPLICIT_DEFAULT.  Otherwise it's an empty string.
     * @var string
     */
    public $defaultValue;

    /**
     * Initializes a new instance of the Attribute class that represents the definition of a single attribute.
     * @param string $name Name of the attribute.
     * @param string $type Type of the attribute, given as one of the ATTTYPE_ constants of this class.
     * @param string $defaultType The default declaration of this attribute, given as one of the DEFAULT_ constants of this class.
     * @param string $defaultValue Default value of this attribute, if this is relevant. It is relevant for DEFAULT_FIXED and DEFAULT_IMPLICIT_DEFAULT. Otherwise it's an empty string.
     * @param array|bool $enumeration An array of possible values of this attribute, if it's an enumeration type, or an array of possible notations, if it's a notation attribute. If it's neither a notation or an enumeration-type attribute, this should be false.
     */
    public function __construct($name, $type, $defaultType, $defaultValue, $enumeration = false)
    {
        $this->name = $name;
        $this->enumeration = $enumeration;
        $this->type = $type;
        $this->defaultType = $defaultType;
        $this->defaultValue = $defaultValue;
    }
}
