# iDeal_tech_test

This is my submission for the iDeal tech test.

It has been written using PSR-1 standards and using DocBlocks for documenting the code for readability and understanding purposes.

The solution takes into account the following problem statement:

**Devise a class structure to facilitate the implementation for the loan scenario.**

You will already have an Applicant Entity class which contains all the fields submitted by the loan applicant.

Make your proposed code intentions clear.

The applicant process from the submitted entity will be as follows:

- validate submission for a chosen lender
- submit to a chosen lender
- obtain quotes from a chosen lender

When consumers apply for a loan, we gather their personal details and then
obtain loan from one or more of a panel of lenders.

We need to build an applicant processing service for sending consumer applications to different individual lenders for their quotes.

The method of data transport varies from lender to lender. The fields to be
validated vary from lender to lender.

The quote process varies from lender to lender.

Maximum time to spend of this task: 1.5 hours

## Solution

I have implemented SOLID and the factory design pattern within my code to allow for a clear seperations of concerns and loose coupling via the use of intergfaces - this itself lends itself to clean architecture priniciples as well.

By use of the applicant entity class I am ensuring there is an adequate DTO available for transforming the data submitted by a user that can then be used flexibly by any of the loan providers Api services.

I have included a UML diagram to show the relationship between the interfaces, the applicant processing class, the applicant entity class, the Api Service and the Api Factory classes.

## Further Work

To take this solution forward there a number of improvements still required:

- Create additional Api services for all lenders
- Update Api factory class to allow for selection of other lenders
- Update Api factory class to allow for error handling
- Create database tables or key vault to store loan provider Api service credentials securely
- Create error log table for capturing any errors within of the processing flow for further investigation
- create command for calling the Api factory class and register with the application so it can be set to be explicitly called or called on a schedule as needed.
