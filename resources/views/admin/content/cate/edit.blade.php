@extends('admin.content.common')

@section('content')
    <section class="content-header">
        <h1>
            分类修改
            <small>Classification of modified</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="panel panel-default">
                        <div class="panel-heading">修改分类</div>

                        @if ($errors->has('error'))
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <strong>Error!</strong>
                                {{ $errors->first('error', ':message') }}
                                <br/>
                                请联系开发者！
                            </div>
                        @endif

                        <div class="panel-body">
                            {!! Form::model($cate, ['route' => ['admin.cate.update', $cate->id], 'method' => 'put','class'=>'form-horizontal']) !!}

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">上级分类</label>
                                <div class="col-sm-3">
                                    {!! Form::select('parent_id', App\Model\Category::getCategoryTree() , $cate->parent_id , ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">分类名称</label>
                                <div class="col-sm-3">
                                    {!! Form::text('cate_name', $cate->cate_name, ['class' => 'form-control','placeholder'=>'category_name']) !!}
                                    <font color="red">{{ $errors->first('cate_name') }}</font>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">别名</label>
                                <div class="col-sm-3">
                                    {!! Form::text('as_name', $cate->as_name, ['class' => 'form-control','placeholder'=>'as_name']) !!}
                                    <font color="red">{{ $errors->first('as_name') }}</font>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">seo 标题</label>
                                <div class="col-sm-3">
                                    {!! Form::text('seo_title', $cate->seo_title, ['class' => 'form-control','placeholder'=>'seo_title']) !!}
                                    <font color="red">{{ $errors->first('seo_title') }}</font>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">seo 关键字</label>
                                <div class="col-sm-3">
                                    {!! Form::text('seo_key', $cate->seo_key, ['class' => 'form-control','placeholder'=>'seo_key']) !!}
                                    <font color="red">{{ $errors->first('seo_key') }}</font>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">seo 描述</label>
                                <div class="col-sm-3">
                                    {!! Form::textarea('seo_desc', $cate->seo_desc, ['class' => 'form-control']) !!}
                                    <font color="red">{{ $errors->first('seo_desc') }}</font>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    {!! Form::submit('修改', ['class' => 'btn btn-success']) !!}
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
