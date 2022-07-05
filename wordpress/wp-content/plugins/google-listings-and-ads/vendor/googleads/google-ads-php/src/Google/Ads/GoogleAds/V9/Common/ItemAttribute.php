<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/common/offline_user_data.proto

namespace Google\Ads\GoogleAds\V9\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Item attributes of the transaction.
 *
 * Generated from protobuf message <code>google.ads.googleads.v9.common.ItemAttribute</code>
 */
class ItemAttribute extends \Google\Protobuf\Internal\Message
{
    /**
     * A unique identifier of a product. It can be either the Merchant Center Item
     * ID or GTIN (Global Trade Item Number).
     *
     * Generated from protobuf field <code>string item_id = 1;</code>
     */
    protected $item_id = '';
    /**
     * ID of the Merchant Center Account.
     *
     * Generated from protobuf field <code>optional int64 merchant_id = 2;</code>
     */
    protected $merchant_id = null;
    /**
     * Common Locale Data Repository (CLDR) territory code of the country
     * associated with the feed where your items are uploaded. See
     * https://developers.google.com/google-ads/api/reference/data/codes-formats#country-codes
     * for more information.
     *
     * Generated from protobuf field <code>string country_code = 3;</code>
     */
    protected $country_code = '';
    /**
     * ISO 639-1 code of the language associated with the feed where your items
     * are uploaded
     *
     * Generated from protobuf field <code>string language_code = 4;</code>
     */
    protected $language_code = '';
    /**
     * The number of items sold. Defaults to 1 if not set.
     *
     * Generated from protobuf field <code>int64 quantity = 5;</code>
     */
    protected $quantity = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $item_id
     *           A unique identifier of a product. It can be either the Merchant Center Item
     *           ID or GTIN (Global Trade Item Number).
     *     @type int|string $merchant_id
     *           ID of the Merchant Center Account.
     *     @type string $country_code
     *           Common Locale Data Repository (CLDR) territory code of the country
     *           associated with the feed where your items are uploaded. See
     *           https://developers.google.com/google-ads/api/reference/data/codes-formats#country-codes
     *           for more information.
     *     @type string $language_code
     *           ISO 639-1 code of the language associated with the feed where your items
     *           are uploaded
     *     @type int|string $quantity
     *           The number of items sold. Defaults to 1 if not set.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V9\Common\OfflineUserData::initOnce();
        parent::__construct($data);
    }

    /**
     * A unique identifier of a product. It can be either the Merchant Center Item
     * ID or GTIN (Global Trade Item Number).
     *
     * Generated from protobuf field <code>string item_id = 1;</code>
     * @return string
     */
    public function getItemId()
    {
        return $this->item_id;
    }

    /**
     * A unique identifier of a product. It can be either the Merchant Center Item
     * ID or GTIN (Global Trade Item Number).
     *
     * Generated from protobuf field <code>string item_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setItemId($var)
    {
        GPBUtil::checkString($var, True);
        $this->item_id = $var;

        return $this;
    }

    /**
     * ID of the Merchant Center Account.
     *
     * Generated from protobuf field <code>optional int64 merchant_id = 2;</code>
     * @return int|string
     */
    public function getMerchantId()
    {
        return isset($this->merchant_id) ? $this->merchant_id : 0;
    }

    public function hasMerchantId()
    {
        return isset($this->merchant_id);
    }

    public function clearMerchantId()
    {
        unset($this->merchant_id);
    }

    /**
     * ID of the Merchant Center Account.
     *
     * Generated from protobuf field <code>optional int64 merchant_id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMerchantId($var)
    {
        GPBUtil::checkInt64($var);
        $this->merchant_id = $var;

        return $this;
    }

    /**
     * Common Locale Data Repository (CLDR) territory code of the country
     * associated with the feed where your items are uploaded. See
     * https://developers.google.com/google-ads/api/reference/data/codes-formats#country-codes
     * for more information.
     *
     * Generated from protobuf field <code>string country_code = 3;</code>
     * @return string
     */
    public function getCountryCode()
    {
        return $this->country_code;
    }

    /**
     * Common Locale Data Repository (CLDR) territory code of the country
     * associated with the feed where your items are uploaded. See
     * https://developers.google.com/google-ads/api/reference/data/codes-formats#country-codes
     * for more information.
     *
     * Generated from protobuf field <code>string country_code = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCountryCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->country_code = $var;

        return $this;
    }

    /**
     * ISO 639-1 code of the language associated with the feed where your items
     * are uploaded
     *
     * Generated from protobuf field <code>string language_code = 4;</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * ISO 639-1 code of the language associated with the feed where your items
     * are uploaded
     *
     * Generated from protobuf field <code>string language_code = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

    /**
     * The number of items sold. Defaults to 1 if not set.
     *
     * Generated from protobuf field <code>int64 quantity = 5;</code>
     * @return int|string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * The number of items sold. Defaults to 1 if not set.
     *
     * Generated from protobuf field <code>int64 quantity = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setQuantity($var)
    {
        GPBUtil::checkInt64($var);
        $this->quantity = $var;

        return $this;
    }

}

