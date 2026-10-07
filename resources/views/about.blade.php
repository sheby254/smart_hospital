@extends('layouts.app')


@section('content')


<section class="relative py-32 bg-gradient-to-r from-blue-800 to-blue-600">


    <div class="max-w-7xl mx-auto px-6 text-center text-white">


        <h1 class="text-6xl font-extrabold">
            About Sheby Hospital
        </h1>


        <p class="mt-6 text-xl text-blue-100 max-w-3xl mx-auto">

            Providing trusted healthcare services through innovation,
            compassion and medical excellence.

        </p>


    </div>


</section>





<section class="py-24 bg-white">


<div class="max-w-7xl mx-auto px-6">


<div class="grid lg:grid-cols-2 gap-14 items-center">



<div>


<span class="px-5 py-2 rounded-full bg-blue-100 text-blue-700 uppercase text-sm font-semibold">

Who We Are

</span>


<h2 class="text-5xl font-extrabold text-slate-900 mt-6">

A New Standard Of Healthcare Excellence

</h2>


<p class="mt-6 text-gray-600 text-lg leading-8">

Sheby Hospital is a modern healthcare institution dedicated to
providing affordable, safe and high-quality medical services.

We bring together experienced doctors, advanced technology and
patient-centered care to improve the health of our community.

</p>



<p class="mt-5 text-gray-600 text-lg leading-8">

Our hospital provides specialist services across multiple departments
including cardiology, pediatrics, surgery, laboratory and emergency care.

</p>


</div>





<div>


<img 
    src="{{ asset('assets/images/doctors/shaban.jpg') }}"
    alt="Executive Director"
    class="w-full h-full object-cover object-top"
>


</div>


</div>


</div>


</section>








<section class="py-24 bg-slate-50">


<div class="max-w-7xl mx-auto px-6">


<div class="grid md:grid-cols-3 gap-8">



<div class="bg-white p-8 rounded-3xl shadow-lg">

<div class="text-5xl">
🎯
</div>


<h3 class="text-2xl font-bold mt-5">

Our Mission

</h3>


<p class="text-gray-600 mt-4">

To deliver excellent healthcare services with compassion,
integrity and professionalism.

</p>


</div>






<div class="bg-white p-8 rounded-3xl shadow-lg">

<div class="text-5xl">
🌍
</div>


<h3 class="text-2xl font-bold mt-5">

Our Vision

</h3>


<p class="text-gray-600 mt-4">

To become one of the leading healthcare providers in Tanzania
and East Africa.

</p>


</div>






<div class="bg-white p-8 rounded-3xl shadow-lg">

<div class="text-5xl">
⭐
</div>


<h3 class="text-2xl font-bold mt-5">

Our Values

</h3>


<p class="text-gray-600 mt-4">

Quality, innovation, respect and patient safety.

</p>


</div>



</div>


</div>


</section>





<section class="py-24 bg-blue-700">


<div class="max-w-7xl mx-auto px-6 text-center text-white">


<h2 class="text-5xl font-extrabold">

Committed To Better Healthcare

</h2>


<p class="mt-6 text-xl text-blue-100">

With modern facilities and highly skilled professionals,
we continue improving lives every day.

</p>


<a href="/contact"

class="inline-block mt-8 px-10 py-4 bg-white text-blue-700 rounded-full font-bold hover:bg-blue-50 transition">

Contact Us

</a>


</div>


</section>



@endsection