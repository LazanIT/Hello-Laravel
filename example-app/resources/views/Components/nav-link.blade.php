@props(['active' => false])


<a class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-gray-700 hover:text-white"
    aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}> <?php echo $slot; ?> </a>
