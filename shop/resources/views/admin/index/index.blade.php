@extends('admin.layout');

@section('main')
	@include('admin.index.sub')
	@foreach($data as $v)
			{{$v->name}}|{{$v->age}}|{{$v->email}}<br/>
	@endforeach
@endsection
