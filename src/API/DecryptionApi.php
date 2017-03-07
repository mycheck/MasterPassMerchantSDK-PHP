<?php

namespace Masterpass\MerchantSDK\API;

/**
 * DecryptionApi
 * PHP version 5
 *
 * @category Class
 */

/**
 * DecryptionApi Class
 *
 * @category Class
 * @package  masterpass-merchant
 * @subpackage api
 */

class DecryptionApi
{

  /**
   * Decryption Service
    * Decryption Service Android SDK.
	   * @param decryption_request Decryption Service.
	   * @return \mastercard_masterpass_merchant\model\DecryptionResponse
   */

     public static function create(DecryptionRequest $decryption_request
,$config = NULL){

	 $path = "/masterpass/v6/decrypt";

	 $serviceRequest = new ServiceRequest();


	 $serviceRequest->requestBody($decryption_request);

	 $serviceRequest->contentType("application/xml");

	 $apiClient = new ApiClient($config);
   	 $apiClient->setApiTracker(new APITrackerImpl());
	 $apiClient->sdkErrorHandler = new MasterpassErrorHandler();

	 return $apiClient->call($path,$serviceRequest,"POST","DecryptionResponse");
	}

}

