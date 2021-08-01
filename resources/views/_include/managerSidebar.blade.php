<style>
    * {
        color: black !important;
    }
</style>
<nav id="sidebar" class="bg-white shadow-sm border border-1 ">
    <div class="p-4 pt-5 ">
        <h1 class="display-5"><a href="{{url('/manager')}}" class="display-6 text-decoration-none">Restaurant</a></h1>
        <ul class="list-unstyled components mb-5">
            <span style="font-size: 10px;" class="text-muted">GENERAL</span> <br>
            <li><a href="{{url('/manager')}}">Dashboard</a></li>
            <span style="font-size: 10px;" class="text-muted">ADMINISTRATOR</span> <br>
            <li><a href="{{route('food.index')}}">Food</a></li>
            <li><a href="#">Order</a></li>
            <li><a href="#">Role</a></li>
        </ul>
        <div class="mb-5">
            <h3 class="h6">Subscribe for newsletter</h3>
            <form action="#" class="colorlib-subscribe-form">
                <div class="form-group d-flex">
                    <div class="icon"><span class="icon-paper-plane"></span></div>
                    <input type="text" class="form-control" placeholder="Enter Email Address">
                </div>
            </form>
        </div>
        <div class="footer">
            <p>
                Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a
                    href="https://colorlib.com" target="_blank">Colorlib.com</a>
            </p>
        </div>
    </div>
</nav>
