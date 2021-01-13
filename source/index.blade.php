@extends('_layouts.master')

@section('body')
<div class="px-2">
    <section id="newest" class="mb-12">
        <div class="text-center my-20">
            <p class="uppercase font-sans">Newest Essay</p>
            <p class="my-2 harbour-md font-bold">/</p>
            <h1 class="text-4xl leading-9">{{ $essays->first()->title }}</h1>
            <p class="my-2 harbour-md font-bold">/</p>
            <date class="block mb-3 font-sans">{{ date('m/d/Y', $essays->first()->date) }}</date>
        </div>

        <div class="essay-body">
            <aside class="mb-2 text-gray-500">
                @if ($essays->first()->verse)
                    <p class="italic">{{ $essays->first()->verse }}</p>
                @endif
                @if ($essays->first()->citation)
                    <p>{{ $essays->first()->citation }}</p>
                    <p>&mdash;</p>
                @endif
            </aside>
            {!! $essays->first()->getContent() !!}
            <p class="text-right italic">&mdash; {{ $page->author }} </p>
        </div>
    </section>
    
    @include('_partials.archive')
</div>
@endsection
