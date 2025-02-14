<!-- Button 1 -->
<button {{ $attributes->merge(['type'=>'button', 'class' => 'flex items-center justify-center border-2 border-blue-500 bg-transparent py-3 px-4 rounded-lg hover:border-blue-600 hover:text-blue-600 space-x-2']) }}>
    {{$slot}}
</button>