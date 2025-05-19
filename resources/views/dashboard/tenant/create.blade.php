@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 card card-body">
                <h3>Tambah Tenant</h3>
                <form action="">
                    <div class="row">
                        <div class="col mb-6">
                            <label for="tanggalMasuk">Nama Tenant</label>
                            <input type="text" name="name" id="tenant_name" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-6">
                            <label for="tanggalMasuk">Lokasi</label>
                            <select name="tenant_location_id" id="" class="form-control">
                                @foreach ($tenantLocations as $location)
                                    <option value="{{ $location->id }}">{{ $location->location_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-6">
                            <label for="tanggalMasuk">Status</label>
                            <select name="isOpen" id="" class="form-control">
                                <option value="1">Buka</option>
                                <option value="0">Tutup</option>
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-primary w-100">Tambah</button>
                </form>
            </div>
        </div>
    </div>
@endsection
