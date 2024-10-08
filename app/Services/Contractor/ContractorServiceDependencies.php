<?php

namespace App\Services\Contractor;

use App\Repositories\Admin\Organization\OrganizationRepository;
use App\Repositories\Classifier\LegalFormRepository;
use App\Repositories\Contractor\ContractorRepository;
use App\Services\CoreDependencyService;

/**
 * Сервис зависимостей для ContractorService
 */
class ContractorServiceDependencies extends CoreDependencyService
{
    /**
     * @param ContractorRepository   $contractor
     * @param OrganizationRepository $organization
     * @param LegalFormRepository    $legalForm
     */
    public function __construct(
        ContractorRepository $contractor,
        OrganizationRepository $organization,
        LegalFormRepository $legalForm
    ) {
        $this->repositories = compact('contractor', 'organization', 'legalForm');
    }
}
