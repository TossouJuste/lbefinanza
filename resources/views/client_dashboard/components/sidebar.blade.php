<div class="side-nav">
    <div class="side-nav-inner">
        <ul class="side-nav-menu scrollable">
            <li class="nav-item">
                <a class="" href="/dashboard">
                    <span class="icon-holder">
                        <i class="anticon anticon-dashboard"></i>
                    </span>
                    <span class="title">Tableau de bord</span>
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
                    <span class="title">Mon compte</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="/dashboard/profil">
                    <span class="icon-holder">
                        <i class="anticon anticon-user"></i>
                    </span>
                    <span class="title">Mon profil</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="/dashboard/transations">
                    <span class="icon-holder">
                        <i class="anticon anticon-export"></i>
                    </span>
                    <span class="title">Mes transations</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="/dashboard/portefeuille">
                    <span class="icon-holder">
                        <i class="anticon anticon-idcard"></i>
                    </span>
                    <span class="title">Portefeuille</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="/dashboard/transfert">
                    <span class="icon-holder">
                        <i class="anticon anticon-credit-card"></i>
                    </span>
                    <span class="title">Effectuer un transfert</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="/dashboard/virement">
                    <span class="icon-holder">
                        <i class="anticon anticon-credit-card"></i>
                    </span>
                    <span class="title">Effectuer un virement</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="/dashboard/virements">
                    <span class="icon-holder">
                        <i class="anticon anticon-credit-card"></i>
                    </span>
                    <span class="title">Mes virements</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="/dashboard/chat">
                    <span class="icon-holder">
                        <i class="anticon anticon-message"></i>
                    </span>
                    <span class="title">Messagerie</span>
                </a>
            </li>
            <li class="nav-item ">
                <a class="btn btn-primary m-3 m-t-5 text-white " href="/logout">
                    <span class="icon-holder">
                        <i class="anticon anticon-logout"></i>
                    </span>
                    <span class="title">Deconnexion</span>
                </a>
            </li>

        </ul>
    </div>
</div>