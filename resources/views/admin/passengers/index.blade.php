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
	'route' => 'passengers.store',
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
                <a href="{{route('passengers.create')}}" class="btn btn-success">Додати</a>
              </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>ПІБ</th>
                  <th>Напрям</th>
                  <th>Дата</th>
                  <th>Действия</th>
                </tr>
                </thead>
                <tbody>
                	@foreach($passengers as $passengers)
                <tr>
                	<td>{{$passengers->id}}</td>
                    <td>{{$passengers->name}} {{$passengers->surname}} {{$passengers->patronymic}}</td>
                    <td></td>
                  <td>{{$passengers->date}}</td>
                  <td><a href="{{route('passengers.edit', $passengers->id)}}" class="fa fa-pencil"></a> 
                                {!! Form::open(['route' => ['passengers.destroy', $passengers->id], 'method'=>'delete']) !!}
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