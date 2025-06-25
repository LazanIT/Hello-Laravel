@props(['active' => false, 'type' => 'a'])

<?php if ($type === 'a'): ?>

<a class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-gray-700 hover:text-white"
    aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}> <?php echo $slot; ?> </a>


<?php else : ?>
<button
    class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-gray-700 hover:text-white"
    aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}> <?php echo $slot; ?> </button>

<?php endif ?>
