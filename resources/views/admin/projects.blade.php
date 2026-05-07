@extends('layouts.app')

@section('content')
<section class="py-5">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="mb-0">Projects</h1>
            <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-secondary">Dashboard</a>
        </div>

        <div class="card shadow-sm">
            <div class="table-responsive">
                <table class="table table-striped align-middle mb-0">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Client</th>
                            <th>Status</th>
                            <th>Technologies</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($projects as $project)
                            <tr>
                                <td>{{ $project->title }}</td>
                                <td>{{ $project->client?->name ?? 'No client' }}</td>
                                <td>{{ ucfirst(str_replace('_', ' ', $project->status)) }}</td>
                                <td>{{ $project->technologies ?: 'Not set' }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted py-4">No projects found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
