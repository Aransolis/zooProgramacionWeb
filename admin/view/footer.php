</div>
<link rel="stylesheet" href="../css/main.css">
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        -->

</html>

<footer>
    <div class="row">
        <div class="col-3">
            <h3 class="text-center">Enlaces Rapidos</h3>
            <nav id="menu_inferior">
                <ul>
                    <li> <a href="atencion.php">Atencion Cliente</a></li>
                    <li> <a href="facturacion.php">Facturación</a> </li>
                    <li> <a href="PDF/reglamento.pdf">Reglamento</a></li>
                </ul>
            </nav>
        </div>

        <div class="col-6">
            <h3 class="text-center">Contacto</h3>
            <nav id="menu_inferior">
                <ul>
                    <li class="text-center"> 4291153622</li>
                    <li class="text-center"> zoologicoLeon@gmail.com </li>

                </ul>
            </nav>

        </div>
        <div class="col-3">
            <h3 class="text-center">Redes Sociales</h3>
            <ul id="navlist">
                <li id="iconofb">
                    <a href="https://www.facebook.com/">&nbsp;</a>
                </li>

                <li id="iconotw">
                    <a href="https://twitter.com/?lang=en/">&nbsp;</a>
                </li>

                <li id="iconoin">
                    <a href="https://www.instagram.com/">&nbsp;</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <p class="text-center">Camino a Ibarrilla KM 6 37207 León, Guanajuato</p>
        </div>
    </div>
</footer>

<script>
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;

    window.print();

    document.body.innerHTML = originalContents;

}
</script>

</body>