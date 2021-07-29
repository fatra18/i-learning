  {{-- Footer --}}
<div class="mt-28 bg-gray-700 shadow-xl">
    <div class="flex justify-between  py-10 items-center w-full">
        <div>
            <h1 class="text-gray-100 ml-40">© &nbsp;Copyright-Fate</h1>
        </div>
        <div class="text-4xl text-gray-100 flex ml-96 ">
            <div class="ml-3 bg-gray-900 h-16 w-16 rounded-full flex justify-center items-center text-md">
                <i class="fa fa-instagram " ></i>
            </div>
            <div class="ml-3 bg-gray-900 h-16 w-16 rounded-full flex justify-center items-center text-md">
                <i class="fa fa-facebook-official " ></i>
            </div>
            <div class="ml-3 bg-gray-900 h-16 w-16 rounded-full flex justify-center items-center text-md">
                <i class="fa fa-github "></i>
            </div>
        </div>
        <div>
            
        </div>
    </div>
</div>

<!-- Scripts below are for demo only -->
<script type="text/javascript" src="{{ asset('/dist/js/main.min.js?v=1626274975328') }}"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<script type="text/javascript" src="{{ asset('/dist/js/chart.sample.min.js') }}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
<script>
    AOS.init();
</script>
<script src="{{ asset('path-to-the-file/splide.min.js') }}"></script>
<script>
    var navbar = document.getElementById('navbar');
    document.onscroll = function() {
        if (document.documentElement.scrollTop > 0) {
            navbar.classList.add('shadow-lg','bg-gray-700','top-3','text-gray-100')
        } else {
            navbar.classList.remove('shadow-lg','bg-gray-700','text-gray-100')
        }
    }
</script>


