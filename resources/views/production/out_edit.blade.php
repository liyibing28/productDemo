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
                                    <label for="jihuajiaoqi">客编:</label>
                                    {{ $production->kebian }}
                                </div>

                                <div class="form-group{{ $errors->has('xiadanshijian') ? ' has-error' : '' }}">
                                    <label for="xiadanshijian">下单时间:</label>
                                    {{ $production->xiadanshijian }}
                                </div>

                                <div class="form-group{{ $errors->has('jihuajiaoqi') ? ' has-error' : '' }}">
                                    <label for="jihuajiaoqi">计划交期</label>
                                    {{ $production->jihuajiaoqi }}
                                </div>

                                <div class="form-group{{ $errors->has('jihuajiaoqi') ? ' has-error' : '' }}">
                                    <label for="jihuajiaoqi">规格</label>
                                    {{ $production->guige }}
                                </div>

                                <div class="form-group{{ $errors->has('jihuajiaoqi') ? ' has-error' : '' }}">
                                    <label for="jihuajiaoqi">型号</label>
                                    {{ $production->xinghao }}
                                </div>



                                <div class="form-group{{ $errors->has('cuche') ? ' has-error' : '' }}">
                                    <label for="cuche">粗车时间</label>
                                    <input type="text" value="{{ $production->cuche }}" name="cuche" class="form-control" id="cuche">
                                    @if ($errors->has('cuche'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('cuche') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('cuche_type') ? ' has-error' : '' }}">
                                    <label for="cuche_type">粗车人员</label>
                                    <input type="text" value="{{ $production->cuche_type }}" name="cuche_type" class="form-control" id="cuche_type">
                                    @if ($errors->has('cuche_type'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('cuche_type') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('rechuli') ? ' has-error' : '' }}">
                                    <label for="rechuli">热处理时间</label>
                                    <input type="text" value="{{ $production->rechuli }}" name="rechuli" class="form-control" id="rechuli">
                                    @if ($errors->has('rechuli'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('rechuli') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('jingche') ? ' has-error' : '' }}">
                                    <label for="jingche">精车时间</label>
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