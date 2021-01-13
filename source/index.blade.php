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
            <aside class="mb-4 text-center text-gray-500">
                @if ($essays->first()->verse)
                    <p>&mdash;</p>
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
    
    <section id="archive">
        <p class="pb-4 uppercase text-center border-b border-gray-900">All Other Essays</p>
        <ul>
            @foreach($essays as $essay)
                @if ($loop->index >= 1)
                    <li class="py-4 border-b border-gray-900">
                        <h2>{{ $essay->title }}</h2>
                        <date class="block mb-2">{{ date('m/d/Y', $essay->date) }}</date>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt quibusdam officiis numquam, recusandae at voluptatum placeat. Consequuntur facilis libero minus!</p>
                    </li>
                @endif
            @endforeach
        </ul>
    </section>
</div>
@endsection
