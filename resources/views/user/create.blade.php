@extends('layouts.default')
@section('content')
<h4>Create New User </h4>
<hr class="p-3">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create User') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('user.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="dob-confirm" class="col-md-4 text-md-end">Date of Birth</label>
                            <div class="col-md-6">
                                <input id="dob-confirm" type="date" name="dob" class="form-control">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="bio-confirm" class="col-md-4 text-md-end">Biography</label>
                            <div class="col-md-6">
                                <textarea id="bio-confirm" name="bio" class="form-control" rows="4" cols="50"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="fb-confirm" class="col-md-4 text-md-end">Facebook</label>
                            <div class="col-md-6">
                                <input id="fb-confirm" type="text" name="facebook" class="form-control">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="twt-confirm" class="col-md-4 text-md-end">Twitter</label>
                            <div class="col-md-6">
                                <input id="twt-confirm" type="text" name="twitter" class="form-control">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="git-confirm" class="col-md-4 text-md-end">Git Hub</label>
                            <div class="col-md-6">
                                <input id="git-confirm" type="text" name="github" class="form-control">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
