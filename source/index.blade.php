@extends('_layouts.master')

@section('body')
<div class="px-3">
    <section id="newest" class="mb-12">
        <div class="text-center my-16">
            <p class="inline-block text-xl text-gray-800 uppercase font-sans tracking-wider">Newest Essay</p>
            <h1 class="text-5xl leading-none py-4">{{ $essays->first()->title }}</h1>
            <date class="inline-block mb-3 font-sans text-gray-800 tracking-wide">{{ date('F j, Y', $essays->first()->date) }}</date>
        </div>
        <div class="essay-body">
            @if ($essays->first()->verse)
            <aside class="mb-4 py-3 text-center border-t border-b border-gray-200">
                <p class="italic">{{ $essays->first()->verse }}</p>
                @if ($essays->first()->citation)
                    <p class="font-sans">&mdash; {{ $essays->first()->citation }} &mdash;</p>
                @endif
            </aside>
            @endif
            @if ($essays->first()->question)
            <aside class="mb-4 py-3 text-center border-t border-b border-gray-200">
                <p class="italic">{{ $essays->first()->question }}</p>
            </aside>
            @endif
            
            {!! $essays->first()->getContent() !!}
            <p class="text-right harbour-md italic">&mdash; {{ $page->author }} </p>
        </div>
    </section>
    
    @include('_partials.archive')
</div>
@endsection
