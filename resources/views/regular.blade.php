@extends('main.master')

@section('total')

 <h4>Regular Students Registered <span style="float:right"> Total: {{ $total_reg }} <span><h4> 
@endsection

@section('content')

<div>
	@if(Session::has('add'))
		<div class="alert alert-success">
			{{ Session::get('add') }}
		</div>
	@endif
</div>
  @foreach($regular as $reg)
      <tr>
        <td>{{ $reg->name }}</td>
        <td>{{ $reg->gender }}</td>
        <td>{{ $reg->indexno }}</td>
      </tr>
  @endforeach


@endsection