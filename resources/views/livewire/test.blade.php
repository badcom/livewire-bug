<div>
    <form wire:submit="save">
        <button type="submit">Click me!</button>
    </form>
</div>

@script
<script>
    Livewire.hook('commit', ({ component, commit, respond, succeed, fail }) => {
        console.log('commited!')
    })
</script>
@endscript
