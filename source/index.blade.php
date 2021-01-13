@extends('_layouts.master')

@section('body')
<div class="p-2 mb-24">
    <section id="newest" class="mb-24">
        <div class="text-center my-20">
            <p class="uppercase">Newest Essay</p>
            <h1 class="text-4xl leading-9 my-2">{{ $essays->first()->title }}</h1>
            <date class="block mb-3">{{ date('m/d/Y', $essays->first()->date) }}</date>
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
