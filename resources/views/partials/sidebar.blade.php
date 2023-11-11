@php
$cs = 'flex items-center gap-4 mb-3 text-gray-800 hover:text-white bg-gray-300 hover:bg-slate-700 p-3 transition duration-300 ease-in-out text-[20px] font-normal hover:font-semibold px-10';
@endphp

<aside class="w-1/4 bg-gray-200 h-auto">
    <span class="h-20 text-[30px] font-bold flex justify-center mt-8">RPRIPL</span>
    <div id="sidebarContent" class="hidden sm:block">
        <a href="/" class="{{ $cs }} {{ Request::is('/') ? 'bg-slate-700 text-white' : '' }}">
            {{-- <x-heroicon-s-home class="w-6 h-6" /> --}}
            <span>Home</span>
        </a>
       
        <button
        class="dropdown-btn w-[100%]  {{$cs}} {{ Request::is('property') ? 'bg-slate-700 text-white' : '' }}">Property
        <i class="fa fa-caret-down"></i>
        </button>

        <div class="dropdown-container bg-gray-700 pl-2" style="display: none;">
            <a href="{{ route('property') }} " class="{{ $cs }} {{ Request::is('property') ? 'bg-slate-700 text-white' : '' }}">
                {{-- <x-tni-search-property class="w-6 h-6" /> --}}
                <span>Property Form</span>
            </a>
            <a href="{{ route('property_lists') }} " class="{{ $cs }} {{ Request::is('property_list') ? 'bg-slate-700 text-white' : '' }}">
                {{-- <x-tni-search-property class="w-6 h-6" /> --}}
                <span>Property View</span>
            </a>
        </div>

        {{-- <a href="{{ route('business_type') }} " class="{{ $cs }} {{ Request::is('business_type') ? 'bg-slate-700 text-white' : '' }}"> --}}
            {{-- <x-tni-search-property class="w-6 h-6" /> --}}
            {{-- <span>Business Type</span>
        </a> --}}


        <button
        class="dropdown-btn w-[100%]  {{$cs}} {{ Request::is('business_type') ? 'bg-slate-700 text-white' : '' }}">Business Type
        <i class="fa fa-caret-down"></i>
        </button>

        <div class="dropdown-container bg-gray-700 pl-2" style="display: none;">
            <a href="{{ route('business_type') }} " class="{{ $cs }} {{ Request::is('business_type') ? 'bg-slate-700 text-white' : '' }}">
                {{-- <x-tni-search-property class="w-6 h-6" /> --}}
                <span>Business Type Form</span>
            </a>
            <a href="{{ route('business_type') }} " class="{{ $cs }} {{ Request::is('business_type') ? 'bg-slate-700 text-white' : '' }}">
                {{-- <x-tni-search-property class="w-6 h-6" /> --}}
                <span>Business Type View</span>
            </a>
        </div>

        

        {{-- business_type --}}
        {{-- <a href="{{ route('suitable_for') }} " class="{{ $cs }} {{ Request::is('suitable_for') ? 'bg-slate-700 text-white' : '' }}"> --}}
            {{-- <x-tni-search-property class="w-6 h-6" /> --}}
            {{-- <span>Suitable For</span> --}}
        {{-- </a> --}}
        {{-- suitable_for.blade --}}

        <button
        class="dropdown-btn w-[100%]  {{$cs}} {{ Request::is('suitable_for') ? 'bg-slate-700 text-white' : '' }}">Suitable For
        <i class="fa fa-caret-down"></i>
        </button>

        <div class="dropdown-container bg-gray-700 pl-2" style="display: none;">
            <a href="{{ route('suitable_for') }} " class="{{ $cs }} {{ Request::is('suitable_for') ? 'bg-slate-700 text-white' : '' }}">
                {{-- <x-tni-search-property class="w-6 h-6" /> --}}
                <span>Suitable For Form</span>
            </a>
            <a href="{{ route('suitable_for') }} " class="{{ $cs }} {{ Request::is('suitable_for') ? 'bg-slate-700 text-white' : '' }}">
                {{-- <x-tni-search-property class="w-6 h-6" /> --}}
                <span>Suitable For View</span>
            </a>
        </div>






        {{-- <a href="{{ route('state') }} " class="{{ $cs }} {{ Request::is('state') ? 'bg-slate-700 text-white' : '' }}"> --}}
            {{-- <x-tni-search-property class="w-6 h-6" /> --}}
            {{-- <span>State</span>
        </a> --}}

        <button
        class="dropdown-btn w-[100%]  {{$cs}} {{ Request::is('state') ? 'bg-slate-700 text-white' : '' }}">State
        <i class="fa fa-caret-down"></i>
        </button>

        <div class="dropdown-container bg-gray-700 pl-2" style="display: none;">
            <a href="{{ route('state') }} " class="{{ $cs }} {{ Request::is('state') ? 'bg-slate-700 text-white' : '' }}">
                {{-- <x-tni-search-property class="w-6 h-6" /> --}}
                <span>State Form</span>
            </a>
            <a href="{{ route('state') }} " class="{{ $cs }} {{ Request::is('state') ? 'bg-slate-700 text-white' : '' }}">
                {{-- <x-tni-search-property class="w-6 h-6" /> --}}
                <span>State For View</span>
            </a>
        </div>







        {{-- <a href="{{ route('district') }} " class="{{ $cs }} {{ Request::is('district') ? 'bg-slate-700 text-white' : '' }}"> --}}
            {{-- <x-tni-search-property class="w-6 h-6" /> --}}
            {{-- <span>District</span>
        </a> --}}

        
        <button
        class="dropdown-btn w-[100%]  {{$cs}} {{ Request::is('district') ? 'bg-slate-700 text-white' : '' }}">District
        <i class="fa fa-caret-down"></i>
        </button>

        <div class="dropdown-container bg-gray-700 pl-2" style="display: none;">
            <a href="{{ route('district') }} " class="{{ $cs }} {{ Request::is('district') ? 'bg-slate-700 text-white' : '' }}">
                {{-- <x-tni-search-property class="w-6 h-6" /> --}}
                <span>District Form</span>
            </a>
            <a href="{{ route('district') }} " class="{{ $cs }} {{ Request::is('district') ? 'bg-slate-700 text-white' : '' }}">
                {{-- <x-tni-search-property class="w-6 h-6" /> --}}
                <span>District For View</span>
            </a>
        </div>


        {{-- district --}}

        {{-- <a href="{{ route('city') }} " class="{{ $cs }} {{ Request::is('city') ? 'bg-slate-700 text-white' : '' }}"> --}}
            {{-- <x-tni-search-property class="w-6 h-6" /> --}}
            {{-- <span>City</span>
        </a> --}}

        <button
        class="dropdown-btn w-[100%]  {{$cs}} {{ Request::is('city') ? 'bg-slate-700 text-white' : '' }}">City
        <i class="fa fa-caret-down"></i>
        </button>

        <div class="dropdown-container bg-gray-700 pl-2" style="display: none;">
            <a href="{{ route('city') }} " class="{{ $cs }} {{ Request::is('city') ? 'bg-slate-700 text-white' : '' }}">
                {{-- <x-tni-search-property class="w-6 h-6" /> --}}
                <span>City Form</span>
            </a>
            <a href="{{ route('city') }} " class="{{ $cs }} {{ Request::is('city') ? 'bg-slate-700 text-white' : '' }}">
                {{-- <x-tni-search-property class="w-6 h-6" /> --}}
                <span>City For View</span>
            </a>
        </div>

      
        {{-- city --}}

        <script>
            /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
            var dropdown = document.getElementsByClassName("dropdown-btn");
            var i;
    
            for (i = 0; i < dropdown.length; i++) {
                dropdown[i].addEventListener("click", function () {
                    this.classList.toggle("active");
                    var dropdownContent = this.nextElementSibling;
                    if (dropdownContent.style.display === "block") {
                        dropdownContent.style.display = "none";
                    } else {
                        dropdownContent.style.display = "block";
                    }
                });
            }
        </script>
        <!-- Add more menu items as needed -->
    </div>
</aside>
