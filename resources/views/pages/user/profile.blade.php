@extends('layouts.app')

@section('content')
    <div class="main-body">
        <div class="row gutters-sm">
            <div class="col-md-12 mb-3">
                <div class="card" style="border: none">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                class="rounded-circle shadow" width="150">
                            <div class="mt-3">
                                <h4>John Doe</h4>
                                <p class="text-secondary mb-1">Full Stack Developer</p>
                                <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                                <button class="btn btn-primary w-100"><a href="{{ route('edit-profile') }}"
                                        class="text-white">Edit Profil</a></button>
                                {{-- <button class="btn btn-outline-primary">Message</button> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-5 posts">
            <h2 class="my-5 text-center">Postingan</h2>
            <div class="col-md-3">
                <a href="">
                    <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="" class="img-fluid">
                </a>
                <div class="card" style="border-radius: 0px">
                    <div class="card-body">
                        <span><i class="far fa-heart"></i> 500 likes</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
