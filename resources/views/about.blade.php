@extends('layouts.template')

@section('title', 'About')

@section('content')
    <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1>{{ $title }}</h1>
        <p>{{ $description }}</p>
    </div>
@endsection

    @php($second = now()->second)

    @if ($second % 2 == 0)
        <div class="alert alert-primary mt-2" role="alert">
            Subscribe to our newsletter!
        </div>
    @else
        <div class="alert alert-warning mt-2" role="alert">
            Subscribe to our newsletter now!
        </div>
    @endif<h1>Writers</h1>
    <div class="row my-4">
        @for ($i = 1; $i < 7; $i++)
            <div class="col-lg-2 col-md-4 col-sm-12">
                <div class="card my-2">
                    <img src="https://i.pravatar.cc/500?img={{ $i }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Person {{ $i }}</h5>
                        <p class="card-text">Writer {{ $i }}</p>
                    </div>
                </div>
            </div>
        @endfor
    </div>

    <h1>Editors</h1>
    <div class="row my-4">
        @php($i = 1)
        @while ($i < 5)
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="card my-2">
                    <img src="https://i.pravatar.cc/500?img={{ $i * 10 }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Person {{ $i }}</h5>
                        <p class="card-text">Editor {{ $i }}</p>
                    </div>
                </div>
            </div>
            @php($i++)
        @endwhile
    </div>


   <h1>FAQs</h1>
    <div class="accordion my-4" id="accordionContoh">
        @forelse ($faqs as $faq)
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading{{ $loop->index }}">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" aria-expanded="true"
                        data-bs-target="#collapse{{ $loop->index }}" aria-controls="collapse{{ $loop->index }}">
                        {{ $faq['question'] }}
                    </button>
                </h2>
                <div id="collapse{{ $loop->index }}" class="accordion-collapse collapse"
                    aria-labelledby="heading{{ $loop->index }}" data-bs-parent="#accordionContoh">
                    <div class="accordion-body">
                        {{ $faq['answer'] }}
                    </div>
                </div>
            </div>
        @empty
            <div class="alert alert-danger" role="alert">
                No FAQs found.
            </div>
        @endforelse
    </div>
