<?php

namespace EcsInc\Request\V20160314;

/**
 * Request of InnerInstanceQueryByParam
 *
 * @method string getstartOfInternetTx()
 * @method string getResourceOwnerId()
 * @method string getizNo()
 * @method string getinternetIp()
 * @method string getchannel()
 * @method string getvpcInstanceId()
 * @method string getnetworkType()
 * @method string getnotSyncHouyi()
 * @method string getoperator()
 * @method string gethostname()
 * @method string getzoneNo()
 * @method string getcores()
 * @method string getmem()
 * @method string getbizStatus()
 * @method string getpageSize()
 * @method string getaliUid()
 * @method string getvSwitchInstanceId()
 * @method string getproxyId()
 * @method string getorder()
 * @method string getsystemDeviceCategory()
 * @method string getagentId()
 * @method string getimageType()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getendOfInternetTx()
 * @method string getOwnerId()
 * @method string gettoken()
 * @method string getregionNo()
 * @method string getinstanceIds()
 * @method string getpageNo()
 * @method string getimageIndexId()
 * @method string getbid()
 * @method string getizId()
 * @method string getstatus()
 * @method string getintranetIp()
 * @method string getorderType()
 */
class InnerInstanceQueryByParamRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'EcsInc',
            '2016-03-14',
            'InnerInstanceQueryByParam',
            'ecs'
        );
    }

    /**
     * @param string $startOfInternetTx
     *
     * @return $this
     */
    public function setstartOfInternetTx($startOfInternetTx)
    {
        $this->requestParameters['startOfInternetTx'] = $startOfInternetTx;
        $this->queryParameters['startOfInternetTx'] = $startOfInternetTx;

        return $this;
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $izNo
     *
     * @return $this
     */
    public function setizNo($izNo)
    {
        $this->requestParameters['izNo'] = $izNo;
        $this->queryParameters['izNo'] = $izNo;

        return $this;
    }

    /**
     * @param string $internetIp
     *
     * @return $this
     */
    public function setinternetIp($internetIp)
    {
        $this->requestParameters['internetIp'] = $internetIp;
        $this->queryParameters['internetIp'] = $internetIp;

        return $this;
    }

    /**
     * @param string $channel
     *
     * @return $this
     */
    public function setchannel($channel)
    {
        $this->requestParameters['channel'] = $channel;
        $this->queryParameters['channel'] = $channel;

        return $this;
    }

    /**
     * @param string $vpcInstanceId
     *
     * @return $this
     */
    public function setvpcInstanceId($vpcInstanceId)
    {
        $this->requestParameters['vpcInstanceId'] = $vpcInstanceId;
        $this->queryParameters['vpcInstanceId'] = $vpcInstanceId;

        return $this;
    }

    /**
     * @param string $networkType
     *
     * @return $this
     */
    public function setnetworkType($networkType)
    {
        $this->requestParameters['networkType'] = $networkType;
        $this->queryParameters['networkType'] = $networkType;

        return $this;
    }

    /**
     * @param string $notSyncHouyi
     *
     * @return $this
     */
    public function setnotSyncHouyi($notSyncHouyi)
    {
        $this->requestParameters['notSyncHouyi'] = $notSyncHouyi;
        $this->queryParameters['notSyncHouyi'] = $notSyncHouyi;

        return $this;
    }

    /**
     * @param string $operator
     *
     * @return $this
     */
    public function setoperator($operator)
    {
        $this->requestParameters['operator'] = $operator;
        $this->queryParameters['operator'] = $operator;

        return $this;
    }

    /**
     * @param string $hostname
     *
     * @return $this
     */
    public function sethostname($hostname)
    {
        $this->requestParameters['hostname'] = $hostname;
        $this->queryParameters['hostname'] = $hostname;

        return $this;
    }

    /**
     * @param string $zoneNo
     *
     * @return $this
     */
    public function setzoneNo($zoneNo)
    {
        $this->requestParameters['zoneNo'] = $zoneNo;
        $this->queryParameters['zoneNo'] = $zoneNo;

        return $this;
    }

    /**
     * @param string $cores
     *
     * @return $this
     */
    public function setcores($cores)
    {
        $this->requestParameters['cores'] = $cores;
        $this->queryParameters['cores'] = $cores;

        return $this;
    }

    /**
     * @param string $mem
     *
     * @return $this
     */
    public function setmem($mem)
    {
        $this->requestParameters['mem'] = $mem;
        $this->queryParameters['mem'] = $mem;

        return $this;
    }

    /**
     * @param string $bizStatus
     *
     * @return $this
     */
    public function setbizStatus($bizStatus)
    {
        $this->requestParameters['bizStatus'] = $bizStatus;
        $this->queryParameters['bizStatus'] = $bizStatus;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function setpageSize($pageSize)
    {
        $this->requestParameters['pageSize'] = $pageSize;
        $this->queryParameters['pageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $aliUid
     *
     * @return $this
     */
    public function setaliUid($aliUid)
    {
        $this->requestParameters['aliUid'] = $aliUid;
        $this->queryParameters['aliUid'] = $aliUid;

        return $this;
    }

    /**
     * @param string $vSwitchInstanceId
     *
     * @return $this
     */
    public function setvSwitchInstanceId($vSwitchInstanceId)
    {
        $this->requestParameters['vSwitchInstanceId'] = $vSwitchInstanceId;
        $this->queryParameters['vSwitchInstanceId'] = $vSwitchInstanceId;

        return $this;
    }

    /**
     * @param string $proxyId
     *
     * @return $this
     */
    public function setproxyId($proxyId)
    {
        $this->requestParameters['proxyId'] = $proxyId;
        $this->queryParameters['proxyId'] = $proxyId;

        return $this;
    }

    /**
     * @param string $order
     *
     * @return $this
     */
    public function setorder($order)
    {
        $this->requestParameters['order'] = $order;
        $this->queryParameters['order'] = $order;

        return $this;
    }

    /**
     * @param string $systemDeviceCategory
     *
     * @return $this
     */
    public function setsystemDeviceCategory($systemDeviceCategory)
    {
        $this->requestParameters['systemDeviceCategory'] = $systemDeviceCategory;
        $this->queryParameters['systemDeviceCategory'] = $systemDeviceCategory;

        return $this;
    }

    /**
     * @param string $agentId
     *
     * @return $this
     */
    public function setagentId($agentId)
    {
        $this->requestParameters['agentId'] = $agentId;
        $this->queryParameters['agentId'] = $agentId;

        return $this;
    }

    /**
     * @param string $imageType
     *
     * @return $this
     */
    public function setimageType($imageType)
    {
        $this->requestParameters['imageType'] = $imageType;
        $this->queryParameters['imageType'] = $imageType;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->requestParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->queryParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        $this->requestParameters['OwnerAccount'] = $ownerAccount;
        $this->queryParameters['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $endOfInternetTx
     *
     * @return $this
     */
    public function setendOfInternetTx($endOfInternetTx)
    {
        $this->requestParameters['endOfInternetTx'] = $endOfInternetTx;
        $this->queryParameters['endOfInternetTx'] = $endOfInternetTx;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $token
     *
     * @return $this
     */
    public function settoken($token)
    {
        $this->requestParameters['token'] = $token;
        $this->queryParameters['token'] = $token;

        return $this;
    }

    /**
     * @param string $regionNo
     *
     * @return $this
     */
    public function setregionNo($regionNo)
    {
        $this->requestParameters['regionNo'] = $regionNo;
        $this->queryParameters['regionNo'] = $regionNo;

        return $this;
    }

    /**
     * @param string $instanceIds
     *
     * @return $this
     */
    public function setinstanceIds($instanceIds)
    {
        $this->requestParameters['instanceIds'] = $instanceIds;
        $this->queryParameters['instanceIds'] = $instanceIds;

        return $this;
    }

    /**
     * @param string $pageNo
     *
     * @return $this
     */
    public function setpageNo($pageNo)
    {
        $this->requestParameters['pageNo'] = $pageNo;
        $this->queryParameters['pageNo'] = $pageNo;

        return $this;
    }

    /**
     * @param string $imageIndexId
     *
     * @return $this
     */
    public function setimageIndexId($imageIndexId)
    {
        $this->requestParameters['imageIndexId'] = $imageIndexId;
        $this->queryParameters['imageIndexId'] = $imageIndexId;

        return $this;
    }

    /**
     * @param string $bid
     *
     * @return $this
     */
    public function setbid($bid)
    {
        $this->requestParameters['bid'] = $bid;
        $this->queryParameters['bid'] = $bid;

        return $this;
    }

    /**
     * @param string $izId
     *
     * @return $this
     */
    public function setizId($izId)
    {
        $this->requestParameters['izId'] = $izId;
        $this->queryParameters['izId'] = $izId;

        return $this;
    }

    /**
     * @param string $status
     *
     * @return $this
     */
    public function setstatus($status)
    {
        $this->requestParameters['status'] = $status;
        $this->queryParameters['status'] = $status;

        return $this;
    }

    /**
     * @param string $intranetIp
     *
     * @return $this
     */
    public function setintranetIp($intranetIp)
    {
        $this->requestParameters['intranetIp'] = $intranetIp;
        $this->queryParameters['intranetIp'] = $intranetIp;

        return $this;
    }

    /**
     * @param string $orderType
     *
     * @return $this
     */
    public function setorderType($orderType)
    {
        $this->requestParameters['orderType'] = $orderType;
        $this->queryParameters['orderType'] = $orderType;

        return $this;
    }
}
