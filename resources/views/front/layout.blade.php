@include('front.inc.header')
@yield('content')
<!-- Scroll to Top Button -->
<a href="#" id="scrollTopBtn">
    <img src="{{ asset('front/img/scroll_up.png') }}" alt="Top" width="50">
</a>
@include('front.inc.footer')
<script>
const scrollTopBtn = document.getElementById("scrollTopBtn");
window.onscroll = function() {
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
        scrollTopBtn.style.display = "block";
    } else {
        scrollTopBtn.style.display = "none";
    }
};
scrollTopBtn.addEventListener("click", function(e) {
    e.preventDefault();
    window.scrollTo({ top: 0, behavior: 'smooth' });
});
</script>

