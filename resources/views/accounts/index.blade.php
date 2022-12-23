@extends('layout.master') @section('title', 'Account List') @push('css_after')
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
                    <h2>Account List</h2>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>id</th>
                    <th>nama</th>
                    <th>jenis</th>
                    <th>created_at</th>
                    <th>updated_at</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($accounts as $account)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $account->id }}</td>
                        <td>{{ $account->nama }}</td>
                        <td>{{ $account->jenis }}</td>
                        <td>{{ $account->created_at }}</td>
                        <td>{{ $account->updated_at }}</td>
                        <td style="width: 40%">{{ $account->description }}</td>
                </tr> @empty <tr>
                        <td align="center" colspan="6">No data yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div> @endsection
