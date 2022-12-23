@extends('layout.master') @section('title', 'Transaction List') @push('css_after')
<style>
    td {
        max-width: 0;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
</style>
@endpush @section('content') <div class="table-responsive">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Transaction List</h2>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>id</th>
                    <th>kategori</th>
                    <th>nominal</th>
                    <th>tujuan</th>
                    <th>account_id</th>
                    <th>created_id</th>
                    <th>updated_at</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($transactions as $transaction)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $transaction->id }}</td>
                        <td>{{ $transaction->kategori }}</td>
                        <td>{{ $transaction->nominal }}</td>
                        <td>{{ $transaction->tujuan }}</td>
                        <td>{{ $transaction->account_id }}</td>
                        <td>{{ $transaction->created_at }}</td>
                        <td>{{ $transaction->updated_at }}</td>
                        <td style="width: 40%">{{ $transaction->description }}</td>
                </tr> @empty <tr>
                        <td align="center" colspan="6">No data yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div> @endsection
