<section class="series my-bg-dark">
	<div class="container px-0 py-4 position-relative">
		<h4 class="title-label fw-bold">CURRENT SERIES</h4>
		<div class="row mt-4 pt-4 px-3">

			{{-- comics --}}
			@foreach ($comics as $key => $item)
				<div class="col-6 col-md-4 col-lg-2 comic pb-4">
					<a href="{{ route('comics.show', ['comic' => $item['id']]) }}">
						<img src="{{ $item['thumb'] }}" alt="{{ $item['title'] }}" class="mb-2">
						<div class="text-uppercase">{{ $item['series'] }}</div>
					</a>
				</div>
			@endforeach

		</div>
		<div class="row justify-content-center load-more">
			<a href="#" class="w-auto fw-bold">LOAD MORE</a>
			<a href="{{ route('comics.create')}}" class="w-auto fw-bold">ADD COMIC</a>
		</div>
	</div>
</section>