@extends('layouts.app')
@section('content')
    <!-- MAIN SECTION -->
    <article class="container mt-28">
        <h1 class="text-xneutral-400 font-montserrat text-xl sm:text-2xl font-semibold">
            Sejarah B-University
        </h1>
        <p class="text-xneutral-200 font-montserrat text-sm sm:text-base font-semibold">
            Bersama mengembangkan pendidikan Negeri
        </p>
        @if ($histories->isEmpty())
            <p class="text-xneutral-400 text-sm sm:text-base font-montserrat font-semibold mt-4">
                Tidak ada data sejarah yang tersedia saat ini.
            </p>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-12 gap-8 mt-8">
                @foreach ($histories as $history)
                    <img src="{{ asset('storage/' . $history->image) }}" alt="Sejarah B-University"
                        class="w-full h-[600px] object-cover rounded-[30px] sm:col-span-5" />
                    <p class="font-montserrat font-medium text-sm sm:text-base text-justify sm:col-span-7 text-xneutral-300">
                        {!! $history->content !!}
                    </p>
                @endforeach
            </div>
        @endif
    </article>
@endsection
