<?php

namespace iDeal\App\Interfaces;

/**
 * Interface for processing applicant data.
 * Defines the contract for processing an applicant using an API service.
 */

interface ApplicantProcessingInterface
{
    public function processApplicant(ApplicantEntity $applicant, ApiServiceFactory $apiServiceFactory): array;
    public function obtainQuote(ApplicantEntity $applicant, ApiServiceFactory $apiServiceFactory): array;
    public function submitApplication(ApplicantEntity $applicant, ApiServiceFactory $apiServiceFactory): array;
}