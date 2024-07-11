<div class="side-nav">
    <div class="side-nav-inner">
        <ul class="side-nav-menu scrollable">
            <li class="nav-item">
                <a class="" href="/dashboard">
                    <span class="icon-holder">
                        <i class="anticon anticon-dashboard"></i>
                    </span>
                    <span class="title">Pannello di controllo</span>
                </a>
            </li>
            @if (Auth::user()->admin==1)

            <li class="nav-item">
                <a class="" href="/admin">
                    <span class="icon-holder">
                        <i class="anticon anticon-dashboard"></i>
                    </span>
                    <span class="title">Admin dashboard</span>
                </a>
            </li>
                
            @endif
            <li class="nav-item">
                <a class="" href="/dashboard/account">
                    <span class="icon-holder">
                        <i class="anticon anticon-idcard"></i>
                    </span>
                    <span class="title">Mio conto</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="/dashboard/profil">
                    <span class="icon-holder">
                        <i class="anticon anticon-user"></i>
                    </span>
                    <span class="title">Mio profilo</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="/dashboard/transations">
                    <span class="icon-holder">
                        <i class="anticon anticon-export"></i>
                    </span>
                    <span class="title">Mie transazioni</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="/dashboard/portefeuille">
                    <span class="icon-holder">
                        <i class="anticon anticon-idcard"></i>
                    </span>
                    <span class="title">Portafoglio</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="/dashboard/transfert">
                    <span class="icon-holder">
                        <i class="anticon anticon-credit-card"></i>
                    </span>
                    <span class="title">Effettua un trasferimento</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="/dashboard/virement">
                    <span class="icon-holder">
                        <i class="anticon anticon-credit-card"></i>
                    </span>
                    <span class="title">Trasferire denaro</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="/dashboard/virements">
                    <span class="icon-holder">
                        <i class="anticon anticon-credit-card"></i>
                    </span>
                    <span class="title">Mie trasferimenti</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="/dashboard/chat">
                    <span class="icon-holder">
                        <i class="anticon anticon-message"></i>
                    </span>
                    <span class="title">Messaggistica</span>
                </a>
            </li>
            <li class="nav-item ">
                <a class="btn btn-primary m-3 m-t-5 text-white " href="/logout">
                    <span class="icon-holder">
                        <i class="anticon anticon-logout"></i>
                    </span>
                    <span class="title">disconnessione</span>
                </a>
            </li>

        </ul>
    </div>
</div>