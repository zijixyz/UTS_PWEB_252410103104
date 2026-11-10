@props(['menuAktif' => 'Dashboard'])
<nav style="background:#1a202c;color:#fff;padding:.8rem 1rem;">
    <div style="max-width:960px;margin:0 auto;display:flex;flex-wrap:wrap;gap:.6rem;align-items:center;">
        <strong style="margin-right:auto;">UTS PWEB</strong>
        <a href="{{ route('dashboard') }}"
           style="color:{{ $menuAktif === 'Dashboard' ? '#63b3ed' : '#fff' }};text-decoration:none;padding:.3rem .5rem;">
            Dashboard
        </a>
        <a href="{{ route('pengelolaan') }}"
           style="color:{{ $menuAktif === 'Pengelolaan' ? '#63b3ed' : '#fff' }};text-decoration:none;padding:.3rem .5rem;">
            Pengelolaan
        </a>
        <a href="{{ route('profile') }}"
           style="color:{{ $menuAktif === 'Profile' ? '#63b3ed' : '#fff' }};text-decoration:none;padding:.3rem .5rem;">
            Profile
        </a>
        <form method="POST" action="{{ route('logout') }}" style="margin:0;">
            @csrf
            <button type="submit" class="btn btn-danger" style="padding:.35rem .7rem;font-size:.85rem;">
                Logout
            </button>
        </form>
    </div>
</nav>
