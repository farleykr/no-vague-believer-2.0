<section id="archive">
    <p class="pb-4 uppercase text-center border-b border-gray-400">All Essays</p>
    <ul>
        @foreach($essays as $essay)
            <li class="py-4 border-b border-gray-400">
                <h2>{{ $essay->title }}</h2>
                <date class="block mb-2">{{ date('m/d/Y', $essay->date) }}</date>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt quibusdam officiis numquam, recusandae at voluptatum placeat. Consequuntur facilis libero minus!</p>
            </li>
        @endforeach
    </ul>
</section>