<?php

namespace Masterpass\MerchantSDK\API;

/**
 * CheckoutApi
 * PHP version 5
 *
 * @category Class
 */

/**
 * CheckoutApi Class
 *
 * @category Class
 * @package  masterpass-merchant
 * @subpackage api
 */

class CheckoutApi
{

  /**
   * Check out service
    * This service is used to retrieve consumer&#39;s payment, shipping address, reward and 3-D Secure information from MasterPass. The checkout resource URL supplied by MasterPass must be decoded and consumed by the merchant as provided by MasterPass.
	   * @param pathid Checkout identifier.
	   * @param oauth_token Access token, which is used to retrieve checkout data.
	   * @return \mastercard_masterpass_merchant\model\Checkout
   */

     public static function show($pathid,  $oauth_token
,$config = NULL){

	 $path = "/masterpass/v6/checkout/{pathid}";

	 $serviceRequest = new ServiceRequest();
	 $serviceRequest->pathParam("pathid",$pathid);
	 $serviceRequest->header("oauth_token",$oauth_token);


	 $serviceRequest->contentType("application/xml");

	 $apiClient = new ApiClient($config);
   	 $apiClient->setApiTracker(new APITrackerImpl());
	 $apiClient->sdkErrorHandler = new MasterpassErrorHandler();

	 return $apiClient->call($path,$serviceRequest,"GET","Checkout");
	}

}

