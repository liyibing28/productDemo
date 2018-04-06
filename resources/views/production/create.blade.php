@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">创建订单</div>

                        <div class="panel-body">
                            <form action="/production" method="post">
                                {!! csrf_field() !!}
                                <div class="form-group{{ $errors->has('kebian') ? ' has-error' : '' }}">
                                    <label for="kebian">客编</label>
                                    <input type="text" value="{{ old('kebian') }}" name="kebian" class="form-control"  id="kebian">
                                    @if ($errors->has('kebian'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('kebian') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('orderTime') ? ' has-error' : '' }}">
                                    <label for="orderTime">下单时间</label>
                                    <input type="text" value="{{ old('orderTime') }}" name="orderTime" class="form-control"  id="orderTime">
                                    <!--<input type="text" id="datepicker"> -->

                                    @if ($errors->has('orderTime'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('orderTime') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('planedTime') ? ' has-error' : '' }}">
                                    <label for="planedTime">计划交期</label>
                                    <input type="text" value="{{ old('planedTime') }}" name="planedTime" class="form-control" id="planedTime">
                                    @if ($errors->has('planedTime'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('planedTime') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('specification') ? ' has-error' : '' }}">
                                    <label for="specification">规格</label>
                                    <input type="text" value="{{ old('specification') }}" name="specification" class="form-control" id="specification">
                                    @if ($errors->has('specification'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('specification') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('model') ? ' has-error' : '' }}">
                                    <label for="model">型号</label>
                                    <input type="text" value="{{ old('model') }}" name="model" class="form-control" id="model">
                                    @if ($errors->has('model'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('model') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <button class="btn btn-success pull-right" type="submit">创建订单</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection