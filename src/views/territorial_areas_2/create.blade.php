@extends('pulsar::layouts.default')

@section('script')
    @include('pulsar::common.block.block_script_header_form')
@stop

@section('breadcrumbs')
<li>
    <a href="javascript:void(0);">{{ trans('pulsar::pulsar.administration') }}</a>
</li>
<li>
    <a href="{{ url(config('pulsar.appName')) }}/pulsar/paises">Países</a>
</li>
<li class="current">
    <a href="{{ url(config('pulsar.appName')) }}/pulsar/areasterritoriales2/{{ $pais->id_002 }}"><?php echo $pais->area_territorial_2_002; ?></a>
</li>
@stop

@section('mainContent')
<div class="row">
    <div class="col-md-12">
        <div class="widget box">
            <div class="widget-header"><h4><i class="entypo-icon-globe"></i> <?php echo $pais->area_territorial_2_002; ?></h4></div>
            <div class="widget-content">
                <form class="form-horizontal" method="post" action="{{ url(config('pulsar.appName')) }}/pulsar/areasterritoriales2/store/{{ $pais->id_002 }}/{{ $offset }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label class="col-md-2 control-label">ID <span class="required">*</span></label>
                        <div class="col-md-2">
                            <input class="form-control required" type="text" name="id" value="<?php echo Input::old('id'); ?>" rangelength="2, 10">
                            <?php echo $errors->first('id',config('pulsar.errorDelimiters')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">País</label>
                        <div class="col-md-4">
                            <input class="form-control" type="text" value="<?php echo $pais->nombre_002; ?>" readonly="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><?php echo $pais->area_territorial_1_002 ?> <span class="required">*</span></label>
                        <div class="col-md-2">
                            <select class="form-control" name="areaTerritorial1" notequal="null">
                                <option value="null">Elija un/a <?php echo $pais->area_territorial_1_002; ?></option>
                                <?php foreach ($areasTerritoriales1 as $areaTerritorial1): ?>
                                <option value="<?php echo $areaTerritorial1->id_003 ?>" <?php if(Input::old('areaTerritorial1') == $areaTerritorial1->id_003) echo 'selected=""'; ?>><?php echo $areaTerritorial1->nombre_003 ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php echo $errors->first('modulo',config('pulsar.errorDelimiters')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Nombre <span class="required">*</span></label>
                        <div class="col-md-10">
                            <input class="form-control required" type="text" name="nombre" value="{{ Input::old('nombre') }}" rangelength="2, 50">
                            <?php echo $errors->first('nombre',config('pulsar.errorDelimiters')); ?>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn marginR10">{{ trans('pulsar::pulsar.save') }}</button>
                        <a class="btn btn-inverse" href="{{ url(config('pulsar.appName')) }}/pulsar/areasterritoriales2/{{ $pais->id_002 }}/{{ $offset }}">{{ trans('pulsar::pulsar.cancel') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>       
@stop