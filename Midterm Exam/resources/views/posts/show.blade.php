@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-6">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100" style="max-width:50px">
                    </div>
                    <div>
                        <h3>
                            <a href="/profile/{{ $post->user->id }}">
                                <span class="text-dark"> {{ $post->user->username }} </span>
                            </a>
                        </h3>
                    </div>
                </div>
            </div>

            <hr>

            <p>{{ $post->caption }}</p>
        </div>
    </div>
</div>
@endsection