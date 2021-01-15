@extends('layouts.dashboard')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="offset-md-1 col-md-7">

            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <form action="/dashboard/create" method="post">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group"
                                    <label for="name">Link Name</label>
                                    <input type="text" id="name" name="name" 
                                        class="form-control @error('name') is-invalid @enderror" 
                                        value="{{ old('name') }}" placeholder="My Youtube Channel" required autocomplete="name" autofocus>
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group"
                                    <label for="link">Link URL</label>
                                    <input type="text" id="link" name="link" 
                                        class="form-control @error('link') is-invalid @enderror" 
                                        value="{{ old('link') }}" placeholder="https://youtube.com/user/my-channel" required autocomplete="link">  
    
                                    @error('link')
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
                                <button type="submit" class="btn btn-primary float-right">Save Link</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection