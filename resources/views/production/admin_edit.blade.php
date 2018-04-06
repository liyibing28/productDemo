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
                                    <label for="kebian">客编</label>
                                    <input type="text" value="{{ $production->kebian }}" name="kebian" class="form-control"  id="kebian">
                                    @if ($errors->has('kebian'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('kebian') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('orderTime') ? ' has-error' : '' }}">
                                    <label for="orderTime">下单时间</label>
                                    <input type="text" value="{{ $production->xiadanshijian }}" name="orderTime" class="form-control"  id="orderTime">

                                    @if ($errors->has('orderTime'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('orderTime') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('planedTime') ? ' has-error' : '' }}">
                                    <label for="planedTime">计划交期</label>
                                    <input type="text" value="{{ $production->jihuajiaoqi }}" name="planedTime" class="form-control" id="planedTime">
                                    @if ($errors->has('planedTime'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('planedTime') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('specification') ? ' has-error' : '' }}">
                                    <label for="specification">规格</label>
                                    <input type="text" value="{{ $production->guige }}" name="specification" class="form-control" id="specification">
                                    @if ($errors->has('specification'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('specification') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('model') ? ' has-error' : '' }}">
                                    <label for="model">型号</label>
                                    <input type="text" value="{{ $production->xinghao }}" name="model" class="form-control" id="model">
                                    @if ($errors->has('model'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('model') }}</strong>
                                    </span>
                                    @endif
                                </div>


                                <div class="form-group{{ $errors->has('kaidaoyi') ? ' has-error' : '' }}">
                                    <label for="kaidaoyi">开刀翼</label>
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
                                    <input type="text" value="{{ old('kaidaoyi_renyuan') }}" name="kaidaoyi_renyuan" class="form-control" id="kaidaoyi_renyuan">
                                    @if ($errors->has('kaidaoyi_renyuan'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('kaidaoyi_renyuan') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('kaiding') ? ' has-error' : '' }}">
                                    <label for="kaiding">开顶</label>
                                    <input type="text" value="{{ old('kaiding') }}" name="kaiding" class="form-control" id="kaiding">
                                    @if ($errors->has('kaiding'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('kaiding') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('kaiding_banci') ? ' has-error' : '' }}">
                                    <label for="kaiding_banci">开顶班次</label>
                                    <input type="text" value="{{ old('kaiding_banci') }}" name="kaiding_banci" class="form-control" id="kaiding_banci">
                                    @if ($errors->has('kaiding_banci'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('kaiding_banci') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('kaiding_renyuan') ? ' has-error' : '' }}">
                                    <label for="kaiding_renyuan">开顶人员</label>
                                    <input type="text" value="{{ old('kaiding_renyuan') }}" name="kaiding_renyuan" class="form-control" id="kaiding_renyuan">
                                    @if ($errors->has('kaiding_renyuan'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('kaiding_renyuan') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('zuankong_renyuan') ? ' has-error' : '' }}">
                                    <label for="zuankong_renyuan">钻孔</label>
                                    <input type="text" value="{{ old('zuankong_renyuan') }}" name="zuankong_renyuan" class="form-control" id="zuankong_renyuan">
                                    @if ($errors->has('zuankong_renyuan'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('zuankong_renyuan') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('zunakong_banci') ? ' has-error' : '' }}">
                                    <label for="zunakong_banci">钻孔班次</label>
                                    <input type="text" value="{{ old('zunakong_banci') }}" name="zunakong_banci" class="form-control" id="zunakong_banci">
                                    @if ($errors->has('zunakong_banci'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('zunakong_banci') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('zuankong_renyuan') ? ' has-error' : '' }}">
                                    <label for="zuankong_renyuan">钻孔人员</label>
                                    <input type="text" value="{{ old('zuankong_renyuan') }}" name="zuankong_renyuan" class="form-control" id="zuankong_renyuan">
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