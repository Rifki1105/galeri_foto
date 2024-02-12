@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-25 mt-5 rounded p-4 shadow-lg">
            <h1 class="text-center mb-5">Register</h1>
            <form action="{{ route('register.process') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                        name="nama" placeholder="Masukan Nama">
                    @error('nama')
                        <div class="invalid-feeback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nis" class="form-label">NIS</label>
                    <input type="number" class="form-control @error('nis') is-invalid @enderror" id="nis"
                        name="nis" placeholder="Masukan NIS">
                    @error('nis')
                        <div class="invalid-feeback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                        name="email" placeholder="Masukan Email">
                    @error('email')
                        <div class="invalid-feeback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                        name="password" placeholder="Masukan Password">
                    @error('password')
                        <div class="invalid-feeback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary w-100 mb-3 mt-3">Register</button>
                <p class="text-center mb-0">Sudah punya akun? <a
                        href="{{ route('login.index') }}"class="text-decoration-none">Masuk</a></p>
            </form>
        </div>
    </div>
@endsection
