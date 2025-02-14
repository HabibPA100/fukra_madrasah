<div class="container mx-auto p-4">
  <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
    <!-- Button 1 -->
    <x-my-outline-button-1>
      <a href="{{ route('contact.us') }}" >
      <i class="fa-solid fa-phone"></i>
      <span>যোগাযোগ করুন</span>
      </a>
    </x-my-outline-button-1>

    <!-- Button 2 -->
    <x-my-outline-button-2>
    <a href="https://docs.google.com/spreadsheets/d/1nU7SZHQjthaz2qLOYyKZQP6McJPRJIskjxyC08f_dgM/edit?usp=sharing" target="_blank" >
      <i class="fa-solid fa-book-medical"></i>
      <span>দাতাদের নাম</span>
    </a>
  </x-my-outline-button-2>
    <!-- Button 3 -->
    <x-my-outline-button-3>
    <a href="https://docs.google.com/spreadsheets/d/1_24tBFzLf_lVxteRAe-C8-nbFrfhrK2wn5zGaGVj5lA/edit?usp=sharing" target="_blank" >
      <i class="fa-brands fa-docker"></i>
       <span>বাৎসরিক হিসাব</span>
    </a>
  </x-my-outline-button-3>
    <!-- Button 4 -->
    <x-my-outline-button-4>
    <a href="https://docs.google.com/spreadsheets/d/14WrzYprK3QldUolhc7c9Be_V_5yz2lisJ7ImJdauhL8/edit?usp=sharing" target="_blank" >
      <i class="fa-solid fa-chart-simple"></i>
       <span>হাফেয তালিকা</span>
    </a>
  </x-my-outline-button-4>

    <!-- Button 5 -->
    <x-my-outline-button-5>
    <a href="https://docs.google.com/spreadsheets/d/1rPCZIePkoW5zBH_Bmpsx6rthnYCUTkQ2yNvO7cdQcdU/edit?usp=sharing" target="_blank" >
      <i class="fa-solid fa-group-arrows-rotate"></i>
      <span>ফারেগীন তালিকা</span>
    </a>
  </x-my-outline-button-5>
    <!-- Button 6 -->
    <x-my-outline-button-6>
    <a href="{{ route('privacy.policy') }}" >
      <i class="fa-solid fa-shield-halved"></i>
      <span>প্রাইভেসি পলিসি</span>
    </a>
  </x-my-outline-button-6>
  </div>
</div>
