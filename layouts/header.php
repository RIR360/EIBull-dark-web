<header class="header">
    <nav class="col navbar flex-nowrap navbar-expand-lg navbar-light p-3 justify-content-start">
        <div class="sidebar-width d-flex align-items-center">
            <div class="d-block d-lg-none pe-1">
                <button class="btn" onclick="toggle('#sidebar');">
                    <i id="side-bars-icon" class="fa fa-bars"></i>
                </button>
            </div>
            <img class="" src="/eibull/public/images/logo-dark.png" alt="EIBull Logo" height="30">
        </div>
        <div class="d-none d-lg-block" id="nav-messages">
            <b>Hello</b> John, Welcome to EIbull!
        </div>
        <div class="d-flex gap-3 ms-auto">
            <div class="dropdown">
                <button class="btn-dropdown btn btn-light rounded-pill dropdown-toggle px-3" type="button"
                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-upload"></i>
                    <span class="mx-2 d-none d-md-inline">Upload</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end rounded-4 p-3 border-0 shadow mt-2 scale-in-bottom"
                    aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">
                            <i class="fa fa-file me-2 w-1"></i>Txt File
                        </a></li>
                    <li><a class="dropdown-item" href="#">
                            <i class="fa fa-file me-2 w-1"></i>Docx File</a></li>
                    <li><a class="dropdown-item" href="#">
                            <i class="fa fa-file me-2 w-1"></i>Excel File</a></li>
                    <li><a class="dropdown-item" href="#">
                            <i class="fa fa-file me-2 w-1"></i>Other File</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <button class="btn-dropdown btn btn-light rounded-pill dropdown-toggle px-3" type="button"
                    id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                    <img class="profile-img" src="/eibull/public/images/icon-user.png" alt="Profile picture">
                    <span class="mx-2 d-none d-md-inline">Account</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end rounded-4 p-3 border-0 shadow mt-2 scale-in-bottom"
                    aria-labelledby="dropdownMenuButton2">
                    <li>
                        <div class="m-2 text-center fw-bold">
                            John Boy
                        </div>
                        <div class="m-2 text-center">
                            John@test.com!
                            <hr style="color:#6c757d !important;" />
                        </div>
                    </li>
                    <li>
                        <a class="dropdown-item" title="My Account" href="/eibull/views/account.php">
                            <i class="me-2 fas fa-unlock-alt"></i>
                            My Account
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="me-1 fas fa-sign-out-alt auto-logout"></i>
                            Sign Out
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<script>
    let messages = [
        {
            href: "/eibull/threats/351535435",
            html: "New <b>356 threats</b> were found recently!",
        },
        {
            href: "/eibull/threats/351535486",
            html: "<b>11.5 M</b> data breach detected!",
        },
        {
            href: "/eibull/threats/351535486",
            html: "Amazon <b>Lambda is down</b>!",
        }
    ]
    
    let index = 0;
    let nav_message_box = document.getElementById("nav-messages");

    setInterval(() => {

        let message = messages[index];
        nav_message_box.innerHTML = `
            <a href="${message.href}">${message.html}</a>
        `;
        index = (index + 1) % messages.length;
        
    }, 5000); // 1 second

</script>