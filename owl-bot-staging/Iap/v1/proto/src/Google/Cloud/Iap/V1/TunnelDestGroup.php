<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/iap/v1/service.proto

namespace Google\Cloud\Iap\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A TunnelDestGroup.
 *
 * Generated from protobuf message <code>google.cloud.iap.v1.TunnelDestGroup</code>
 */
class TunnelDestGroup extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Immutable. Identifier for the TunnelDestGroup. Must be unique within the
     * project.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $name = '';
    /**
     * null List of CIDRs that this group applies to.
     *
     * Generated from protobuf field <code>repeated string cidrs = 2 [(.google.api.field_behavior) = UNORDERED_LIST];</code>
     */
    private $cidrs;
    /**
     * null List of FQDNs that this group applies to.
     *
     * Generated from protobuf field <code>repeated string fqdns = 3 [(.google.api.field_behavior) = UNORDERED_LIST];</code>
     */
    private $fqdns;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Immutable. Identifier for the TunnelDestGroup. Must be unique within the
     *           project.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $cidrs
     *           null List of CIDRs that this group applies to.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $fqdns
     *           null List of FQDNs that this group applies to.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Iap\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Immutable. Identifier for the TunnelDestGroup. Must be unique within the
     * project.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Immutable. Identifier for the TunnelDestGroup. Must be unique within the
     * project.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * null List of CIDRs that this group applies to.
     *
     * Generated from protobuf field <code>repeated string cidrs = 2 [(.google.api.field_behavior) = UNORDERED_LIST];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCidrs()
    {
        return $this->cidrs;
    }

    /**
     * null List of CIDRs that this group applies to.
     *
     * Generated from protobuf field <code>repeated string cidrs = 2 [(.google.api.field_behavior) = UNORDERED_LIST];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCidrs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->cidrs = $arr;

        return $this;
    }

    /**
     * null List of FQDNs that this group applies to.
     *
     * Generated from protobuf field <code>repeated string fqdns = 3 [(.google.api.field_behavior) = UNORDERED_LIST];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFqdns()
    {
        return $this->fqdns;
    }

    /**
     * null List of FQDNs that this group applies to.
     *
     * Generated from protobuf field <code>repeated string fqdns = 3 [(.google.api.field_behavior) = UNORDERED_LIST];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFqdns($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->fqdns = $arr;

        return $this;
    }

}

