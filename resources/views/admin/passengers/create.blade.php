@extends('admin.layout')

@section ('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Добавить статью
        <small>приятные слова..</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
{!! Form::open([
	'route' => 'passengers.store',
	'files' => true
	])!!}
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Добавляем рейс</h3>
        </div>
        <div class="box-body">
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Прізвище</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="title_h1" value="{{old('surname')}}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Ім'я</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="title" value="{{old('name')}}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">По-батькові</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="route" value="{{old('patronymic')}}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">E-mail</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="distance" value="{{old('email')}}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Телефон</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="price" value="{{old('phone')}}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Напрям</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="bus_id" value="{{old('trip_id')}}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Час</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="time" value="{{old('time')}}">
            </div>
            <!-- Date -->
            <div class="form-group">
              <label>Дата:</label>
              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" class="form-control pull-right" id="datepicker" name="date" value="{{old('date')}}">
              </div>
              <!-- /.input group -->
            </div>
            <!-- checkbox -->
          </div>
      </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button class="btn btn-default">Назад</button>
          <button class="btn btn-success pull-right">Добавить</button>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
{!! Form::close() !!}
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection