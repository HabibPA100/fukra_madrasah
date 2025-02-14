 <!-- Button 3 -->
 <button {{ $attributes->merge(['type' => 'button', 'class' => 'flex items-center justify-center border-2 border-red-500 bg-transparent py-3 px-4 rounded-lg hover:border-red-600 hover:text-red-600 space-x-2']) }}>
   {{$slot}}
  </button>