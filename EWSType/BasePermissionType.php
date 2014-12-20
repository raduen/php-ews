<?php
/**
 * Contains EWSType_BasePermissionType.
 */

/**
 * Base class for permission types.
 *
 * @package php-ews\Types
 */
abstract class EWSType_BasePermissionType extends EWSType
{
    /**
     * Indicates whether a user has permission to create items in a folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var boolean
     */
    public $CanCreateItems;

    /**
     * Indicates whether a user has permission to create subfolders in a folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var boolean
     */
    public $CanCreateSubFolders;

    /**
     * Indicates whether a user has permission to delete items in a folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var \jamesiarmes\PEWS\Enumeration\PermissionActionType
     */
    public $DeleteItems;

    /**
     * Indicates whether a user has permission to edit items in a folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var \jamesiarmes\PEWS\Enumeration\PermissionActionType
     */
    public $EditItems;

    /**
     * Indicates whether a user is a contact for a folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var boolean
     */
    public $IsFolderContact;

    /**
     * Indicates whether a user is the owner of a folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var boolean
     */
    public $IsFolderOwner;

    /**
     * Indicates whether a user can view a folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var boolean
     */
    public $IsFolderVisible;

    /**
     * Identifies a delegate user or a user who has folder access permissions.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_UserIdType
     */
    public $UserId;
}
