@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">未完成订单</div>

                        <div  class=" panel-body; ">
                            <table id="scroll_bar" class="table table-bordered">
                                <thead>
                                <tr id="bar_head">
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

                                <tbody id="testTbody"> </tbody>
                            </table>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    </div>

    <script type="text/javascript">
        $(function(){

            var scroll_bar = $("#scroll_bar");//表格的id
            var bar_head = $("#bar_head");//表头
            var bar_height = bar_head.height();//表头高
            var bat_width = bar_head.width();
            var sroll_header= scroll_bar.clone().attr('id','bb');//更改复制的表格id
            $(window).scroll(function(){
                var scroll_top = $('body').scrollTop() - scroll_bar.offset().top;//判断是否到达窗口顶部

                if (scroll_top > 0) {
                    $('body').append('<div id="shelter"></div>');//复制的表格所在的容器
                    $("#shelter").css({'height':bar_height,'position':'fixed','top':'0','overflow':'hidden','width':'980px','margin': '0 auto','left':'0','right':'0','border-bottom':'1px solid #c8c8c8'});
                    sroll_header.appendTo('#shelter');
                    $('#shelter table').removeClass(); //删除table原来有的默认class，防止margin,padding等值影响样式
                    //$('#shelter table').css({'width':'980px','background-color':'#f0f0f0','margin':'0 auto'});
                    $('#shelter table').css({'width':bat_width,'background-color':'#f0f0f0','margin':'0 auto'});
                    $('#shelter table tr th').css('height', bar_height);//此处可以自行发挥
                    $('#shelter table tr td').css({'padding':'20px','text-align':'center'});

                    $('#shelter').show();

                }else {
                    $('#shelter').hide();
                }
            });

        });
    </script>
@endsection

