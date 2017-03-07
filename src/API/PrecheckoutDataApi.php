<?php

namespace Masterpass\MerchantSDK\API;

/**
 * PrecheckoutDataApi
 * PHP version 5
 *
 * @category Class
 */

/**
 * PrecheckoutDataApi Class
 *
 * @category Class
 * @package  masterpass-merchant
 * @subpackage api
 */

class PrecheckoutDataApi
{

  /**
   * Precheckout Data Service.
    * MasterPass provides merchants with the ability to request a paired consumer&#39;s data (card alias, shipping addresses, reward program, and profile information) prior to the actual MasterPass checkout. This gives the merchant the ability to provide the consumer the opportunity to preselect their checkout options before completing the checkout. If, for any reason, the precheckout call gets rejected at MasterPass (merchant requests data that the consumer did not originally consent to, if the pairing has been deleted by the user, if the Long Access token has expired, and so on), the merchant has to request pairing again.
	   * @param oauth_token Long access token, which is used to retrieve precheckout data.
	   * @param precheckout_data_request PreCheckout Data Request.
	   * @return \mastercard_masterpass_merchant\model\PrecheckoutDataResponse
   */

     public static function create( $oauth_token, PrecheckoutDataRequest $precheckout_data_request
,$config = NULL){

	 $path = "/masterpass/v6/precheckout";

	 $serviceRequest = new ServiceRequest();

	 $serviceRequest->header("oauth_token",$oauth_token);
	 $serviceRequest->requestBody($precheckout_data_request);

	 $serviceRequest->contentType("application/xml");

	 $apiClient = new ApiClient($config);
   	 $apiClient->setApiTracker(new APITrackerImpl());
	 $apiClient->sdkErrorHandler = new MasterpassErrorHandler();

	 return $apiClient->call($path,$serviceRequest,"POST","PrecheckoutDataResponse");
	}

}

