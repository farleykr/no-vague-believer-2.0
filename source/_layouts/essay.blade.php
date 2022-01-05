@extends('_layouts.master')

@section('body')
<div>
    <section class="essay">
        <div>
            <h1>{{ $page->title }}</h1>
            <date>{{ date('F j, Y', $page->date) }}</date>
        </div>

        <div>
            @if ($page->verse or $page->citation or $page->subheading)
                <aside>
                    <p>{{ $page->verse }}</p>
                    @if ($page->citation)
                    <p>&mdash; {{ $page->citation }} &mdash;</p>
                    @endif
                    <p>{{ $page->subheading }}</p>
                </aside>
            @endif
            
            @if($page->question)
                <aside>
                    <p>{{ $essays->first()->question }}</p>
                </aside>
            @endif
            
            @yield('essay_body')
            <p>&mdash; {{ $page->author }} </p>
        </div>
    </section>
    @include('_partials.archive')
</div>
@endsection