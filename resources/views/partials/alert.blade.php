@if ($errors->any())
    <div style="background:#fde2e2;color:#a52020;padding:.8rem 1rem;border-radius:6px;margin-bottom:1rem;">
        <strong>Ada kesalahan:</strong>
        <ul style="margin:.4rem 0 0 1.2rem;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
