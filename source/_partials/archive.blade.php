<section id="archive" class="mb-12">
    <p class="text-2xl py-6 uppercase text-center border-b border-gray-200 font-sans font-bold text-gray-800 tracking-wider">All Essays</p>
    <ul>
        @foreach($essays as $essay)
            @if($loop->last)
            <li class="py-6">
            @else
            <li class="py-6 border-b border-gray-200">
            @endif
                <div class="flex flex-col sm:flex-row justify-between align-baseline">
                <h2 class="underline">
                    <a href="{{ $essay->getUrl() }}">{{ $essay->title }}</a>
                </h2>
                <date class="block mb-2 font-sans text-gray-800 tracking-wide">{{ date('F j, Y', $essay->date) }}</date>
                </div>
                <p>
                    {{ $essay->getExcerpt() }}...
                </p>
                <a class="block italic text-right font-sans text-gray-800" href="{{ $essay->getUrl() }}">
                    <span class="underline">read</span> &rarr;
                </a>
            </li>
        @endforeach
    </ul>
</section>