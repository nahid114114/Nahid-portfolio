{{-- Education Section (resources/views/partials/education.blade.php) --}}
<section id="education" class="py-16 bg-gray-900">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-white mb-10 text-center border-b-2 border-teal-500 pb-4">🎓 Educational Background</h2>
        
        <div class="max-w-4xl mx-auto space-y-10">
            {{-- Controller থেকে আসা $educations ডেটার উপর লুপ চালানো --}}
            @foreach($educations as $edu)
                <div class="bg-gray-800 p-6 rounded-xl shadow-lg border-l-4 border-teal-500/80 transition duration-300 transform hover:scale-[1.01] hover:shadow-teal-500/70">
                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center">
                        {{-- ডিগ্রি এবং প্রতিষ্ঠান --}}
                        <div>
                            <h3 class="text-2xl font-semibold text-teal-400">{{ $edu->degree }}</h3>
                            <p class="text-lg text-gray-300 mt-1">{{ $edu->institution_name }}</p>
                        </div>
                        
                        {{-- চলমান/সমাপ্ত স্ট্যাটাস --}}
                        <p class="text-sm font-medium mt-3 sm:mt-0 px-3 py-1 rounded-full 
                                @if($edu->end_date === null) bg-green-600 text-white 
                                @else bg-gray-600 text-gray-300 @endif">
                            {{ $edu->end_date === null ? 'Running' : 'Completed' }}
                        </p>
                    </div>
                    
                    {{-- সময়কাল (Date Formatting) --}}
                    <p class="text-sm text-gray-500 mt-2">
                        {{ \Carbon\Carbon::parse($edu->start_date)->format('M Y') }} - 
                        @if($edu->end_date)
                            {{ \Carbon\Carbon::parse($edu->end_date)->format('M Y') }}
                        @else
                            Present
                        @endif
                    </p>
                    
                    {{-- বর্ণনা --}}
                    @if($edu->description)
                        <p class="mt-4 text-gray-400 border-t border-gray-700 pt-3">{{ $edu->description }}</p>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</section>