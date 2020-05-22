@extends('layouts.default', ['title'=> 'Contact'])

@section('content')

<h1 class="text-center">Contact</h1>

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-1">
			
			<h1>Get In Touch</h1>
			<p class="">If you having trouble with this service, please ask for help.</p>

			<form action="{{ route('contact_path') }}"  method="POST">
				@csrf
				
				<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
					<label for="name" class="control-label">Name</label>

					<input type="text" id="name" class="form-control " required="required">
					{!! $errors->first('name', '<span class="help-block">:message</span>') !!}
				</div>
 
				<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
					<label for="email" class="control-label">Email</label>

					<input type="text" id="email" class="form-control" required="required">

					{!! $errors->first('email', '<span class="help-block">:message</span>') !!}
				</div>

				<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
					<label for="message" class="control-label sr-only" >Message</label>

					<textarea name="message" id="message" cols="10" rows="10" class="form-control "></textarea>
					{!! $errors->first('message', '<span class="help-block">:message</span>') !!}
				</div>

				<div class="form-group">
					<button class="btn btn-primary btn-block">Submit and query</button>
				</div>
			</form>
		</div>
	</div>
</div>

@stop