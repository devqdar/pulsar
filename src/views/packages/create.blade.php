@extends('pulsar::layouts.form', ['object' => trans_choice('pulsar::pulsar.package', 1), 'action' => 'store'])

@section('rows')
    <!-- pulsar::packages.crete -->
    @include('pulsar::common.block.block_form_text_group', ['label' => 'ID', 'name' => 'id', 'readOnly' => true, 'sizeField' => 2])
    @include('pulsar::common.block.block_form_text_group', ['label' => trans('pulsar::pulsar.name'), 'name' => 'name', 'value' => Input::old('name'), 'maxLength' => '50', 'rangeLength' => '2,50', 'required' => true])
    @include('pulsar::common.block.block_form_checkbox_group', ['label' => trans('pulsar::pulsar.active'), 'name' => 'active', 'value' => 1, 'isChecked' => Input::old('active')])
    <!-- /pulsar::packages.crete -->
@stop