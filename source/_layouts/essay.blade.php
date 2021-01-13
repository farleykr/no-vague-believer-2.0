@extends('_layouts.master')

@section('body')
<div class="p-2">
    <section id="newest" class="mb-12">
        <div class="text-center my-16">
            <h1 class="text-4xl leading-9 py-4">{{ $page->title }}</h1>
            <date class="inline-block pt-3 mb-3 font-sans tracking-wide border-t border-gray-400">{{ date('F j, Y', $page->date) }}</date>
        </div>

        <div class="essay-body">
            @if ($page->verse or $page->citation or $page->subheading)
                <aside class="mb-4 py-3 text-gray-500 text-center border-t border-b border-gray-200">
                    <p class="italic">{{ $page->verse }}</p>
                    <p class="font-sans">&mdash; {{ $page->citation }} &mdash;</p>
                    <p class="italic">{{ $page->subheading }}</p>
                </aside>
            @endif
            @yield('essay_body')
            <p class="text-right italic">&mdash; {{ $page->author }} </p>
        </div>
    </section>
    @include('_partials.archive')
</div>
@endsection