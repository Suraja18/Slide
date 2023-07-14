<div class="switch">
    <button><input id="cmn-toggle-{{ $loop->iteration }}" class="cmn-toggle cmn-toggle-round"
            name="status" type="checkbox" {{ $service->switch == 1 ? 'checked' : '' }}></button>
    <label for="cmn-toggle-{{ $loop->iteration }}"></label>
</div>