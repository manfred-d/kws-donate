@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.create') }} {{ trans('cruds.adoption.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.adoptions.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="adpotee_id">{{ trans('cruds.adoption.fields.adpotee') }}</label>
                            <select class="form-control select2" name="adpotee_id" id="adpotee_id" required>
                                @foreach($adpotees as $id => $entry)
                                    <option value="{{ $id }}" {{ old('adpotee_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
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
                            <select class="form-control select2" name="transaction_id" id="transaction_id">
                                @foreach($transactions as $id => $entry)
                                    <option value="{{ $id }}" {{ old('transaction_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
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
                            <select class="form-control select2" name="animal_id" id="animal_id" required>
                                @foreach($animals as $id => $entry)
                                    <option value="{{ $id }}" {{ old('animal_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
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

        </div>
    </div>
</div>
@endsection