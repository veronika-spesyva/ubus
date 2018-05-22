@extends('admin.layout')

@section ('content')
	  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Изменить статью
        <small>приятные слова..</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
{!! Form::open([ 
	'route' => ['trips.update', $trips->id],
	'files' => true,
	'method'=>'put'
	])!!}
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Обновляем рейс</h3>
        </div>
        <div class="box-body">
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Название</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="title_h1" value="{{$trips->title_h1}}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Направление</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="title" value="{{$trips->title}}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Маршрут</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="route" value="{{$trips->route}}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Расстояние</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="distance" value="{{$trips->distance}}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Цена</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="price" value="{{$trips->price}}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Время</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="time" value="{{$trips->time}}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Автобус</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="bus_id" value="{{$trips->bus_id}}">
            </div>
            
            <div class="form-group">
            	<img src="{{$trips->getImage()}}" alt="" class="img-responsive" width="200">
              <label for="exampleInputFile">Лицевая картинка</label>
              <input type="file" id="exampleInputFile" name="image">

              <p class="help-block">Какое-нибудь уведомление о форматах..</p>
            </div>

            <!-- Date -->
            <div class="form-group">
              <label>Дата:</label>

              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" class="form-control pull-right" id="datepicker" name="date" value="{{$trips->date}}">
              </div>
              <!-- /.input group -->
            </div>

            <!-- checkbox -->
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="exampleInputEmail1">Информация</label>
              <textarea name="content" id="" cols="30" rows="10" class="form-control">{{$trips->content}}</textarea>
          </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
              <label for="exampleInputEmail1">Расписание</label>
              <textarea name="schedule" id="" cols="30" rows="10" class="form-control">{{$trips->schedule}}</textarea>
          </div>
        </div>
      </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button class="btn btn-warning pull-right">Изменить</button>
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