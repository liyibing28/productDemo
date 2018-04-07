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
                                            <form action="/production/{{$production->id}}/edit" method="get">
                                                <button class="btn btn-success pull-right" type="submit" >修改订单状态</button>
                                            </form>
                                        </td>
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

