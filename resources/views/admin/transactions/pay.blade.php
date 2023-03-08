@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('Pay For') }} {{ trans('cruds.transaction.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
               
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.transaction.fields.id') }}
                        </th>
                        <td>
                            {{ $transaction->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.transaction.fields.donation') }}
                        </th>
                        <td>
                            {{ $transaction->donation->currency ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.transaction.fields.ref') }}
                        </th>
                        <td>
                            {{ $transaction->ref }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.transaction.fields.status') }}
                        </th>
                        <td>
                            {{ $transaction->status }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.transaction.fields.amount') }}
                        </th>
                        <td>
                            {{ $transaction->amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.transaction.fields.channel') }}
                        </th>
                        <td>
                            {{ $transaction->channel }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-succes" href="{{ route('') }}">
                    {{ trans('PAY') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection