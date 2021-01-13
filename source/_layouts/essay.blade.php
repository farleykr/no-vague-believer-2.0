@extends('_layouts.master')

@section('body')
<div class="p-2">
    <section id="newest" class="mb-12">
        <div class="text-center my-20">
            <h1 class="text-4xl leading-9 py-4">{{ $page->title }}</h1>
            <date class="block mb-3 font-sans">{{ date('m/d/Y', $page->date) }}</date>
        </div>

        <div class="essay-body">
            @if ($page->verse or $page->citation or $page->subheading)
                <aside class="mb-4 py-3 text-gray-500 text-center border-t border-b border-gray-200">
                    <p class="italic">{{ $page->verse }}</p>
                    <p>&mdash; {{ $page->citation }} &mdash;</p>
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