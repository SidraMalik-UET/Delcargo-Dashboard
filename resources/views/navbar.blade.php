<style>
.navbar {
    width: 100%;
    height: 90px;
    background-color: #1b263b;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 50px;
    box-sizing: border-box;
}

.logo {
    display: flex;
    align-items: center;
    gap: 12px;
    text-decoration: none;
    color: white;
    font-size: 24px;
    font-weight: bold;
}

.logo img {
    width: 60px;
    height: 60px;
    object-fit: contain;
}

.logo span {
    color: white;
}

.nav-menu {
    display: flex;
    align-items: center;
    gap: 30px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.nav-menu li {
    list-style: none;
}

.nav-menu a {
    color: white;
    text-decoration: none;
    font-size: 17px;
}

.nav-menu a:hover {
    color: #f4a261;
}

.nav-right {
    display: flex;
    align-items: center;
}

.contact-btn {
    background-color: #f4a261;
    color: white;
    text-decoration: none;
    padding: 12px 20px;
    border-radius: 6px;
}
</style>


<header class="navbar">

    <a href="/" class="logo">
        <img src="{{ asset('images/delcargo-logo.png') }}" alt="DelCargo Logo">
        <span>DelCargo</span>
    </a>

    <ul class="nav-menu">

        <li>
            <a href="/">Home</a>
        </li>

        <li>
            <a href="/about">About</a>
        </li>

        <li>
            <a href="/services">Services</a>
        </li>

        <li>
            <a href="/products">Products</a>
        </li>

        <li>
            <a href="/faq">FAQs</a>
        </li>

        <li>
            <a href="{{ route('admin.users') }}">Users</a>
        </li>

    </ul>

    <div class="nav-right">
        <a href="/contact" class="contact-btn">
            Contact Us
        </a>
    </div>

</header>