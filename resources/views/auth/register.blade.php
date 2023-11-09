@extends('main_layout.master')

@section('title', 'Wisdom Chest Register Account')
<script src="https://apis.google.com/js/platform.js" async defer></script>

@section('content')
@php
    @$fname = $_GET['name'];
    @$email = $_GET['email'];
    // dd($fname." ".$email);
@endphp
    <div class="rbt-banner-area rbt-banner-4 bg_image bg_image--13 header-transperent-spacer">
        <div class="wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Register') }}</div>

                            <div class="card-body pb-5">
                                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row mb-3">
                                        <label for="name"
                                            class="col-md-4 col-form-label text-md-end">{{ __('First Name') }}</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                value="{{ $fname }}" required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="last_name"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>

                                        <div class="col-md-6">
                                            <input id="last_name" type="text"
                                                class="form-control @error('last_name') is-invalid @enderror"
                                                name="last_name" value="{{ old('last_name') }}" required
                                                autocomplete="last_name">

                                            @error('last_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="email"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ $email }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="password"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="password-confirm"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="date_of_birth"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Date of Birth') }}</label>

                                        <div class="col-md-6">
                                            <input id="date_of_birth" type="date"
                                                class="form-control @error('date_of_birth') is-invalid @enderror"
                                                name="date_of_birth" value="{{ old('date_of_birth') }}" required
                                                autocomplete="date_of_birth">

                                            @error('date_of_birth')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="gender"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>

                                        <div class="col-md-6 rbt-modern-select bg-transparent">
                                            <select id="gender" class="form-control @error('gender') is-invalid @enderror"
                                                name="gender" required>
                                                <option value="" disabled selected>Select Gender</option>
                                                <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male
                                                </option>
                                                <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>
                                                    Female
                                                </option>
                                                <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>
                                                    Other
                                                </option>
                                            </select>

                                            @error('gender')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="profile_image"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Profile Image') }}</label>

                                        <div class="col-md-6 course-field mb--15">
                                            <input id="profile_image" type="file"
                                                class="inputfile @error('profile_image') is-invalid @enderror"
                                                name="profile_image" accept="image/*">

                                            @error('profile_image')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="whatsapp"
                                            class="col-md-4 col-form-label text-md-end">{{ __('WhatsApp No.') }}</label>

                                        <div class="col-md-6">
                                            <input id="whatsapp" type="number"
                                                class="form-control @error('whatsapp') is-invalid @enderror"
                                                name="whatsapp" value="{{ old('whatsapp') }}" required
                                                autocomplete="whatsapp">

                                            @error('whatsapp')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="book_genre"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Book Genre') }}</label>

                                        <div class="col-md-6 rbt-modern-select bg-transparent">
                                            <select id="book_genre"
                                                class="form-control @error('book_genre') is-invalid @enderror"
                                                name="book_genre[]" required multiple>
                                                <option value="" disabled selected>Select Book Genre</option>
                                                <option value="fiction"
                                                    {{ in_array('fiction', old('book_genre', [])) ? 'selected' : '' }}>
                                                    Fiction
                                                </option>
                                                <option value="non-fiction"
                                                    {{ in_array('non-fiction', old('book_genre', [])) ? 'selected' : '' }}>
                                                    Non-Fiction</option>
                                                <option value="fantasy"
                                                    {{ in_array('fantasy', old('book_genre', [])) ? 'selected' : '' }}>
                                                    Fantasy
                                                </option>
                                                <option value="romance"
                                                    {{ in_array('romance', old('book_genre', [])) ? 'selected' : '' }}>
                                                    Romance
                                                </option>
                                                <!-- Add other genres as needed -->
                                            </select>

                                            @error('book_genre')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-0">
                                        <div class="col-md-4 offset-md-4">
                                            <button type="submit" class="rbt-btn text-center">
                                                {{ __('Register') }}
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 offset-md-2">
                                            <div class="text-center mb-3">
                                                <p>{{ __('Or register using social media') }}</p>
                                            </div>
                                            <div class="text-center">
                                                <a href="{{ route('login.facebook') }}"
                                                    class="rbt-btn text-center">{{ __('Register with Facebook') }}</a>
                                                <a href="{{ route('login.google') }}"
                                                    class="rbt-btn text-center" style="background-color: #ed3232">{{ __('Register with Google') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
