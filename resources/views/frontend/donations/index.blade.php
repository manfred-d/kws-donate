@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @can('donation_create')
                <div style="margin-bottom: 10px;" class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-success" href="{{ route('frontend.donations.create') }}">
                            {{ trans('global.add') }} {{ trans('cruds.donation.title_singular') }}
                        </a>
                    </div>
                </div>
            @endcan
            <div class="card">
                <div class="card-header">
                    {{ trans('cruds.donation.title_singular') }} {{ trans('global.list') }}
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-Donation">
                            <thead>
                                <tr>
                                    <th>
                                        {{ trans('cruds.donation.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.donation.fields.donor') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.donation.fields.currency') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.donation.fields.amount') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.donation.fields.campaign') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.donation.fields.status') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.donation.fields.type') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($donations as $key => $donation)
                                    <tr data-entry-id="{{ $donation->id }}">
                                        <td>
                                            {{ $donation->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $donation->donor->first_name ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\Donation::CURRENCY_SELECT[$donation->currency] ?? '' }}
                                        </td>
                                        <td>
                                            {{ $donation->amount ?? '' }}
                                        </td>
                                        <td>
                                            {{ $donation->campaign->name ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\Donation::STATUS_SELECT[$donation->status] ?? '' }}
                                        </td>
                                        <td>
                                            {{ $donation->type ?? '' }}
                                        </td>
                                        <td>
                                            @can('donation_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('frontend.donations.show', $donation->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('donation_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('frontend.donations.edit', $donation->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('donation_delete')
                                                <form action="{{ route('frontend.donations.destroy', $donation->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                                </form>
                                            @endcan

                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('donation_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('frontend.donations.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Donation:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  $('div#sidebar').on('transitionend', function(e) {
    $($.fn.dataTable.tables(true)).DataTable().columns.adjust();
  })
  
})

</script>
@endsection