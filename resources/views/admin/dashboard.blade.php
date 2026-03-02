@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Dashboard Overview</h1>

    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h5 class="card-title">Total Services</h5>
                            <h2>{{ $totalServices }}</h2>
                        </div>
                        <i class="fas fa-cogs fa-3x opacity-50"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h5 class="card-title">Total Projects</h5>
                            <h2>{{ $totalProjects }}</h2>
                        </div>
                        <i class="fas fa-project-diagram fa-3x opacity-50"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card bg-warning text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h5 class="card-title">Total Messages</h5>
                            <h2>{{ $totalMessages }}</h2>
                        </div>
                        <i class="fas fa-envelope fa-3x opacity-50"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card bg-info text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h5 class="card-title">Total Clients</h5>
                            <h2>{{ $totalClients }}</h2>
                        </div>
                        <i class="fas fa-users fa-3x opacity-50"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Recent Messages</h5>
                </div>
                <div class="card-body">
                    @foreach($recentMessages as $message)
                        <div class="mb-3 pb-3 border-bottom">
                            <strong>{{ $message->name }}</strong> - {{ $message->subject }}
                            <br><small class="text-muted">{{ date('M d, Y', strtotime($message->created_at)) }}</small>
                        </div>
                    @endforeach
                    <a href="{{ route('admin.messages') }}" class="btn btn-sm btn-primary">View All Messages</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Recent Projects</h5>
                </div>
                <div class="card-body">
                    @foreach($recentProjects as $project)
                        <div class="mb-3 pb-3 border-bottom">
                            <strong>{{ $project->title }}</strong>
                            <br><small class="text-muted">Status: {{ ucfirst($project->status) }}
                                @if($project->client)
                                    | Client: {{ $project->client->name }}
                                @endif
                            </small>
                        </div>
                    @endforeach
                    <a href="{{ route('admin.projects') }}" class="btn btn-sm btn-primary">View All Projects</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection