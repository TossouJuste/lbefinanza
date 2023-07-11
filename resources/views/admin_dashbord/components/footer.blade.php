<footer class="footer">
    <div class="footer-content justify-content-between">
        <p class="m-b-0">Copyright © 2023 SeedBank. All rights reserved.</p>
        <span>
            <a href="" class="text-gray m-r-15">Term &amp; Conditions</a>
            <a href="" class="text-gray">Privacy &amp; Policy</a>
        </span>
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