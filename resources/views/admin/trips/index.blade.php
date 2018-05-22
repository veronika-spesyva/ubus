@extends('admin.layout')

@section ('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blank page
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
{!! Form::open([
	'route' => 'trips.store',
	'files' => true
	])!!}
      <!-- Default box -->
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Листинг сущности</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <a href="{{route('trips.create')}}" class="btn btn-success">Добавить</a>
              </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Название</th>
                  <th>Направление</th>
                  <th>Картинка</th>
                  <th>Действия</th>
                </tr>
                </thead>
                <tbody>
                	@foreach($trips as $trips)
                <tr>
                	<td>{{$trips->id}}</td>
                    <td>{{$trips->title_h1}}</td>
                    <td>{{$trips->title}}</td>
                  <td>
                    <img src="{{$trips -> getImage()}}" alt="" width="100">
                  </td>
                  <td><a href="{{route('trips.edit', $trips->id)}}" class="fa fa-pencil"></a> 
                                {!! Form::open(['route' => ['trips.destroy', $trips->id], 'method'=>'delete']) !!}
                                <button onclick="return confirm('Ви впевнені?')" type="submit" class="delete"> 
                                    <i class="fa fa-remove"></i>
                                </button>
                                {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
      <!-- /.box -->
{!! Form::close() !!}
    </section>
    <!-- /.content -->
  </div>
@endsection