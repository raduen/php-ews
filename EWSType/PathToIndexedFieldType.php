<?php
/**
 * Contains EWSType_PathToIndexedFieldType.
 */

/**
 * Identifies individual members of a dictionary.
 *
 * @package php-ews\Types
 */
class EWSType_PathToIndexedFieldType extends EWSType
{
    /**
     * Identifies the member of the dictionary to return.
     *
     * This attribute is required.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $FieldIndex;

    /**
     * FieldURI property
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Enumeration\DictionaryURIType
     */
    public $FieldURI;
}
