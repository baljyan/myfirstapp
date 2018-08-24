@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in {{ Auth::user()->name }}

					<h1>Edit users data</h1>
					<form action="{{ route('home') }}" method="post">
						<input type="hidden" name="byname" value="byname">
						<p><input class="btn btn-primary" type="submit" value="FILTER BY NAME"></p>
						{{ csrf_field() }}
					</form>
					<form action="{{ route('home') }}" method="post">
						<input type="hidden" name="byemail" value="byemail">
						<p><input class="btn btn-primary" type="submit" value="FILTER BY EMAIL"></p>
						{{ csrf_field() }}
					</form>
				   <br><br>
				   <table class="table table-hover">
						<thead>
							<tr>
								<th>№ п/п</th>
								<th>Имя</th>
								<th>email</th>
								
								<th>Удалить</th>
							</tr>
						</thead>
						<tbody>
						   @foreach($users as $k => $user)
				
								<tr>
									<td>{{ $user->id }}</td>
									<td><a class="tabname" href="editor/{{ $user->id }}">{{ $user->name }}</a></td>
									<td>{{ $user->email }}</td>
									<td><button class="btn btn-danger"><a href="delete/{{ $user->id }}">Delete</a></button></td>
								</tr>
							
							@endforeach
						</tbody>
					</table>		   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

     