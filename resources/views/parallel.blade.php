@extends('main.master')

@section('total')

 <h4>Parallel Students Registered <span style="float:right"> Total: {{ $total_para }} <span><h4> 
@endsection

@section('content')

<div>
	@if(Session::has('add'))
		<div class="alert alert-success">
			{{ Session::get('add') }}
		</div>
	@endif
</div>

 @foreach($parallel as $para)
      <tr>
        <td>{{ $para->name }}</td>
        <td>{{ $para->gender }}</td>
        <td>{{ $para->indexno }}</td>
      </tr>
  @endforeach

@endsection