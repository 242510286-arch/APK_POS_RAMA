@extends('layouts.app')

@section('title', 'Edit Jenis Produk')

@section('content')

<div class="row justify-content-center">

    <div class="col-md-6">

        <div class="card border-0 shadow-sm">

            <div class="card-body">

                <h4 class="fw-bold mb-4">
                    ✏️ Edit Jenis Produk
                </h4>

                <form action="{{ route('jenis-produk.update', $jenisProduk->id) }}"
                      method="POST">

                    @csrf
                    @method('PUT')

                    <div class="mb-3">

                        <label class="form-label">
                            Nama Jenis Produk
                        </label>

                        <input type="text"
                               name="nama_jenis"
                               class="form-control @error('nama_jenis') is-invalid @enderror"
                               value="{{ old('nama_jenis', $jenisProduk->nama_jenis) }}">

                        @error('nama_jenis')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <div class="d-flex gap-2">

                        <a href="{{ route('jenis-produk.index') }}"
                           class="btn btn-secondary">
                            Kembali
                        </a>

                        <button type="submit"
                                class="btn btn-primary">
                            Update
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection