@props([
    'items',
    'label' => 'item',
    'paginated' => false,
    'empty' => 'No items found.',
])

<div {{ $attributes }}>
    {{-- if there are no items to show, display the empty message passed as a prop --}}
    @if ($items->isEmpty())
        {{ $empty }}
    @else
        {{-- if paginated prop is set to true, display the item count in pagination format e.g. Showing 10 of 30... --}}
        @if ($paginated)
            Showing {{ $items->count() }}
            {{-- if a total count of items can be calculated (they must be a paginated object) then append ...of x... --}}
            @if (method_exists($items, 'total'))
                of {{ $items->total() }}
            @endif
        {{-- if paginated prop is set to false, display the item count only --}}
        @else
            {{ $items->count() }}
        @endif
        {{-- always append the item label e.g. post (posts if there are more than one) --}}
        {{ $label }}{{ $items->count() === 1 ? '' : 's' }}
    @endif
</div>
