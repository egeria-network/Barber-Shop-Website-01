<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/errors/geo_target_constant_suggestion_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Errors;

class GeoTargetConstantSuggestionError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Igoogle/ads/googleads/v8/errors/geo_target_constant_suggestion_error.protogoogle.ads.googleads.v8.errors"�
$GeoTargetConstantSuggestionErrorEnum"�
 GeoTargetConstantSuggestionError
UNSPECIFIED 
UNKNOWN
LOCATION_NAME_SIZE_LIMIT
LOCATION_NAME_LIMIT
INVALID_COUNTRY_CODE
REQUEST_PARAMETERS_UNSETB�
"com.google.ads.googleads.v8.errorsB%GeoTargetConstantSuggestionErrorProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v8/errors;errors�GAA�Google.Ads.GoogleAds.V8.Errors�Google\\Ads\\GoogleAds\\V8\\Errors�"Google::Ads::GoogleAds::V8::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

