<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyDonationRequest;
use App\Http\Requests\StoreDonationRequest;
use App\Http\Requests\UpdateDonationRequest;
use App\Models\Campaign;
use App\Models\CrmCustomer;
use App\Models\Donation;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DonationsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('donation_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $donations = Donation::with(['donor', 'campaign'])->get();

        return view('admin.donations.index', compact('donations'));
    }

    public function create()
    {
        abort_if(Gate::denies('donation_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $donors = CrmCustomer::all()->pluck('first_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $campaigns = Campaign::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.donations.create', compact('donors', 'campaigns'));
    }

    public function store(StoreDonationRequest $request)
    {
        $donation = Donation::create($request->all());

        return redirect()->route('admin.donations.index');
    }

    public function edit(Donation $donation)
    {
        abort_if(Gate::denies('donation_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $donors = CrmCustomer::all()->pluck('first_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $campaigns = Campaign::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $donation->load('donor', 'campaign');

        return view('admin.donations.edit', compact('donors', 'campaigns', 'donation'));
    }

    public function update(UpdateDonationRequest $request, Donation $donation)
    {
        $donation->update($request->all());

        return redirect()->route('admin.donations.index');
    }

    public function show(Donation $donation)
    {
        abort_if(Gate::denies('donation_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $donation->load('donor', 'campaign', 'donationTransactions');

        return view('admin.donations.show', compact('donation'));
    }

    public function destroy(Donation $donation)
    {
        abort_if(Gate::denies('donation_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $donation->delete();

        return back();
    }

    public function massDestroy(MassDestroyDonationRequest $request)
    {
        Donation::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
