<footer class="footer bg-white">
    <div class="footer-content justify-content-between flex-wrap">
        <p class="m-b-0 text-primary">Diritti d'autore © 2015 Finanza LBE </p>
        <p class="m-b-0 d-none d-md-block text-primary">Tutti i diritti riservati</p>
        <p>  <a href="{{route('Term')}}" class="text-primary">Politica sulla privacy</a></p>
       
          
          
       
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