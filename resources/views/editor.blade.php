@extends('layouts.app')

@section('content')

@if(isset($user))
	
<h1>EDIT USER DATA</h1>

<form action="{{ route('edit') }}" method="post">
	<input type="hidden" name="edit_id" value="{{ $user->id }}">
	<h2>Name</h2>
	<p><input class="input-text" type="text" name="edit_name" value="{{ $user->name }}"></p>
	<h2>Email</h2>
	<p><input class="input-text" type="email" name="edit_email" value="{{ $user->email }}"></p>
	<p><input class="btn btn-primary" type="submit" value="EDIT"></p>
	{{ csrf_field() }}
</form>	
	
@endif

@endsection

     