@extends('layouts.base')

@section('page.title', 'Форма регистрации')


@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h4 class="m-0">
                                {{ __('Регистрация') }}
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('registration.store') }}" method = "POST">
                                @csrf
                                <div class="mb-3">
                                    <label class="required mb-2">{{ __('Имя') }}</label>
                                    <input type="name" name="name" class="form-control" value="{{ request()->old('name') }}" autofocus>
                                </div>

                                <div class="mb-3">
                                    <label class="required mb-2">{{ __('Фамилия') }}</label>
                                    <input type="text" name="surname" class="form-control" value="{{ request()->old('surname') }}">
                                </div>

                                <div class="mb-3">
                                    <label class="mb-2">{{ __('Пол') }}</label>
                                    <input type="text" name="gender" class="form-control" value="{{ request()->old('gender') }}">
                                </div>

                                <div class="mb-3">
                                    <label class="mb-2">{{ __('Национальность') }}</label>
                                    <input type="text" name="nationality" class="form-control" value="{{ request()->old('nationality') }}">
                                </div>

                                <div class="mb-3">
                                    <label class="mb-2">{{ __('Название организации') }}</label>
                                    <input type="text" name="organization_name" class="form-control" value="{{ request()->old('organization_name') }}">
                                </div>

                                <div class="mb-3">
                                    <label class="mb-2">{{ __('Должность') }}</label>
                                    <input type="text" name="job_title" class="form-control" value="{{ request()->old('job_title') }}">
                                </div>

                                <div class="mb-3">
                                    <label class="mb-2">{{ __('Дата рождения') }}</label>
                                    <input type="date" name="date_of_birth" class="form-control" value="{{ request()->old('date_of_birth') }}">
                                </div>

                                <div class="mb-3">
                                    <label class="required mb-2">{{ __('Email') }}</label>
                                    <input type="email" name="email" class="form-control" value="{{ request()->old('email') }}">
                                </div>

                                <div class="mb-3">
                                    <label class="required mb-2">{{ __('Пароль') }}</label>
                                    <input type="password" name="password" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label class="required mb-2">{{ __('Подтверждение пароля') }}</label>
                                    <input type="password" name="password_confirmation" class="form-control">
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    {{ __('Войти') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection