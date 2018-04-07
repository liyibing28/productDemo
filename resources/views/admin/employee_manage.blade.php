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
                                    <th>姓名</th>
                                    <th>手机</th>
                                    <th>员工类型</th>
                                    <th>操作</th>
                                    <td>
                                        <form action="/admin/addEmployee" method="get">
                                            <button class="btn btn-success pull-right" type="submit" >注册新人员</button>
                                        </form>
                                    </td>
                                </tr>
                                </thead>
                                <tbody>

                                <?php $num = 0; ?>
                                @foreach($users->all() as $user)
                                    <?php $num++;?>
                                    <tr>
                                        <td>
                                            {{$user->id}}
                                        </td>
                                        <td >
                                            {{$user->name}}
                                        </td>
                                        <td>
                                            {{$user->telephone}}
                                        </td>
                                        <td>
                                            @if($user->role == 0)
                                                <p>管理员</p>
                                            @endif
                                            @if($user->role == 1)
                                                <p>公司员工</p>
                                            @endif
                                            @if($user->role == 2)
                                                <p>外包商</p>
                                            @endif
                                        </td>
                                        <td>
                                            <form action="/admin/{{$user->id}}/edit" method="get">
                                                <button class="btn btn-success pull-right" type="submit" >编辑</button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="/admin/{{$user->id}}/delete" method="get">
                                                <button class="btn btn-success pull-right" type="submit" >删除</button>
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

