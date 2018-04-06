@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">修改订单</div>

                        <div class="panel-body">
                            <form action="/production/{{$production->id}}" method="post">

                                {!! csrf_field() !!}
                                {{ method_field('PATCH') }}
                                <div class="form-group{{ $errors->has('kebian') ? ' has-error' : '' }}">
                                    <label for="kebian">客编:</label>
                                    {{ $production->customer_number }}
                                </div>

                                <div class="form-group{{ $errors->has('orderTime') ? ' has-error' : '' }}">
                                    <label for="orderTime">下单时间:</label>
                                    {{ $production->order_time }}
                                </div>

                                <div class="form-group{{ $errors->has('planedTime') ? ' has-error' : '' }}">
                                    <label for="planedTime">计划交期</label>
                                    {{ $production->planed_delibvery_time }}
                                </div>

                                <div class="form-group{{ $errors->has('specification') ? ' has-error' : '' }}">
                                    <label for="specification">规格</label>
                                    {{ $production->specification }}
                                </div>

                                <div class="form-group{{ $errors->has('model') ? ' has-error' : '' }}">
                                    <label for="model">型号</label>
                                    {{ $production->model }}
                                </div>



                                <div class="form-group{{ $errors->has('cuche') ? ' has-error' : '' }}">
                                    <label for="cuche">粗车</label>
                                    <input type="text" value="{{ $production->cuche }}" name="cuche" class="form-control" id="cuche">
                                    @if ($errors->has('cuche'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('cuche') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('cuche_renyuan') ? ' has-error' : '' }}">
                                    <label for="cuche_renyuan">粗车人员</label>
                                    <input type="text" value="{{ $production->cuche_type }}" name="cuche_renyuan" class="form-control" id="cuche_renyuan">
                                    @if ($errors->has('cuche_renyuan'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('cuche_renyuan') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('rechuli') ? ' has-error' : '' }}">
                                    <label for="rechuli">热处理</label>
                                    <input type="text" value="{{ old('rechuli') }}" name="rechuli" class="form-control" id="rechuli">
                                    @if ($errors->has('rechuli'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('rechuli') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('jingche') ? ' has-error' : '' }}">
                                    <label for="jingche">精车</label>
                                    <input type="text" value="{{ $production->jingche }}" name="jingche" class="form-control" id="jingche">
                                    @if ($errors->has('jingche'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('jingche') }}</strong>
                                    </span>
                                    @endif
                                </div>


                                <button class="btn btn-success pull-right" type="submit">修改订单</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection