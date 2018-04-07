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

                                <div class="form-group{{ $errors->has('xiadanshijian') ? ' has-error' : '' }}">
                                    <label for="xiadanshijian">下单时间</label>
                                    <input type="text" value="{{ $production->xiadanshijian }}" name="xiadanshijian" class="form-control"  id="xiadanshijian">

                                    @if ($errors->has('xiadanshijian'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('xiadanshijian') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('jihuajiaoqi') ? ' has-error' : '' }}">
                                    <label for="jihuajiaoqi">计划交期</label>
                                    <input type="text" value="{{ $production->jihuajiaoqi }}" name="jihuajiaoqi" class="form-control" id="jihuajiaoqi">
                                    @if ($errors->has('jihuajiaoqi'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('jihuajiaoqi') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('guige') ? ' has-error' : '' }}">
                                    <label for="guige">规格</label>
                                    <input type="text" value="{{ $production->guige }}" name="guige" class="form-control" id="guige">
                                    @if ($errors->has('guige'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('guige') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('xinghao') ? ' has-error' : '' }}">
                                    <label for="xinghao">型号</label>
                                    <input type="text" value="{{ $production->xinghao }}" name="xinghao" class="form-control" id="xinghao">
                                    @if ($errors->has('xinghao'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('xinghao') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('cuche') ? ' has-error' : '' }}">
                                    <label for="cuche">粗车日期</label>
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
                                    <label for="rechuli">热处理日期</label>
                                    <input type="text" value="{{ $production->rechuli }}" name="rechuli" class="form-control" id="rechuli">
                                    @if ($errors->has('rechuli'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('rechuli') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('jingche') ? ' has-error' : '' }}">
                                    <label for="jingche">精车日期</label>
                                    <input type="text" value="{{ $production->jingche }}" name="jingche" class="form-control" id="jingche">
                                    @if ($errors->has('jingche'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('jingche') }}</strong>
                                    </span>
                                    @endif
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
                                    <label for="zuankong_renyuan">钻孔日期</label>
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