@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.adoption.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.adoptions.update", [$adoption->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="adpotee_id">{{ trans('cruds.adoption.fields.adpotee') }}</label>
                <select class="form-control select2 {{ $errors->has('adpotee') ? 'is-invalid' : '' }}" name="adpotee_id" id="adpotee_id" required>
                    @foreach($adpotees as $id => $entry)
                        <option value="{{ $id }}" {{ (old('adpotee_id') ? old('adpotee_id') : $adoption->adpotee->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('adpotee'))
                    <div class="invalid-feedback">
                        {{ $errors->first('adpotee') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.adoption.fields.adpotee_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="transaction_id">{{ trans('cruds.adoption.fields.transaction') }}</label>
                <select class="form-control select2 {{ $errors->has('transaction') ? 'is-invalid' : '' }}" name="transaction_id" id="transaction_id">
                    @foreach($transactions as $id => $entry)
                        <option value="{{ $id }}" {{ (old('transaction_id') ? old('transaction_id') : $adoption->transaction->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('transaction'))
                    <div class="invalid-feedback">
                        {{ $errors->first('transaction') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.adoption.fields.transaction_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="animal_id">{{ trans('cruds.adoption.fields.animal') }}</label>
                <select class="form-control select2 {{ $errors->has('animal') ? 'is-invalid' : '' }}" name="animal_id" id="animal_id" required>
                    @foreach($animals as $id => $entry)
                        <option value="{{ $id }}" {{ (old('animal_id') ? old('animal_id') : $adoption->animal->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('animal'))
                    <div class="invalid-feedback">
                        {{ $errors->first('animal') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.adoption.fields.animal_helper') }}</span>
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