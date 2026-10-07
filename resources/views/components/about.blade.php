<section id="about" class="py-24 bg-white">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-12 gap-12 items-stretch">


            {{-- IMAGE --}}
            <div class="lg:col-span-4 relative">

                <div class="absolute -top-6 -left-6 w-40 h-40 bg-blue-100 rounded-full">
                </div>


                <div class="relative overflow-hidden rounded-3xl shadow-2xl h-[550px]">

                    <img 
                        src="{{ asset('assets/images/doctors/shaban.jpg') }}"
                        alt="Executive Director"
                        class="w-full h-full object-cover object-top"
                    >

                </div>

            </div>



            {{-- ACHIEVEMENTS --}}
            <div class="lg:col-span-4">


                <p class="text-[#0877c9] font-semibold">
                    About Sheby Hospital
                </p>


                <h2 class="mt-2 text-3xl md:text-4xl font-extrabold text-[#073f79]">

                    Our Achievements

                </h2>



                <div class="mt-8 space-y-6">


                    @php

                    $achievements = [

                    'Modern medical facilities equipped with advanced technology',

                    'Experienced doctors and specialized healthcare teams',

                    'Improved patient care through innovation and research',

                    'Commitment to healthcare excellence and safety standards',

                    ];

                    @endphp



                    @foreach($achievements as $achievement)

                    <div class="flex gap-4">


                        <div class="w-7 h-7 shrink-0 rounded-full border-2 border-[#0877c9] text-[#0877c9] flex items-center justify-center font-bold">

                            ✓

                        </div>


                        <p class="text-slate-600 leading-6">

                            {{ $achievement }}

                        </p>


                    </div>


                    @endforeach


                </div>


            </div>




            {{-- WHY CHOOSE --}}
            <div class="lg:col-span-4">


                <div class="h-full bg-gradient-to-br from-sky-50 to-blue-100 rounded-2xl p-8">


                    <div class="w-14 h-14 rounded-full bg-[#0877c9] text-white flex items-center justify-center">

                        <span class="text-2xl">
                            ♥
                        </span>

                    </div>



                    <h3 class="mt-6 text-3xl font-extrabold text-[#073f79] leading-tight">

                        Why Choose
                        <br>
                        Sheby Hospital?

                    </h3>



                    <p class="mt-5 text-slate-600 leading-7">

                        We believe every patient deserves respectful,
                        timely and professional healthcare.
                        From emergency services to specialized treatments,
                        Sheby Hospital provides a complete healthcare
                        experience built around trust and compassion.

                    </p>



                    <a href="#services"
                       class="mt-7 inline-flex items-center gap-4 rounded-full bg-[#075ea1] text-white px-6 py-3 font-semibold">


                        Learn More About Us

                        <span>
                            →
                        </span>


                    </a>



                </div>


            </div>


        </div>


    </div>


</section>