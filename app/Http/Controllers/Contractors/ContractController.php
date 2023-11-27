<?php

namespace App\Http\Controllers\Contractors;

use App\Http\Controllers\CoreController;
use App\Http\Requests\Contractors\Contracts\StoreContractRequest;
use App\Http\Requests\Contractors\Contracts\UpdateContractRequest;
use App\Models\Contractors\Contract;
use App\Services\Contractor\ContractorService;
use App\Services\Contractor\ContractService;
use Illuminate\Http\RedirectResponse;

/**
 * Контроллер довогора с контрагентом.
 */
class ContractController extends CoreController
{
    /**
     * @var ContractorService
     */
    private $service;

    /**
     * @param ContractService $service
     */
    public function __construct(ContractService $service)
    {
        $this->service = $service;
        $this->authorizeResource(Contract::class);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreContractRequest $request
     *
     * @return RedirectResponse
     */
    public function store(StoreContractRequest $request): RedirectResponse
    {
        $validated = $request->validated()['contract'];

        $this->service->create($validated);

        return back()
            ->with(
                'success',
                __('contractors.contracts.actions.create.success')
            );
    }


    /**
     * Update the specified resource in storage.
     *
     * @param UpdateContractRequest $request
     * @param Contract              $contract
     *
     * @return RedirectResponse
     */
    public function update(UpdateContractRequest $request, Contract $contract): RedirectResponse
    {
        $this->service->update($contract, $request->validated());

        return back()
            ->with(
                'success',
                __('contractors.contracts.actions.update.success')
            );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Contract $contract
     *
     * @return RedirectResponse
     */
    public function destroy(Contract $contract): RedirectResponse
    {
        $this->service->delete($contract);

        return back()
            ->with(
                'success',
                __('contractors.contracts.actions.delete.success')
            );
    }

    /**
     * Restore the specified resource from storage.
     *
     * @param Contract $contract
     *
     * @return RedirectResponse
     */
    public function restore(Contract $contract): RedirectResponse
    {
        $this->service->restore($contract);

        return back()
            ->with(
                'success',
                __('contractors.contracts.actions.delete.success')
            );
    }
}
