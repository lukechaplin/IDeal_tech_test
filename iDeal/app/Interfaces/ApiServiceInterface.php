<?php

namespace iDeal\App\Interfaces;

/**
 * Interface for API service interactions.
 * Defines the contract for making API calls with applicant data.
 */

interface ApiServiceInterface
{
    public function validate($applicantData): array;
    public function obtainQuote($applicantData): array;
    public function submitApplication($applicantData): array;
}