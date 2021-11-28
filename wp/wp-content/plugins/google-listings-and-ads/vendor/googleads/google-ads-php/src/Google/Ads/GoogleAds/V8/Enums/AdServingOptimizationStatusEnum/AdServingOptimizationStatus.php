<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/enums/ad_serving_optimization_status.proto

namespace Google\Ads\GoogleAds\V8\Enums\AdServingOptimizationStatusEnum;

use UnexpectedValueException;

/**
 * Enum describing possible serving statuses.
 *
 * Protobuf type <code>google.ads.googleads.v8.enums.AdServingOptimizationStatusEnum.AdServingOptimizationStatus</code>
 */
class AdServingOptimizationStatus
{
    /**
     * No value has been specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received value is not known in this version.
     * This is a response-only value.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Ad serving is optimized based on CTR for the campaign.
     *
     * Generated from protobuf enum <code>OPTIMIZE = 2;</code>
     */
    const OPTIMIZE = 2;
    /**
     * Ad serving is optimized based on CTR * Conversion for the campaign. If
     * the campaign is not in the conversion optimizer bidding strategy, it will
     * default to OPTIMIZED.
     *
     * Generated from protobuf enum <code>CONVERSION_OPTIMIZE = 3;</code>
     */
    const CONVERSION_OPTIMIZE = 3;
    /**
     * Ads are rotated evenly for 90 days, then optimized for clicks.
     *
     * Generated from protobuf enum <code>ROTATE = 4;</code>
     */
    const ROTATE = 4;
    /**
     * Show lower performing ads more evenly with higher performing ads, and do
     * not optimize.
     *
     * Generated from protobuf enum <code>ROTATE_INDEFINITELY = 5;</code>
     */
    const ROTATE_INDEFINITELY = 5;
    /**
     * Ad serving optimization status is not available.
     *
     * Generated from protobuf enum <code>UNAVAILABLE = 6;</code>
     */
    const UNAVAILABLE = 6;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::OPTIMIZE => 'OPTIMIZE',
        self::CONVERSION_OPTIMIZE => 'CONVERSION_OPTIMIZE',
        self::ROTATE => 'ROTATE',
        self::ROTATE_INDEFINITELY => 'ROTATE_INDEFINITELY',
        self::UNAVAILABLE => 'UNAVAILABLE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AdServingOptimizationStatus::class, \Google\Ads\GoogleAds\V8\Enums\AdServingOptimizationStatusEnum_AdServingOptimizationStatus::class);

