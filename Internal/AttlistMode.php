<?php

namespace Soothsilver\DtdParser\Internal;

/**
 * Represents the parser state during the parsing of an ATTLIST declaration
 */
abstract class AttlistMode {
    /**
     * The parser now expects an attribute name.
     */
    const NeedName = 0;
    /**
     * The parser now expects an attribute type, such as ID or IDREF.
     */
    const NeedAttType = 1;
    /**
     * The parser now expects an opening parenthesis character '(' because the token NOTATION just occurred.
     */
    const AfterNOTATION = 2;
    /**
     * The parser now expects a possible value of an enumeration and it is inside a parenthesis block.
     */
    const InsideEnumeration_NeedValue = 3;
    /**
     * The parser finished parsing the attribute type and now expects a default declaration, such as #IMPLIED.
     */
    const NeedDefaultDecl = 4;
    /**
     * The parser now expects either the closing parenthesis character ')' or the enumeration value separator '|'.
     */
    const InsideEnumeration_NeedSeparator = 5;
}
