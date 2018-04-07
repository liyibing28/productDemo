@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">未完成订单</div>

                        <div class="panel-body">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>序号</th>
                                        <th>客编</th>
                                        <th>下单时间</th>
                                        <th>计划交期</th>
                                        <th>规格</th>
                                        <th>型号</th>
                                        <th>粗车日期</th>
                                        <th>粗车人员</th>

                                        <th>热处理日期</th>

                                        <th>精车日期</th>

                                        <th>开刀翼日期</th>
                                        <th>开刀翼班次</th>
                                        <th>开刀翼人员</th>

                                        <th>开顶日期</th>
                                        <th>开顶班次</th>
                                        <th>开顶人员</th>

                                        <th>钻孔日期</th>
                                        <th>钻孔班次</th>
                                        <th>钻孔人员</th>
                                        <th>操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $num = 0; ?>
                                    @foreach($productions->all() as $production)
                                        <?php $num++;?>
                                        <tr>
                                            <td>
                                                {{$production->id}}
                                            </td>
                                            <td >
                                                {{$production->kebian}}
                                            </td>
                                            <td>
                                                {{$production->xiadanshijian}}
                                            </td>
                                            <td>
                                                {{$production->jihuajiaoqi}}
                                            </td>
                                            <td>
                                                {{$production->guige}}
                                            </td>
                                            <td>
                                                {{$production->xinghao}}
                                            </td>
                                            <td>
                                                {{$production->cuche}}
                                            </td>
                                            <td>
                                                {{$production->cuche_type}}
                                            </td>
                                            <td>
                                                {{$production->rechuli}}
                                            </td>
                                            <td>
                                                {{$production->jingche}}
                                            </td>
                                            <td>
                                                {{$production->kaidaoyi}}
                                            </td>
                                            <td>
                                                {{$production->kaidaoyi_banci}}
                                            </td>
                                            <td>
                                                {{$production->kaidaoyi_renyuan}}
                                            </td>
                                            <td>
                                                {{$production->kaiding}}
                                            </td>
                                            <td>
                                                {{$production->kaiding_banci}}
                                            </td>
                                            <td>
                                                {{$production->kaiding_renyuan}}
                                            </td>
                                            <td>
                                                {{$production->zuankong}}
                                            </td>
                                            <td>
                                                {{$production->zuankong_banci}}
                                            </td>
                                            <td>
                                                {{$production->zuankong_renyuan}}
                                            </td>
                                            <td>
                                                <form action="/production/{{$production->id}}/edit" method="get">
                                                <button class="btn btn-success pull-right" type="submit" >修改订单状态</button>
                                                </form>
                                            </td>
                                            @if(Auth::user()->role == 0)
                                                <td>
                                                    <form action="/production/{{$production->id}}/delete" method="get">
                                                        <button class="btn btn-success pull-right" type="submit" >删除订单</button>
                                                    </form>
                                                </td>
                                            @endif

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
    </div>

    <script type="text/javascript">
    </script>
@endsection

