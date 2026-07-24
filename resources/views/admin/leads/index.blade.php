@extends('layouts.app')

@section('section')
    <section class="p100">
        <div class="container">
            <h2 class="fs-52 mb-50">Admin Leads</h2>

            @if (session('status'))
                <div class="alert alert-success mb-22">{{ session('status') }}</div>
            @endif

            <div class="mb-22">
                <a class="btn" href="{{ url('/') }}">Back to website</a>
            </div>

            <div class="card p-3 mb-4">
                <h4 class="mb-3">Lead Send To</h4>
                <form method="POST" action="{{ route('admin.leads.send-to.update') }}" class="row g-2 align-items-end">
                    @csrf
                    <div class="col-md-8">
                        <label for="lead_send_to_email" class="form-label">Email address</label>
                        <input
                            type="email"
                            id="lead_send_to_email"
                            name="lead_send_to_email"
                            class="form-control"
                            value="{{ old('lead_send_to_email', $leadSendToEmail) }}"
                            placeholder="name@example.com"
                            required
                        >
                        @error('lead_send_to_email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn w-100">Save Email</button>
                    </div>
                </form>
                <small class="d-block mt-2 text-muted">All new leads will be sent to this email using the Resend mailer.</small>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered align-middle">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Type</th>
                            <th>Source</th>
                            <th>IP</th>
                            <th>Created</th>
                            <th>Details (JSON)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($leads as $lead)
                            <tr>
                                <td>{{ $lead->id }}</td>
                                <td>{{ $lead->form_type }}</td>
                                <td>{{ $lead->source }}</td>
                                <td>{{ $lead->ip_address }}</td>
                                <td>{{ $lead->created_at?->format('Y-m-d H:i:s') }}</td>
                                <td>
                                    <details>
                                        <summary>View JSON</summary>
                                        <pre class="mt-2">{{ json_encode($lead->details, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) }}</pre>
                                    </details>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">No leads found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-4">
                {{ $leads->links() }}
            </div>
        </div>
    </section>
@endsection
