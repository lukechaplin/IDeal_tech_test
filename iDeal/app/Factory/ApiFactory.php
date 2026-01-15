<?php

namespace iDeal\App\Factory;

use iDeal\App\ApiService\ApiService;

/**
 * Factory class to create instances of API services for different loan provider and applicant processing classes.
 * @return ApiService
 */

class ApiFactory {

private $loanProvider;

public function __construct($loanProvider)
{
    $this->loanProvider = $loanProvider;
}

function getApiService($loanProvider): ApiService {

    if ($loanProvider === 'SomeProvider') {

    // Get configuration for loan provider from config files
    /* Config values could be stored in config/services.php or .env file 
    or come from database call (hashed values) or secure key vault */

    $http = config('services.someprovider.http_endpoint');
    $authToken = config('services.someprovider.auth_token');

    return new ApiService($http, $authToken);
        }
    }
}