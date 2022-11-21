<nav id="mainNavbar"  class="navbar navbar-dark bg-warning navbar-expand-md py-0 fixed-top">
    <a href="#" class="navbar-brand">CANDY</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
<div class="collapse navbar-collapse" id="navLinks mainNav">
    <ul class="navbar-nav">
        <li class="nav-items">
            <a href="" class="nav-link">HOME</a>
        </li>
        <li class="nav-items">
            <a href="" class="nav-link">ABOUT</a>
        </li>
        <li class="nav-items">
            <a href="" class="nav-link">TICKETS</a>
        </li>
    </ul>
</div>
</nav>



<script>
    $(function(){
    $(document).scroll(function(){
        var $nav = $("#mainNavbar");
        $nav.toggleClass("scrolled",$(this).scrollTop() > $nav.height() )
    })
});
</script>