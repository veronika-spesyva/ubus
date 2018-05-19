@extends('admin.layout')

@section('content')
<!-- Content Wrapper. Contains page content -->
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

      <!-- Default box -->
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Міста</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <a href="{{route('cities.create')}}" class="btn btn-success">Добавить</a>
              </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>№ пп (ID)</th>
                  <th>Назва міста</th>
                  <th>Дія</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($cities as $cities)
                        <tr>
                          <td>{{$cities->id}}</td>
                          <td>{{$cities->city_name}}</td>
                          <td><a href="{{route('cities.edit', $cities->id)}}" class="fa fa-pencil"></a> 
                                {!! Form::open(['route' => ['cities.destroy', $cities->id], 'method'=>'delete']) !!}
                                <button onclick="return confirm('Ви впевнені?')" type="submit" class="delete"> 
                                    <i class="fa fa-remove"></i>
                                </button>
                                {!! Form::close() !!}
                          </td>
                        </tr>
                    @endforeach

                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

