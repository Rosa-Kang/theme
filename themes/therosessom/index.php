<?php get_header(); ?>

<main class='bg-gray-100 h-screen flex items-center justify-center p-5'>
  <div class='bg-white shadow-lg p-5 rounded-3xl w-full max-w-screen-sm'>
    <div class='flex justify-between items-center'>
      <div class='flex flex-col items-start'>
        <span class='text-gray-600 font-semibold -mb-1'>In Transit</span>
        <span class='text-4xl font-semibold'>Coolblue</span>
      </div>
      <div class='size-12 bg-orange-400 rounded-full'></div>
    </div>
      <div class='my-2 flex items-center gap-2'>
        <span class='bg-red-500 px-2.5 py-1.5 rounded-full uppercase text-white text-xm font-medium'>Today</span>
        <span>9:30 - 10:30</span>
      </div>
      <div class='relative'>
        <div class='bg-gray-200 w-full h-2 rounded'></div>
        <div class='absolute top-0 bg-emerald-200 w-2/3 h-2 rounded'></div>
      </div>
      <div class='flex justify-between items-center mt-2.5 text-gray-600'>
        <span class='text-wrap'>Expected</span>
        <span class='text-wrap'>Sorting Center</span>
        <span class='text-wrap'>In Transit</span>
        <span class='text-gray-400 text-wrap'>Delivered</span>
      </div>
  </div>
</main>

<?php get_footer(); ?>
