<footer class="page-footer teal">
    <div class="container">
        <div class="row">
            <div class="col s12 l12">
            <h5 class="white-text"><i class="material-icons prefix">copyright</i> Segasi 2018</h5>
            </div>
            <div class="col s12 l12 white-text">
            <ul>
                <li>Nueva Providencia #1363, Oficina 1205, Providencia</li>
                <li><a class="brown-text text-lighten-3" href="mailto:contacto@segasi.cl">contacto@segasi.cl</a></li>
                <li><a class="brown-text text-lighten-3" href="tel:+56961501279">+56961501279</a></li>
            </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
        Hecho por <a class="brown-text text-lighten-3" href="http://segasi.cl">Segasi</a>
        </div>
    </div>
</footer>
<!--  Scripts-->
<script src="/js/materialize.min.js"></script>
<script src="/js/init.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnSpciOYPymGqc27IgQ4lrByEQOPLLuX4&callback=initMap"></script>
<script src="js/map.js"></script>
@if (session()->has('message')) 
    <script>M.toast({html:'{{ session()->get('message') }}'});</script>
@endif