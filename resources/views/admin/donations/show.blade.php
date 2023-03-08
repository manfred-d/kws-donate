@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.donation.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.donations.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.donation.fields.id') }}
                        </th>
                        <td>
                            {{ $donation->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.donation.fields.donor') }}
                        </th>
                        <td>
                            {{ $donation->donor->first_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.donation.fields.currency') }}
                        </th>
                        <td>
                            {{ App\Models\Donation::CURRENCY_SELECT[$donation->currency] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.donation.fields.amount') }}
                        </th>
                        <td>
                            {{ $donation->amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.donation.fields.campaign') }}
                        </th>
                        <td>
                            {{ $donation->campaign->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.donation.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\Donation::STATUS_SELECT[$donation->status] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.donation.fields.type') }}
                        </th>
                        <td>
                            {{ $donation->type }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.donations.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#donation_transactions" role="tab" data-toggle="tab">
                {{ trans('cruds.transaction.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="donation_transactions">
            @includeIf('admin.donations.relationships.donationTransactions', ['transactions' => $donation->donationTransactions])
        </div>
    </div>
</div>

@endsection