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
					
					
					<h1>Lits of all users</h1>
					<ul>
					   @foreach ($users as $user)
						<li>{{ $user->name }}</li>
					   @endforeach
				   </ul>
				   
				   <form id="register" action="#" method="POST">
						<h1>AJAX POST</h1>
						<input type="text" name="inp_name" id="firstname" class="form-control"></br>
						<input type="submit" value="Show" class="btn btn-pramary">
					</form>
				   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
