<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDonationRequest;
use App\Http\Requests\UpdateDonationRequest;
use App\Http\Resources\Admin\DonationResource;
use App\Models\Donation;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DonationsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('donation_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new DonationResource(Donation::with(['donor', 'campaign'])->get());
    }

    public function store(StoreDonationRequest $request)
    {
        $donation = Donation::create($request->all());

        return (new DonationResource($donation))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Donation $donation)
    {
        abort_if(Gate::denies('donation_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new DonationResource($donation->load(['donor', 'campaign']));
    }

    public function update(UpdateDonationRequest $request, Donation $donation)
    {
        $donation->update($request->all());

        return (new DonationResource($donation))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Donation $donation)
    {
        abort_if(Gate::denies('donation_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $donation->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
