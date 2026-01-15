<?php

namespace iDeal\App\ProcessingClass;

use iDeal\App\EntityClass\ApplicantEntityClass; 
use iDeal\App\Factory\ApiFactory;
use iDeal\App\Interfaces\ApplicantProcessingInterface;

/**
 * Class responsible for processing applicant data.
 * Implements the ApplicantProcessingInterface to ensure contract adherence.
 * Uses an ApiService to handle API interactions.
 * @return array
 */

class ApplicantProcessing implements ApplicantProcessingInterface
{
    public function processApplicant(ApplicantEntityClass $applicant, ApiServiceFactory $apiServiceFactory): array
    {
        // Call submit API service with applicant data
        try {
            $apiService = $apiServiceFactory->getApiService('SomeProvider');
            $apiResponse = $apiService->submitApplication($applicant->toArray());
            return $apiResponse;
        } catch (\Exception $e) {
            // Handle exception
            return ["Error processing applicant: " . $e->getMessage()];
        }
    }

    public function obtainQuote(ApplicantEntityClass $applicant, ApiServiceFactory $apiServiceFactory): array
    {
        // Call obtain quote API service with applicant data
        try {
            $apiService = $apiServiceFactory->getApiService('SomeProvider');
            $apiResponse = $apiService->obtainQuote($applicant->toArray());
            return $apiResponse;
        } catch (\Exception $e) {
            // Handle exception
            return ["Error obtaining quote: " . $e->getMessage()];
        }
    }

    public function submitApplication(ApplicantEntityClass $applicant, ApiServiceFactory $apiServiceFactory): array
    {
        // Call submit application API service with applicant data
        try {
            $apiService = $apiServiceFactory->getApiService('SomeProvider');
            $apiResponse = $apiService->submitApplication($applicant->toArray());
            return $apiResponse;
        } catch (\Exception $e) {
            // Handle exception
            return ["Error submitting application: " . $e->getMessage()];
        }
    }
}