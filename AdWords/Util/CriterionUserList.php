<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 18:31
 */

namespace GoogleAdsApi\AdWords\Util;

/**
 * UserList - represents a user list that is defined by the advertiser to be targeted.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class CriterionUserList extends Criterion
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "CriterionUserList";

    /**
     * @access public
     * @var integer
     */
    public $userListId;

    /**
     * @access public
     * @var string
     */
    public $userListName;

    /**
     * @access public
     * @var tnsCriterionUserListMembershipStatus
     */
    public $userListMembershipStatus;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

    public function __construct($userListId = null, $userListName = null, $userListMembershipStatus = null, $id = null, $type = null, $CriterionType = null)
    {
        parent::__construct();
        $this->userListId = $userListId;
        $this->userListName = $userListName;
        $this->userListMembershipStatus = $userListMembershipStatus;
        $this->id = $id;
        $this->type = $type;
        $this->CriterionType = $CriterionType;
    }

}