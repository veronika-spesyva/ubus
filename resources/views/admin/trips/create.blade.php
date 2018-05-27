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
     'route' => 'trips.store',
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
            <label for="exampleInputEmail1">Название</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="title_h1" value="{{old('title_h1')}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Направление</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="title" value="{{old('title')}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Маршрут</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="route" value="{{old('route')}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Расстояние</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="distance" value="{{old('distance')}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Цена</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="price" value="{{old('price')}}">
          </div>
          <div class="form-group">
            <label>Дни недели</label>
            <select id="exampleInputEmail1" name="days[]" class="form-control select2" multiple="multiple" data-placeholder="Выберите дни недели" style="width: 100%;">
              <option value="0">Понедельник</option>
              <option value="1">Вторник</option>
              <option value="2">Среда</option>
              <option value="3">Четверг</option>
              <option value="4">Пятница</option>
              <option value="5">Субота</option>
              <option value="6">Воскресенье</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Время</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="time" value="{{old('time')}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Автобус</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="bus_id" value="{{old('bus_id')}}">
          </div>
          
          <div class="form-group">
            <label for="exampleInputFile">Лицевая картинка</label>
            <input type="file" id="exampleInputFile" name="image">

            <p class="help-block">Какое-нибудь уведомление о форматах..</p>
          </div>

          <!-- checkbox -->
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label for="exampleInputEmail1">Информация</label>
            <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label for="exampleInputEmail1">Расписание</label>
            <textarea name="schedule" id="" cols="30" rows="10" class="form-control"></textarea>
          </div>
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