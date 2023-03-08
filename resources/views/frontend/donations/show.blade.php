@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.show') }} {{ trans('cruds.donation.title') }}
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.donations.index') }}">
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
                            <a class="btn btn-default" href="{{ route('frontend.donations.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection