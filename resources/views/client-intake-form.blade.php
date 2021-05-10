@extends('layouts.app')

@section('content')

<div class="container" style="color:red; background-color: #ffb3b3;">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="text-align:center;">{{ __('Client In-take Form') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('client-intake-form') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="pilot" class="col-md-2 col-form-label text-md-right">{{ __('Pilot') }}</label>

                            <div class="col-md-4">
                                <input id="pilot" type="text">
                            </div>

                            <div class="form-group row">
                                <label for="date" class="col-md-5 col-form-label text-md-right">{{ __('Date') }}</label>

                                <div class="col-md-2">
                                    <input id="date" type="date">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="client" class="col-md-2 col-form-label text-md-right">{{ __('Name of Client') }}</label>

                            <div class="col-md-4">
                                <input id="client" type="text">
                            </div>
                            <div class="form-group row">
                                <label for="ref" class="col-md-5 col-form-label text-md-right">{{ __('ref') }}</label>

                                <div class="col-md-2">
                                    <input id="ref" type="text">
                                </div>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="gender" class="col-md-2 col-form-label text-md-right">{{ __('Gender  ') }}</label>
                            <div class="col-md-4">
                                <input type="checkbox" id="f" name="f" value="female">
                                <label for="f"> Female</label><br>
                                <input type="checkbox" id="m" name="m" value="male">
                                <label for="m"> Male</label><br>
                                <input type="checkbox" id="o" name="o" value="other">
                                <label for="o"> Other</label><br><br>
                            </div>
                            <div class="form-group row">
                                <label for="idno" class="col-md-5 col-form-label text-md-right">{{ __('Identification number') }}</label>

                                <div class="col-md-2">
                                    <input id="idno" type="numbers">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="age" class="col-md-9 col-form-label text-md-right">{{ __('Age') }}</label>

                                <div class="col-md-2">
                                    <input id="age" type="numbers">
                                </div>
                                
                                <div class="form-group row">
                                    <label for="dob" class="col-md-12 col-form-label text-md-right">{{ __('Date of birth') }}</label>

                                    <div class="col-md-8">
                                        <input id="dob" type="date">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-danger">
                                        {{ __('Submit') }}
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