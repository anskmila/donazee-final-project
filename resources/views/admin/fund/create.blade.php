@extends('layout.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tambah Bukti Transfer</h1>
<p class="mb-4"></p>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('fund.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="donation_campaigns_id">Campaign Donasi</label>
            <select name="donation_campaigns_id" required class="form-control">
                <option value="">Pilih Campaign Donasi</option>
                @foreach($donation_campaigns as $donation_campaign)
                    <option value="{{ $donation_campaign->id }}">
                        {{ $donation_campaign->title }}                    
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="image">Upload Gambar / Foto</label>
            <input type="file" name="image">
        </div>
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
        </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->

@endsection