@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Enter the following information') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Contract Name*') }}</label>

                            <div class="col-md-6">
                                <input id="contract_name" type="text" class="form-control{{ $errors->has('contract_name') ? ' is-invalid' : '' }}" name="contract_name" value="{{ old('contract_name') }}" required autofocus>

                                @if ($errors->has('contract_name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('contract_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Contract Reference*') }}</label>

                            <div class="col-md-6">
                                <input id="contract_reference" type="contract_reference" class="form-control{{ $errors->has('contract_reference') ? ' is-invalid' : '' }}" name="contract_reference" value="{{ old('contract_reference') }}" required>

                                @if ($errors->has('contract_reference'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('contract_reference') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Contract Value*') }}</label>

                            <div class="col-md-6">
                                <input id="contract_value" type="contract_value" class="form-control{{ $errors->has('contract_value') ? ' is-invalid' : '' }}" name="contract_value" value="{{ old('contract_value') }}" required>

                                @if ($errors->has('contract_value'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('contract_value') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Award Date*') }}</label>

                            <div class="col-md-6">
                                <input id="award_date" type="award_date" class="form-control{{ $errors->has('award_date') ? ' is-invalid' : '' }}" name="award_date" value="{{ old('award_date') }}" required>

                                @if ($errors->has('award_date'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('award_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Payers Email*') }}</label>

                            <div class="col-md-6">
                                <input id="payers_email" type="payers_email" class="form-control{{ $errors->has('payers_email') ? ' is-invalid' : '' }}" name="payers_email" value="{{ old('payers_email') }}" required>

                                @if ($errors->has('payers_email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('payers_email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Payers Phone*') }}</label>

                            <div class="col-md-6">
                                <input id="payers_phone" type="payers_phone" class="form-control{{ $errors->has('payers_phone') ? ' is-invalid' : '' }}" name="payers_phone" value="{{ old('payers_phone') }}" required>

                                @if ($errors->has('payers_phone'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('payers_phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Vendor Name*') }}</label>

                            <div class="col-md-6">
                                <input id="vendor_name" type="vendor_name" class="form-control{{ $errors->has('vendor_name') ? ' is-invalid' : '' }}" name="vendor_name" value="{{ old('vendor_name') }}" required>

                                @if ($errors->has('vendor_name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('vendor_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Vendor Name*') }}</label>

                            <div class="col-md-6">
                                <input id="vendor_name" type="vendor_name" class="form-control{{ $errors->has('vendor_name') ? ' is-invalid' : '' }}" name="vendor_name" value="{{ old('vendor_name') }}" required>

                                @if ($errors->has('vendor_name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('vendor_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Vendor Name*') }}</label>

                            <div class="col-md-6">
                                <input id="vendor_name" type="vendor_name" class="form-control{{ $errors->has('vendor_name') ? ' is-invalid' : '' }}" name="vendor_name" value="{{ old('vendor_name') }}" required>

                                @if ($errors->has('vendor_name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('vendor_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
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
