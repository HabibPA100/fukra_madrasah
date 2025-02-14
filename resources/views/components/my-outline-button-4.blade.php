 <!-- Button 4 -->
 <button {{ $attributes->merge(['type' => 'button', 'class' =>'flex items-center justify-center border-2 border-yellow-500 bg-transparent py-3 px-4 rounded-lg hover:border-yellow-600 hover:text-yellow-600 space-x-2'])}} >
    {{$slot}}
  </button>