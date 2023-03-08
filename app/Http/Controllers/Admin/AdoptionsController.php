<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAdoptionRequest;
use App\Http\Requests\StoreAdoptionRequest;
use App\Http\Requests\UpdateAdoptionRequest;
use App\Models\Adoption;
use App\Models\CrmCustomer;
use App\Models\ProductCategory;
use App\Models\Transaction;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdoptionsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('adoption_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $adoptions = Adoption::with(['adpotee', 'transaction', 'animal'])->get();

        return view('admin.adoptions.index', compact('adoptions'));
    }

    public function create()
    {
        abort_if(Gate::denies('adoption_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $adpotees = CrmCustomer::all()->pluck('first_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $transactions = Transaction::all()->pluck('ref', 'id')->prepend(trans('global.pleaseSelect'), '');

        $animals = ProductCategory::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.adoptions.create', compact('adpotees', 'transactions', 'animals'));
    }

    public function store(StoreAdoptionRequest $request)
    {
        $adoption = Adoption::create($request->all());

        return redirect()->route('admin.adoptions.index');
    }

    public function edit(Adoption $adoption)
    {
        abort_if(Gate::denies('adoption_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $adpotees = CrmCustomer::all()->pluck('first_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $transactions = Transaction::all()->pluck('ref', 'id')->prepend(trans('global.pleaseSelect'), '');

        $animals = ProductCategory::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $adoption->load('adpotee', 'transaction', 'animal');

        return view('admin.adoptions.edit', compact('adpotees', 'transactions', 'animals', 'adoption'));
    }

    public function update(UpdateAdoptionRequest $request, Adoption $adoption)
    {
        $adoption->update($request->all());

        return redirect()->route('admin.adoptions.index');
    }

    public function show(Adoption $adoption)
    {
        abort_if(Gate::denies('adoption_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $adoption->load('adpotee', 'transaction', 'animal');

        return view('admin.adoptions.show', compact('adoption'));
    }

    public function destroy(Adoption $adoption)
    {
        abort_if(Gate::denies('adoption_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $adoption->delete();

        return back();
    }

    public function massDestroy(MassDestroyAdoptionRequest $request)
    {
        Adoption::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
