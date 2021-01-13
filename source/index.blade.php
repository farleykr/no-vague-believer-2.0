@extends('_layouts.master')

@section('body')
<div class="px-2">
    <section id="newest" class="mb-12">
        <div class="text-center my-16">
            <p class="text-xl uppercase font-sans tracking-wider">Newest Essay</p>
            <h1 class="text-5xl leading-none py-4">{{ $essays->first()->title }}</h1>
            <date class="inline-block mb-3 pt-3 font-sans tracking-wide border-t border-gray-400">{{ date('F j, Y', $essays->first()->date) }}</date>
        </div>
        <div class="essay-body">
            <aside class="mb-4 py-3 text-center border-t border-b border-gray-200">
                @if ($essays->first()->verse)
                    <p class="italic">{{ $essays->first()->verse }}</p>
                @endif
                @if ($essays->first()->citation)
                    <p class="font-sans">&mdash; {{ $essays->first()->citation }} &mdash;</p>
                @endif
            </aside>
            {!! $essays->first()->getContent() !!}
            <p class="text-right font-sans italic">&mdash; {{ $page->author }} </p>
        </div>
    </section>
    
    @include('_partials.archive')
</div>
@endsection
