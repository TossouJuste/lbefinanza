<footer class="footer bg-white">
    <div class="footer-content justify-content-between flex-wrap">
        <p class="m-b-0 text-primary" translate="no">Copyright © 2023 SeedBank </p>
        <p class="m-b-0 d-none d-md-block text-primary">All rights reserved</p>
        <p>  <a href="{{route('Term')}}" class="text-primary">Politique de confidentialités</a></p>
       
          
          
       
    </div>
</footer>
<script>
const navLinks = document.querySelectorAll('.side-nav-menu a');

navLinks.forEach(link => {
const linkFileName = link.pathname;
const currentFileName = window.location.pathname;
if (linkFileName === currentFileName) {
link.parentNode.classList.add('active');
}
});

</script>