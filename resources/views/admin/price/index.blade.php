@extends('admin.layout')

@section('content')

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
				<h3 class="box-title">Листинг сущности</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<div class="form-group">
					<a href="create.html" class="btn btn-success">Добавить</a>
				</div>
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Откуда</th>
							<th>Куда</th>
							<th>Цена</th>
							<th>Действия</th>
						</tr>
					</thead>
					<tbody>
						@foreach($prices as $prices)
						<tr>
							<td>{{$prices->id}}</td>
							<td>{{$prices->city_from}}</td>
							<td>{{$prices->city_to}}</td>
							<td><a href="{{route('price.edit', $prices->id)}}" class="fa fa-pencil"></a>
							 {!! Form::open(['route' => ['price.destroy', $prices->id], 'method'=>'delete']) !!}
                                <button onclick="return confirm('Ви впевнені?')" type="submit" class="delete"> 
                                    <i class="fa fa-remove"></i>
                                </button>
                                {!! Form::close() !!}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->

	</section>
	<!-- /.content -->
</div>

@endsection