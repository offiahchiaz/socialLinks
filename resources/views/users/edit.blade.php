@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 card">
                <div class="card-body">
                    <h2 class="card-title">Editing user settings </h2>
                    <form action="/dashboard/settings" method="post">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group"
                                    <label for="background_color">Background Color</label>
                                    <input type="text" id="background_color" name="background_color" 
                                        class="form-control @error('background_color') is-invalid @enderror" 
                                        value="{{ $user->background_color }}" placeholder="#ffffff" required 
                                        autocomplete="background_color" autofocus>
    
                                    @error('background_color')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group"
                                    <label for="text_color">Text Color</label>
                                    <input type="text" id="text_color" name="text_color" 
                                        class="form-control @error('text_color') is-invalid @enderror" 
                                        value="{{ $user->text_color }}" placeholder="#000000" required autocomplete="text_color">  
    
                                    @error('text_color')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                @csrf
                                <button type="submit" class="float-right btn btn-primary{{ session('success') ? ' is-valid' : ''}}">Save Settings</button>

                                @if (session('success'))
                                    <div class="valid-feedback">
                                        {{ session('success') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection