@extends('layouts.app')

@section('content')
    <div class="row justify-content-center align-items-start">
        @foreach ($photos as $photo)
            <div class="col-10 col-md-3 mx-1 my-3 p-1 rounded shadow-lg">
                <div class="d-flex justify-content-between align-items-center">
                    <a href="{{ route('profile.index', $photo->user->id) }}"
                        class="ms-3 mt-3 mb-4 d-flex justify-content-start align-items-center mb-2 text-decoration-none">
                        <img src="https://dummyimage.com/640x1:1/" alt="profile-picture" class="img-fluid rounded-circle"
                            width="50">
                        <span class="ms-2 fs-5 text-dark">{{ $photo->user->nama }}</span>
                    </a>
                    <p class="text-muted fs-6 me-3">{{ date('d-m-y', strtotime($photo->created_at)) }}</p>
                </div>
                <a href="{{ route('photo.index', $photo->id) }}" class="text-decoration-none">
                    <img class="img-fluid mx-auto d-block" src="{{ asset('storage/' . $photo->lokasi_file) }}"
                        alt="{{ $photo->judul_foto }}">
                    {{-- Like --}}
                    <div class="p-3 d-flex justify-content-start align-items-center">
                        @if ($photo->liked_by_user_exists)
                            <form action="{{ route('like_photo.unlike') }}" method="POST">
                                @csrf
                                <input type="hidden" name="photo_id" value="{{ $photo->id }}">
                                <button class="btn p-0" type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem"
                                        fill="currentColor" class="bi bi-heart-fill text-danger" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314" />
                                    </svg>
                                </button>
                            </form>
                        @else
                            <form action="{{ route('like_photo.like') }}" method="POST">
                                @csrf
                                <input type="hidden" name="photo_id" value="{{ $photo->id }}">
                                <button class="btn p-0" type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem"
                                        fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                        <path
                                            d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                                    </svg>
                                </button>
                            </form>
                        @endif
                        <span class="fs-4 ms-2">{{ $photo->likes_count }}</span>
                    </div>
                    {{-- Detail Foto --}}
                    <div id="post-detail" class="my-2 ms-3">
                        <span class="fw-bold fs-5 d-block text-dark">{{ $photo->judul_foto }}</span>
                        <span class="text-muted fs-6">{{ $photo->deskripsi_foto }}</span>
                    </div>
                </a>
                {{-- Comment  --}}
                <div class="d-flex justify-content-center">
                    <div class="w-100 my-1 p-1 rounded shadow-lg">
                        <ul class="list-group">
                            <li class="list-group-item border-start-0 border-end-0 d-flex flex-column">
                                <p class="fs-5 fw-semibold">Komentar</p>
                                <form action="{{ route('comment.post') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="photo_id" value="{{ $photo->id }}">
                                    <div class="input-group">
                                        <textarea class="form-control" name="isi_komentar" aria-label="Comment content"></textarea>
                                        <button type="submit" class="input-group-text">Send</button>
                                    </div>
                                </form>
                            </li>
                            @foreach ($photo->comments as $comment)
                                <li class="list-group-item border-start-0 border-end-0 d-flex flex-column">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="#"
                                            class="d-flex
                                            justify-content-start align-items-center mb-2 text-decoration-none">
                                            <img src="https://dummyimage.com/640x1:1/" alt="profile-picture"
                                                class="img-fluid rounded-circle" width="50">
                                            <span class="ms-2 fs-5 text-dark">{{ $comment->user->nama }}</span>
                                        </a>
                                        <p class="text-muted fs-6">{{ date('d-m-Y', strtotime($comment->created_at)) }}
                                        </p>
                                    </div>
                                    <span class="text-muted fs-6">{{ $comment->isi_komentar }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
