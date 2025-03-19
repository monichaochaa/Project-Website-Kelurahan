<x-layout :latestPosts="$latestPosts">
 
  <x-slot:title>{{ $title }}</x-slot:title>

  @include('components.onboarding')

  @include('components.post-list', ['posts' => $posts]) <!-- Tambahkan ini -->


</x-layout>

