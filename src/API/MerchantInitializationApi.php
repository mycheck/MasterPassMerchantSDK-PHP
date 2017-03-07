<?php

namespace Masterpass\MerchantSDK\API;

/**
 * MerchantInitializationApi
 * PHP version 5
 *
 * @category Class
 */

/**
 * MerchantInitializationApi Class
 *
 * @category Class
 * @package  masterpass-merchant
 * @subpackage api
 */

class MerchantInitializationApi
{

  /**
   * Merchant Initialization Service
    * This service is used to secure Lightbox connections between merchant and MasterPass. This service requires a request token (OAuthToken). This service call should be used when shopping cart service is not called, for example, pairing outside of checkout flow.
	   * @param merchant_initialization_request Merchant Initialization request.
	   * @return \mastercard_masterpass_merchant\model\MerchantInitializationResponse
   */

     public static function create(MerchantInitializationRequest $merchant_initialization_request
,$config = NULL){

	 $path = "/masterpass/v6/merchant-initialization";

	 $serviceRequest = new ServiceRequest();


	 $serviceRequest->requestBody($merchant_initialization_request);

	 $serviceRequest->contentType("application/xml");

	 $apiClient = new ApiClient($config);
   	 $apiClient->setApiTracker(new APITrackerImpl());
	 $apiClient->sdkErrorHandler = new MasterpassErrorHandler();

	 return $apiClient->call($path,$serviceRequest,"POST","MerchantInitializationResponse");
	}

}

