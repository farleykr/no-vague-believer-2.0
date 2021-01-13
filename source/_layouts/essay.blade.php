@extends('_layouts.master')

@section('body')
<div class="p-2">
    <section id="newest">
        <div class="text-center my-20">
            <h1 class="text-4xl leading-9 my-2">{{ $page->title }}</h1>
            <date class="block mb-3">{{ date('m/d/Y', $page->date) }}</date>
        </div>

        <div class="essay-body">
            <aside class="mb-2 text-gray-500">
                @if ($page->verse)
                    <p class="italic">{{ $page->verse }}</p>
                @endif
                @if ($page->citation)
                    <p>{{ $page->citation }}</p>
                    <p>&mdash;</p>
                @endif
                @if ($page->subheading)
                    <p class="italic">{{ $page->subheading }}</p>
                    <p>&mdash;</p>
                @endif
            </aside>
            @yield('essay_body')
            <p class="text-right italic">&mdash; {{ $page->author }} </p>
        </div>
    </section>
    @include('_partials.archive')
</div>
@endsection