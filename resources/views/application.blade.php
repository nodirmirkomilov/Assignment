@extends('layouts.landing')

@section('content')
    <div class="intro" style="min-height: 408px">
        <div class="intro__round"></div>
    </div>
    <section class="container">
        <form class="application__box" method="POST" action="{{ route('landing.application.store') }}" enctype="multipart/form-data">
            @csrf
            <h1 class="application__box-title">{{ __('landing.form_title') }}</h1>
            <div class="application__box-from mt-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group application__box-input">
                            <label for="title">{{ __('landing.form.title') }}</label>
                            <input type="text" class="form-control rounded form-control-lg" id="title" name="title" required value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group application__box-input">
                            <label for="description">{{ __('landing.form.description') }}</label>
                            <input type="text" class="form-control rounded form-control-lg" id="description"  name="description" required value="{{ old('description') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group application__box-select">
                            <label for="direction_id">{{ __('landing.form.direction_id') }}</label>
                            <select class="form-select form-select-lg" aria-label="{{ __('landing.form.direction_id') }}" id="direction_id"  name="direction_id" required>
                                <option value="">{{ __('landing.form.direction_id') }}</option>
                                @forelse($directions as $direction)
                                    <option value="{{ $direction->id }}">
                                        {{ $direction->title }}
                                    </option>
                                @empty
                                @endforelse
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group application__box-input">
                            <label for="members">{{ __('landing.form.members') }}</label>
                            <input type="number" min="1" class="form-control rounded form-control-lg" id="members" name="members" required value="{{ old('members') }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group application__box-select">
                            <label for="model_id">{{ __('landing.form.model_id') }}</label>
                            <select class="form-select form-select-lg" aria-label="{{ __('landing.form.model_id') }}" id="model_id" name="model_id" required>
                                <option value="">{{ __('landing.form.model_id') }}</option>
                                @forelse($models as $model)
                                    <option value="{{ $model->id }}">
                                        {{ $model->title }}
                                    </option>
                                @empty
                                @endforelse
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group application__box-input">
                            <label for="file">{{ __('landing.form.file') }}</label>
                            <input type="file" class="form-control rounded form-control-lg" id="file" name="file">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group application__box-select">
                            <label for="sales">{{ __('landing.form.sales') }}</label>
                            <select class="form-select form-select-lg" aria-label="{{ __('landing.form.sales') }}" id="sales" name="sales">
                                <option selected>{{ __('landing.form.sales') }}</option>
                                <option value="{{ __('landing.sales.yes') }}">{{ __('landing.sales.yes') }}</option>
                                <option value="{{ __('landing.sales.no') }}">{{ __('landing.sales.no') }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group application__box-input">
                            <label for="link">{{ __('landing.form.link') }}</label>
                            <input type="text" class="form-control rounded form-control-lg" id="link" name="link" required value="{{ old('link') }}">
                        </div>
                    </div>
                </div>
                <div class="border" style="margin-top: 42px;"></div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group application__box-input">
                            <label for="full_name">{{ __('landing.form.full_name') }}</label>
                            <input type="text" class="form-control rounded form-control-lg" id="full_name" name="full_name" required value="{{ old('full_name') }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group application__box-input">
                            <label for="role">{{ __('landing.form.role') }}</label>
                            <input type="text" class="form-control rounded form-control-lg" id="role" name="role" required value="{{ old('role') }}">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group application__box-input">
                            <label for="age">{{ __('landing.form.age') }}</label>
                            <input type="text" class="form-control rounded form-control-lg" id="age" name="age" required value="{{ old('age') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group application__box-input">
                            <label for="duration">{{ __('landing.form.duration') }}</label>
                            <input type="text" class="form-control rounded form-control-lg" id="duration" name="duration" required value="{{ old('duration') }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group application__box-input">
                            <label for="phone">{{ __('landing.form.phone') }}</label>
                            <input type="text" class="form-control rounded form-control-lg" id="phone" name="phone" required value="{{ old('phone') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group application__box-input">
                            <label for="telegram">{{ __('landing.form.telegram') }}</label>
                            <input type="text" class="form-control rounded form-control-lg" id="telegram" name="telegram" required value="{{ old('telegram') }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group application__box-input">
                            <label for="email">{{ __('landing.form.email') }}</label>
                            <input type="text" class="form-control rounded form-control-lg" id="email" name="email" required value="{{ old('email') }}">
                        </div>
                    </div>
                </div>
                <div class="border" style="margin-top: 42px;"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group application__box-select">
                            <label for="resources">{{ __('landing.form.resources') }}</label>
                            <select class="form-select form-select-lg d-none" aria-label="{{ __('landing.form.resources') }}" id="resources" name="resources[]" required multiple="multiple" >
                                @forelse($resources as $resource)
                                    <option value="{{ $resource->id }}">
                                        {{ $resource->title }}
                                    </option>
                                @empty
                                @endforelse
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group application__box-input">
                            <label for="resource_description">{{ __('landing.form.resource_description') }}</label>
                            <input type="text" class="form-control rounded form-control-lg" id="resource_description" name="resource_description" required value="{{ old('resource_description') }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group application__box-select">
                            <label for="social_id">{{ __('landing.form.social_id') }}</label>
                            <select class="form-select form-select-lg" aria-label="{{ __('landing.form.social_id') }}" id="social_id" name="social_id" required>
                                <option value="">{{ __('landing.form.social_id') }}</option>
                                @forelse($socials as $social)
                                    <option value="{{ $social->id }}">
                                        {{ $social->title }}
                                    </option>
                                @empty
                                @endforelse
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-check application__box-input">
                            <label class="form-check-label" for="privacy">
                                {!! __('landing.privacy', ['url' => route('landing.privacy')]) !!}
                            </label>
                            <input class="form-check-input" type="checkbox" value="" id="privacy" required>
                        </div>
                    </div>
                </div>
                <div class="row mt-3 mt-md-5 mb-4">
                    <div class="col-12">
                        <button class="intro__slider-button flex-grow-1 flex-shrink-0">
                            {{ __('main.application_btn') }}
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
