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
                                <div class="form-group{{ $errors->has('jihuajiaoqi') ? ' has-error' : '' }}">
                                    <label for="jihuajiaoqi">客编:</label>
                                    {{ $production->customer_number }}
                                </div>

                                <div class="form-group{{ $errors->has('jihuajiaoqi') ? ' has-error' : '' }}">
                                    <label for="jihuajiaoqi">下单时间:</label>
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


                                <div class="form-group{{ $errors->has('kaidaoyi') ? ' has-error' : '' }}">
                                    <label for="kaidaoyi">开刀翼日期</label>
                                    <input type="text" value="{{ $production->kaidaoyi }}" name="kaidaoyi" class="form-control" id="kaidaoyi">
                                    @if ($errors->has('kaidaoyi'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('kaidaoyi') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('kaidaoyi_banci') ? ' has-error' : '' }}">
                                    <label for="kaidaoyi_banci">开刀翼班次</label>
                                    <input type="text" value="{{ $production->kaidaoyi_banci }}" name="kaidaoyi_banci" class="form-control" id="kaidaoyi_banci">
                                    @if ($errors->has('kaidaoyi_banci'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('kaidaoyi_banci') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('kaidaoyi_renyuan') ? ' has-error' : '' }}">
                                    <label for="kaidaoyi_renyuan">开刀翼人员</label>
                                    <input type="text" value="{{ $production->kaidaoyi_renyuan }}" name="kaidaoyi_renyuan" class="form-control" id="kaidaoyi_renyuan">
                                    @if ($errors->has('kaidaoyi_renyuan'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('kaidaoyi_renyuan') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('kaiding') ? ' has-error' : '' }}">
                                    <label for="kaiding">开顶日期</label>
                                    <input type="text" value="{{ $production->kaiding }}" name="kaiding" class="form-control" id="kaiding">
                                    @if ($errors->has('kaiding'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('kaiding') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('kaiding_banci') ? ' has-error' : '' }}">
                                    <label for="kaiding_banci">开顶班次</label>
                                    <input type="text" value="{{ $production->kaiding_banci }}" name="kaiding_banci" class="form-control" id="kaiding_banci">
                                    @if ($errors->has('kaiding_banci'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('kaiding_banci') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('kaiding_renyuan') ? ' has-error' : '' }}">
                                    <label for="kaiding_renyuan">开顶人员</label>
                                    <input type="text" value="{{ $production->kaiding_renyuan }}" name="kaiding_renyuan" class="form-control" id="kaiding_renyuan">
                                    @if ($errors->has('kaiding_renyuan'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('kaiding_renyuan') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('zuankong') ? ' has-error' : '' }}">
                                    <label for="zuankong">钻孔日期</label>
                                    <input type="text" value="{{ $production->zuankong }}" name="zuankong" class="form-control" id="zuankong">
                                    @if ($errors->has('zuankong'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('zuankong') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('zuankong_banci') ? ' has-error' : '' }}">
                                    <label for="zuankong_banci">钻孔班次</label>
                                    <input type="text" value="{{ $production->zuankong_banci }}" name="zuankong_banci" class="form-control" id="zuankong_banci">
                                    @if ($errors->has('zuankong_banci'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('zuankong_banci') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('zuankong_renyuan') ? ' has-error' : '' }}">
                                    <label for="zuankong_renyuan">钻孔人员</label>
                                    <input type="text" value="{{ $production->zuankong_renyuan }}" name="zuankong_renyuan" class="form-control" id="zuankong_renyuan">
                                    @if ($errors->has('zuankong_renyuan'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('zuankong_renyuan') }}</strong>
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