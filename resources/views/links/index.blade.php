@extends('layouts.dashboard')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="offset-md-1 col-md-7">

            {{-- <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/dashboard/links/new" class="btn btn-primary btn-block">Add Link</a>
                </div>
            </div> --}}

            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <a href="/dashboard/links/new" class="btn btn-primary btn-block mb-4">Add Link</a>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (count($links) >= 1)
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Url</th>
                                    <th>Visits</th>
                                    <th>Last Visit</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tbody>
                                    @foreach($links as $link)
                                        <tr>
                                            <td>{{ $link->name }}</td>
                                            <td><a>{{ $link->link }}</a> </td>
                                            <td>{{ $link->visits_count }}</td>
                                            <td>
                                                {{ $link->latest_visit ? $link->latest_visit->created_at->format('M j Y - H:ia') : 'N/A' }}
                                            </td>
                                            <td class="font-link">
                                                <a href="/dashboard/links/{{ $link->id }}">
                                                    <i class="far fa-edit fa-lg"></i>
                                                </a> 
                                                <a href="/dashboard/links/{{ $link->id }}" class="ml-1"
                                                    onclick="event.preventDefault(); document.getElementById('delete-form').submit();">
                                                    <i class="far fa-trash-alt fa-lg"></i>
                                                </a>
                                                <form id="delete-form" action="/dashboard/links/{{ $link->id }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </tbody>
                    </table>
                    
                    @else
                        <p class="text-center">You don't have any links to display.</p>

                        <p class="text-center">Click the button above to add one.</p>
                    @endif 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
