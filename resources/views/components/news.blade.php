<section id="news"
         class="py-20 bg-white">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-12 gap-8">

            <!-- NEWS -->

            <div class="lg:col-span-8">

                <div class="flex items-end justify-between">

                    <div>

                        <h2 class="text-3xl
                                   font-extrabold
                                   text-[#073f79]">

                            Latest News & Updates

                        </h2>

                        <p class="mt-2 text-slate-500">
                            Stay informed with the latest news and updates from Sheby Hospital.
                        </p>

                    </div>


                    <a href="#"
                       class="hidden md:block
                              text-[#0877c9]
                              font-semibold">

                        View All News →

                    </a>

                </div>



                <div class="grid md:grid-cols-3
                            gap-5 mt-8">

                    @php
                        $news = [
                            [
                                'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=700&q=80',
                                'May 12, 2026',
                                'New Cardiology Unit Opens at Sheby Hospital'
                            ],
                            [
                                'https://images.unsplash.com/photo-1538108149393-fbbd81895907?auto=format&fit=crop&w=700&q=80',
                                'May 8, 2026',
                                'Free Health Screening Camp for Our Community'
                            ],
                            [
                                'https://images.unsplash.com/photo-1516841273335-e39b37888115?auto=format&fit=crop&w=700&q=80',
                                'May 2, 2026',
                                'Investing in Modern Technology for Better Care'
                            ],
                        ];
                    @endphp


                    @foreach($news as $item)

                        <article class="rounded-xl
                                        overflow-hidden
                                        bg-white
                                        border border-slate-100
                                        shadow-sm">

                            <img src="{{ $item[0] }}"
                                 class="w-full h-40 object-cover"
                                 alt="{{ $item[2] }}">


                            <div class="p-5">

                                <p class="text-xs
                                          text-[#0877c9]">

                                    {{ $item[1] }}

                                </p>


                                <h3 class="mt-2
                                           font-bold
                                           text-[#073f79]
                                           leading-6">

                                    {{ $item[2] }}

                                </h3>


                                <a href="#"
                                   class="inline-block
                                          mt-4
                                          text-sm
                                          font-semibold
                                          text-[#0877c9]">

                                    Read More →

                                </a>

                            </div>

                        </article>

                    @endforeach

                </div>

            </div>



            <!-- INSURANCE -->

            <div class="lg:col-span-4">

                <div class="h-full
                            bg-sky-50
                            rounded-2xl
                            p-7">

                    <h2 class="text-2xl
                               font-extrabold
                               text-[#073f79]">

                        Our Insurance Partners

                    </h2>


                    <p class="mt-3
                              text-slate-600">

                        We work with trusted insurance companies
                        to make healthcare easier.

                    </p>


                    <div class="grid grid-cols-2
                                gap-4 mt-7">

                        @foreach(['NHIF', 'AAR', 'Jubilee', 'Strategis'] as $partner)

                            <div class="h-24
                                        bg-white
                                        rounded-xl
                                        border
                                        flex items-center
                                        justify-center
                                        font-extrabold
                                        text-[#07559a]">

                                {{ $partner }}

                            </div>

                        @endforeach

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>