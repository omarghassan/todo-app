@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    @if (session('SUCCESS'))
                        <div class="alert alert-success" role="alert">
                            {{ session('SUCCESS') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('register.store') }}">
                        @csrf

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
                            <label for="full_name" class="col-md-4 col-form-label text-md-end">{{ __('Full Name') }}</label>
                            <div class="col-md-6">
                                <input id="full_name" type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" value="{{ old('full_name') }}" required autocomplete="name">
                                @error('full_name')
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
                            <label for="gender" class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>
                            <div class="col-md-6">
                                <select id="gender" class="form-select @error('gender') is-invalid @enderror" name="gender" required>
                                    <option value="" selected disabled>Select Gender</option>
                                    <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                                    <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                                </select>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="age_group" class="col-md-4 col-form-label text-md-end">{{ __('Age Group') }}</label>
                            <div class="col-md-6">
                                <select id="age_group" class="form-select @error('age_group') is-invalid @enderror" name="age_group" required>
                                    <option value="" selected disabled>Select Age Group</option>
                                    <option value="below_18" {{ old('age_group') == 'below_18' ? 'selected' : '' }}>Below 18</option>
                                    <option value="18_25" {{ old('age_group') == '18_25' ? 'selected' : '' }}>18-25</option>
                                    <option value="26_35" {{ old('age_group') == '26_35' ? 'selected' : '' }}>26-35</option>
                                    <option value="36_45" {{ old('age_group') == '36_45' ? 'selected' : '' }}>36-45</option>
                                    <option value="46_55" {{ old('age_group') == '46_55' ? 'selected' : '' }}>46-55</option>
                                    <option value="above_55" {{ old('age_group') == 'above_55' ? 'selected' : '' }}>Above 55</option>
                                </select>
                                @error('age_group')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="education_level" class="col-md-4 col-form-label text-md-end">{{ __('Education Level') }}</label>
                            <div class="col-md-6">
                                <select id="education_level" class="form-select @error('education_level') is-invalid @enderror" name="education_level" required>
                                    <option value="" selected disabled>Select Education Level</option>
                                    <option value="school" {{ old('education_level') == 'school' ? 'selected' : '' }}>School</option>
                                    <option value="university" {{ old('education_level') == 'university' ? 'selected' : '' }}>University</option>
                                    <option value="post_graduate" {{ old('education_level') == 'post_graduate' ? 'selected' : '' }}>Post Graduate</option>
                                </select>
                                @error('education_level')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="interests" class="col-md-4 col-form-label text-md-end">{{ __('Interests') }}</label>
                            <div class="col-md-6">
                                <textarea id="interests" class="form-control @error('interests') is-invalid @enderror" name="interests" required>{{ old('interests') }}</textarea>
                                @error('interests')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>
                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>
                            <div class="col-md-6">
                                <textarea id="address" class="form-control @error('address') is-invalid @enderror" name="address" required>{{ old('address') }}</textarea>
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="work" class="col-md-4 col-form-label text-md-end">{{ __('Currently Working') }}</label>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="work" id="work" value="1" {{ old('work') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="work">
                                        Yes, I am currently working
                                    </label>
                                </div>
                                @error('work')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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