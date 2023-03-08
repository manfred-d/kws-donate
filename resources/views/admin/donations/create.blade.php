@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.donation.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.donations.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="donor_id">{{ trans('cruds.donation.fields.donor') }}</label>
                <select class="form-control select2 {{ $errors->has('donor') ? 'is-invalid' : '' }}" name="donor_id" id="donor_id">
                    @foreach($donors as $id => $entry)
                        <option value="{{ $id }}" {{ old('donor_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('donor'))
                    <div class="invalid-feedback">
                        {{ $errors->first('donor') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.donation.fields.donor_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.donation.fields.currency') }}</label>
                <select class="form-control {{ $errors->has('currency') ? 'is-invalid' : '' }}" name="currency" id="currency" required>
                    <option value disabled {{ old('currency', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Donation::CURRENCY_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('currency', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('currency'))
                    <div class="invalid-feedback">
                        {{ $errors->first('currency') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.donation.fields.currency_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="amount">{{ trans('cruds.donation.fields.amount') }}</label>
                <input class="form-control {{ $errors->has('amount') ? 'is-invalid' : '' }}" type="number" name="amount" id="amount" value="{{ old('amount', '') }}" step="0.01" required>
                @if($errors->has('amount'))
                    <div class="invalid-feedback">
                        {{ $errors->first('amount') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.donation.fields.amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="campaign_id">{{ trans('cruds.donation.fields.campaign') }}</label>
                <select class="form-control select2 {{ $errors->has('campaign') ? 'is-invalid' : '' }}" name="campaign_id" id="campaign_id" required>
                    @foreach($campaigns as $id => $entry)
                        <option value="{{ $id }}" {{ old('campaign_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('campaign'))
                    <div class="invalid-feedback">
                        {{ $errors->first('campaign') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.donation.fields.campaign_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.donation.fields.status') }}</label>
                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                    <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Donation::STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('status', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.donation.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="type">{{ trans('cruds.donation.fields.type') }}</label>
                <input class="form-control {{ $errors->has('type') ? 'is-invalid' : '' }}" type="text" name="type" id="type" value="{{ old('type', '') }}">
                @if($errors->has('type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.donation.fields.type_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection