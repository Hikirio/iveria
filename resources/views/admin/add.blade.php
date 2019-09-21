{{--@foreach ($prod as $p )--}}
{{--    {{$p}}--}}

{{--@endforeach--}}
@extends('layouts.app')
@section('content')
    <!-- Форма создания задачи... -->
    <div class="panel-body">
        <!-- Отображение ошибок проверки ввода -->
    {{--    @include('common.errors')--}}

    <!-- Форма новой задачи -->
        <form action="{{ url('/admin/oursource/') }}" method="POST" class="form-horizontal">
            <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}
        <!-- Имя задачи -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Имя продукта</label>
                <div class="col-sm-6">
                    <input type="text" name="name_product" id="name_product" value="{{ $prod->name_product }}" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">description</label>
                <div class="col-sm-6">
                    <input type="text" name="description" id="description" value="{{ $prod->description }}" class="form-control">
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
                    <input type="text" name="IsEmpty" id="IsEmpty" value="{{ $prod->IsEmpty }}" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">IsSoda</label>
                <div class="col-sm-6">
                    <input type="text" name="IsSoda" id="IsSoda" value="{{ $prod->IsSoda }}" class="form-control">
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
@endsection