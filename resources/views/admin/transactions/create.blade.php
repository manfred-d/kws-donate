@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.transaction.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.transactions.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="donation_id">{{ trans('cruds.transaction.fields.donation') }}</label>
                <select class="form-control select2 {{ $errors->has('donation') ? 'is-invalid' : '' }}" name="donation_id" id="donation_id">
                    @foreach($donations as $id => $entry)
                        <option value="{{ $id }}" {{ old('donation_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('donation'))
                    <div class="invalid-feedback">
                        {{ $errors->first('donation') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.transaction.fields.donation_helper') }}</span>
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