@props(['width' => 90])

<img src="https://picsum.photos/seed/{{ rand(0, 10000) }}/{{ $width }}/{{ $width }}" class="rounded-xl" />
