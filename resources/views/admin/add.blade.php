<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    {{--    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">--}}

    {{--    <!-- MetisMenu CSS -->--}}
    {{--    <link href="{{asset('css/plugins/metisMenu/metisMenu.min.css')}}" rel="stylesheet">--}}

    {{--    <!-- DataTables CSS -->--}}
    {{--    <link href="{{asset('css/plugins/dataTables.bootstrap.css')}}" rel="stylesheet">--}}

    {{--    <!-- Custom CSS -->--}}
    {{--    <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet">--}}

    {{--    <!-- Custom Fonts -->--}}
    {{--    <link href="{{asset('font-awesome-4.1.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">--}}
    @extends('layouts.app')
</head>
@section('content')

    <body>
    <!-- Форма создания задачи... -->
    <div class="row">
        <div class="col-lg-10">
            <div class="panel-body">
                <!-- Форма новой задачи -->
                <form action="{{ url('/admin/oursource/') }}" method="POST" class="form-horizontal">
                    <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}
                <!-- Имя задачи -->
                    <div class="form-group">
                        <label for="task" class="col-sm-3 control-label">Имя продукта</label>
                        <div class="col-sm-6">
                            <input type="text" name="name_product" id="name_product" value="{{ $prod->name_product }}"
                                   class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="task" class="col-sm-3 control-label">description</label>
                        <div class="col-sm-6">
                            <input type="text" name="description" id="description" value="{{ $prod->description }}"
                                   class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="task" class="col-sm-3 control-label">Цена</label>
                        <div class="col-sm-6">
                            <input type="text" name="price" id="price" value="{{ $prod->price }}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="task" class="col-sm-3 control-label">IsEmpty</label>
                        <div class="col-sm-6">
                            <input type="text" name="IsEmpty" id="IsEmpty" value="{{ $prod->IsEmpty }}"
                                   class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="task" class="col-sm-3 control-label">IsSoda</label>
                        <div class="col-sm-6">
                            <input type="text" name="IsSoda" id="IsSoda" value="{{ $prod->IsSoda }}"
                                   class="form-control">
                        </div>
                    </div>

                    <!-- Кнопка добавления задачи -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-save"></i> Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="panel-body">
                <div class="panel-heading">
                    Таблица товара
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Название</th>
                                <th>Описание</th>
                                <th>Фото</th>
                                <th>Цена</th>
                                <th>Наличие</th>
                                <th>Газ или б/газ</th>
                                <th>Действие</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($production as $p)

                                <tr class="gradeA">
                                    <td>{{$p->id}}</td>
                                    <td>{{$p->name_product}}</td>
                                    <td>{{$p->description}}</td>
                                    <td>{{$p->photo}}</td>
                                    <td>{{$p->price}}</td>
                                    <td>
                                        @if ($p->IsEmpty === 1)
                                            {{'Есть в наличии'}}
                                        @else
                                            {{'Нет в наличии'}}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($p->IsSoda === 1)
                                            {{'Газированная'}}
                                        @else
                                            {{'Без газа'}}
                                        @endif
                                    </td>
                                    <td>
                                        <form action="{{ url('/admin/oursource/'.$p->id.'/edit') }}" method="GET">
                                            {{ csrf_field() }}
                                            {{ method_field('EDIT') }}
                                            <button type="submit" id="edit-task-{{ $p->id }}"
                                                    class="btn btn-primary">
                                                <i class="fa fa-btn fa-trash"></i>Edit
                                            </button>
                                        </form>
                                        <button type="button" class="btn btn-danger">Удалить</button>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>


                        </table>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>

    </body>

@stop
</html>

