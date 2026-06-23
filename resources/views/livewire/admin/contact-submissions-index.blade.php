<div>
    <div class="mb-6 flex items-center justify-between">
        <div>
            <flux:heading size="xl" level="1">Contact Submissions</flux:heading>
            <flux:subheading size="lg" class="mb-6">Review messages sent via the landing page contact form.</flux:subheading>
        </div>
    </div>

    <flux:card>
        <div class="overflow-x-auto">
            <flux:table>
                <flux:table.columns>
                    <flux:table.column>Name</flux:table.column>
                    <flux:table.column>Email</flux:table.column>
                    <flux:table.column>Message</flux:table.column>
                    <flux:table.column>Date</flux:table.column>
                    <flux:table.column>Actions</flux:table.column>
                </flux:table.columns>

                <flux:table.rows>
                    @forelse ($submissions as $submission)
                        <flux:table.row :key="$submission->id">
                            <flux:table.cell class="font-medium">{{ $submission->name }}</flux:table.cell>
                            <flux:table.cell>
                                <a href="mailto:{{ $submission->email }}" class="text-primary hover:underline">{{ $submission->email }}</a>
                            </flux:table.cell>
                            <flux:table.cell>
                                <span class="inline-block max-w-md truncate" title="{{ $submission->message }}">
                                    {{ $submission->message }}
                                </span>
                            </flux:table.cell>
                            <flux:table.cell>{{ $submission->created_at->format('M d, Y g:i A') }}</flux:table.cell>
                            <flux:table.cell>
                                <flux:button variant="danger" size="sm" wire:click="delete({{ $submission->id }})" wire:confirm="Are you sure you want to delete this submission?">
                                    Delete
                                </flux:button>
                            </flux:table.cell>
                        </flux:table.row>
                    @empty
                        <flux:table.row>
                            <flux:table.cell colspan="5" class="text-center text-zinc-500 py-8">
                                No contact submissions found.
                            </flux:table.cell>
                        </flux:table.row>
                    @endforelse
                </flux:table.rows>
            </flux:table>
        </div>

        @if($submissions->hasPages())
            <div class="mt-4">
                {{ $submissions->links() }}
            </div>
        @endif
    </flux:card>
</div>
