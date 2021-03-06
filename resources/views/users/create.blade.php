@extends('layouts.portal')

@section('body')
    <div class="card">
        <div class="card-header">
            Create User
        </div>
        <div class="card-block">
            @if(count($errors) > 0)
                <div class="alert alert-danger" role="alert">
                    @foreach ($errors->all() as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </div>
            @endif
            <form action="{{route('users.index')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label class="col-2 col-form-label">Email</label>
                    <div class="col-10">
                        <input name="email" class="form-control" type="email" value="{{ old('email') }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label">Name</label>
                    <div class="col-10">
                        <input name="name" class="form-control" type="text" value="{{ old('name') }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label">Password</label>
                    <div class="col-10">
                        <input name="password" class="form-control" type="password"  required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label">Password Confirmation</label>
                    <div class="col-10">
                        <input name="password_confirmation" class="form-control" type="password" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-2 col-form-label"></label>
                    <div class="col-10">
                        <button type="submit" class="btn btn-primary right">Create</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
