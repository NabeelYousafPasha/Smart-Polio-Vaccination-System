<form
    id="{{ $form['id'] ?? '' }}"
    name="{{ $form['name'] ?? '' }}"
    method="{{ $form['method'] ?? '' }}"
    action="{{ $form['action'] ?? 'javascript::void(0)' }}"
    @if ($form['enctype'] ?? false)
        enctype="multipart/form-data"
    @endif
    autocomplete="off"
>
    @csrf
    @method($form['_method'] ?? '')

    {{-- FORM BODY --}}
    @includeIf($form['include_view'] ?? null)

    <div class="form-group">
        <button
            type="submit"
            class="btn btn-primary"
        >
            {{ $form['crud_action'] ?? trans('lang.actions.save') }}
        </button>
    </div>
</form>