<div class="mt-3">
    <label for="" class="form-label">{{ $label ?? 'label' }}</label>
    <input
        type="text"
        class="form-control"
        name="{{ $name ?? 'name' }}"
        id=""
        aria-describedby="helpId"
        placeholder=""
    />
    <small id="helpId" class="form-text text-muted">{{ $text ?? 'small text' }}</small>
</div>
