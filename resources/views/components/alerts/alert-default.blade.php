<div
    class="alert alert-{{ $class ?? 'primary'}} alert-dismissible fade show"
    role="alert"
>
    <button
        type="button"
        class="btn-close"
        data-bs-dismiss="alert"
        aria-label="Close"
    ></button>
    <strong> {{ $header ?? 'header' }}</strong> {{ $content ?? 'content' }}
</div>

<script>
    var alertList = document.querySelectorAll(".alert");
    alertList.forEach(function (alert) {
        new bootstrap.Alert(alert);
    });
</script>
