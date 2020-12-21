@extends('layouts.layout')

@section('content')
<div class="row">
    <div class="col-8">
        <h1>
            {{ $post->title }}
            <x-badge
                type="primary"
                message="Brand new Post !"
                :show="now()->diffInMinutes($post->created_at) < 10"
            ></x-badge>
        </h1>
        <p>{{ $post->content }}</p>

        <x-updated
            :date="$post->created_at"
            :name="$post->user->name"
        ></x-updated>

        <x-updated
            :date="$post->updated_at"
        >
            Updated
        </x-updated>

        <x-tag
            :tags="$post->tags"
        ></x-tag>

        <p>Currently read by {{ $counter }} people</p>

        <h4>Comments</h4>

        @forelse($post->comments as $comment)
            <p>
                {{ $comment->content }}
            </p>
            <x-updated
                :date="$comment->created_at"
                :name="$comment->user->name"
            ></x-updated>
        @empty
            <p>No comments yet!</p>
        @endforelse
    </div>
    <div class="col-4">
        @include('posts._activity')
    </div>
@endsection('content')
