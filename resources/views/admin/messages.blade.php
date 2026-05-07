@extends('layouts.app')

@section('content')
<section class="py-5">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="mb-0">Messages</h1>
            <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-secondary">Dashboard</a>
        </div>

        <div class="card shadow-sm">
            <div class="table-responsive">
                <table class="table table-striped align-middle mb-0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Service</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($messages as $message)
                            <tr>
                                <td>{{ $message->name }}</td>
                                <td><a href="mailto:{{ $message->email }}">{{ $message->email }}</a></td>
                                <td>{{ $message->phone ?: 'Not provided' }}</td>
                                <td>{{ $message->service ?: $message->subject ?? 'General inquiry' }}</td>
                                <td>{{ Str::limit($message->message, 120) }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted py-4">No messages found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
