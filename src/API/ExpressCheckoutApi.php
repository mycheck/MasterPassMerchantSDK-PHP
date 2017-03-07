<?php

namespace Masterpass\MerchantSDK\API;

/**
 * ExpressCheckoutApi
 * PHP version 5
 *
 * @category Class
 */

/**
 * ExpressCheckoutApi Class
 *
 * @category Class
 * @package  masterpass-merchant
 * @subpackage api
 */

class ExpressCheckoutApi
{

  /**
   * Express Checkout Service
    * This provides qualified merchants with ability to provide the express checkout experience (wherein the consumer does not have to have log into the MasterPass wallet and thereby remains within the merchant experience throughout the transaction) to its MasterPass consumers.
	   * @param oauth_token Long access token, which is used to retrieve precheckout data.
	   * @param express_checkout_request Express Checkout Request.
	   * @return \mastercard_masterpass_merchant\model\ExpressCheckoutResponse
   */

     public static function create( $oauth_token, ExpressCheckoutRequest $express_checkout_request
,$config = NULL){

	 $path = "/masterpass/v6/expresscheckout";

	 $serviceRequest = new ServiceRequest();

	 $serviceRequest->header("oauth_token",$oauth_token);
	 $serviceRequest->requestBody($express_checkout_request);

	 $serviceRequest->contentType("application/xml");

	 $apiClient = new ApiClient($config);
   	 $apiClient->setApiTracker(new APITrackerImpl());
	 $apiClient->sdkErrorHandler = new MasterpassErrorHandler();

	 return $apiClient->call($path,$serviceRequest,"POST","ExpressCheckoutResponse");
	}

}

