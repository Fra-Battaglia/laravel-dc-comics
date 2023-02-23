<header>
	<div class="top-bar my-bg-primary">
		<div class="container px-0 h-100 d-flex align-items-center justify-content-end fw-bold gap-5">
			<div>DC POWER VISA®</div>
			<div>ADDICTIONAL DC SITES <i class="fa-solid fa-caret-down ms-1"></i></div>
		</div>
	</div>
	<div class="container px-0">
		<div class="row">
			<div class="col py-3"><img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt=""></div>
			<div class="col">
				<nav class="h-100">
					<ul class="d-flex align-items-center mb-0 h-100 fw-bold p-0 gap-4">
						@foreach ($pages as $item)
							<li class="h-100 d-flex align-items-center nav-voice"><a href="#">{{ $item['voice'] }}</a></li>
						@endforeach
					</ul>
				</nav>
			</div>
			<div class="col d-flex align-items-center justify-content-end">
				<div class="search-bar d-flex align-items-center justify-content-end">
					<input type="text" class="border-0 text-end me-2 search-input w-100" placeholder="Search">
					<button type="submit" class="border-0 bg-transparent"><i class="fa-solid fa-magnifying-glass"></i></button>
				</div>
			</div>
		</div>
	</div>
</header>