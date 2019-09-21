@extends('layouts.app')
@section('content')
    <!-- Форма создания задачи... -->
    <div class="panel-body">
        <!-- Отображение ошибок проверки ввода -->
{{--    @include('common.errors')--}}

    <!-- Форма новой задачи -->
        <form action="{{ url('/admin/tables/'.$per->id.'/update') }}" method="POST" class="form-horizontal">
            <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}
        <!-- Имя задачи -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Фамилия</label>
                <div class="col-sm-6">
                    <input type="text" name="first_name" id="first_name" value="{{ $per->surname }}" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Имя</label>
                <div class="col-sm-6">
                    <input type="text" name="second_name" id="second_name" value="{{ $per->first_name }}" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Отчество</label>
                <div class="col-sm-6">
                    <input type="text" name="surname" id="surname" value="{{ $per->second_name }}" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Улица</label>
                <div class="col-sm-6">
                    <input type="text" name="street" id="street" value="{{ $per->street }}" class="form-control">
                </div>
            </div> <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Номер дома</label>
                <div class="col-sm-6">
                    <input type="text" name="numberofhome" id="numberofhome" value="{{ $per->numberofhome }}" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Квартира</label>
                <div class="col-sm-6">
                    <input type="text" name="flat" id="flat" value="{{ $per->flat }}" class="form-control">
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