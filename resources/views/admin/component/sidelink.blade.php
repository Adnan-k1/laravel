@props(['href', 'icon', 'text'])

<li>
   <a href="{{ $href }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
      <span class="text-xl">{{ $icon }}</span>
      <span class="ms-3">{{ $text }}</span>
   </a>
</li>