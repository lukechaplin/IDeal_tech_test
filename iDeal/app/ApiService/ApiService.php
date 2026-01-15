<?php

namespace iDeal\App\ApiService;

use iDeal\App\Interfaces\ApiServiceInterface;
use Illuminate\Support\Facades\Http;

/**
 * Class responsible for handling API interactions.
 * Implements the ApiServiceInterface to ensure contract adherence.
 * @return array
 */

class ApiService implements ApiServiceInterface {

    private $http;
    private $authToken;

    public function __construct($http, $authToken)
    {
        $this->http = $http;
        $this->authToken = $authToken;
    }

    // Simulate an API call with applicant data

    public function validate($applicantData): array {
        try {
            $response = Http::headers(['Authorization' => 'Bearer ' . $this->authToken])->post($this->http . '/validate', $applicantData);
            return $response->json();
        } catch (\Exception $e) {
            // Log error or handle exception appropriately
            throw new \Exception("API call failed: " . $e->getMessage());
        }
    }

    public function obtainQuote($applicantData): array {
        try {
            $response = Http::headers(['Authorization' => 'Bearer ' . $this->authToken])->post($this->http . '/quote', $applicantData);
            return $response->json();
        } catch (\Exception $e) {
            // Log error or handle exception appropriately
            throw new \Exception("API call failed: " . $e->getMessage());
        }
    }

    public function submitApplication($applicantData): array {
        try {
            $response = Http::headers(['Authorization' => 'Bearer ' . $this->authToken])->post($this->http . '/apply', $applicantData);
            return $response->json();
        } catch (\Exception $e) {
            // Log error or handle exception appropriately
            throw new \Exception("API call failed: " . $e->getMessage());
        }
    }
 }