@extends('pulsar::layouts.index', ['newTrans' => 'new2', 'customTrans' => $country->territorial_area_3_002])

@section('script')
    @parent
    <!-- pulsar::territorial_areas_3.index -->
    <script type="text/javascript">
        $(document).ready(function() {
            if ($.fn.dataTable)
            {
                $('.datatable-pulsar').dataTable({
                    'iDisplayStart' : {{ $offset }},
                    'aoColumnDefs': [
                        { 'bSortable': false, 'aTargets': [4,5]},
                        { 'sClass': 'checkbox-column', 'aTargets': [4]},
                        { 'sClass': 'align-center', 'aTargets': [5]}
                    ],
                    "bProcessing": true,
                    "bServerSide": true,
                    "sAjaxSource": "{{ route('jsonData' . $routeSuffix, [$country->id_002]) }}"
                }).fnSetFilteringDelay();
            }
        });
    </script>
    <!-- /pulsar::territorial_areas_3.index -->
@stop

@section('tHead')
    <!-- pulsar::territorial_areas_2.index -->
    <th data-hide="phone,tablet">ID.</th>
    <th data-hide="phone">{{ $country->territorial_area_1_002 }}</th>
    <th data-hide="phone">{{ $country->territorial_area_2_002 }}</th>
    <th data-class="expand">{{ $country->territorial_area_3_002 }}</th>
    <th class="checkbox-column"><input type="checkbox" class="uniform"></th>
    <th>{{ trans_choice('pulsar::pulsar.action', 2) }}</th>
    <!-- /pulsar::territorial_areas_2.index -->
@stop