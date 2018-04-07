@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">编辑员工</div>

                        <div class="panel-body">
                            <form action="/admin/manageEmployee/{{ $employee->id }}" method="post">

                                {!! csrf_field() !!}
                                {{ method_field('PATCH') }}

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name">姓名</label>
                                    <input type="text" value="{{ $employee->name }}" name="name" class="form-control" id="name">
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
                                    <label for="telephone">手机号</label>
                                    <input type="text" value="{{ $employee->telephone }}" name="telephone" class="form-control" id="telephone">
                                    @if ($errors->has('telephone'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password">密码</label>
                                    <input type="text" value="{{ old('password') }}" name="password" class="form-control" id="password">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>


                                <button class="btn btn-success pull-right" type="submit">编辑</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection