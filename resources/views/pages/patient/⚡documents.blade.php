<?php

use App\Models\Document;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
use TallStackUi\Traits\Interactions;

new
    #[Layout('layouts::patient')]
    class extends Component
    {
        use WithFileUploads;
        use Interactions;

        public $title;

        public $description;

        #[Validate('required')]
        public $document_type = 'image';

        #[Validate('required|file|max:10240')]
        public $file;

        public function with(): array
        {
            return [
                'headers' => [
                    ['index' => 'title', 'label' => 'Title'],
                    ['index' => 'document_type', 'label' => 'Type'],
                    ['index' => 'file', 'label' => 'File'],
                    ['index' => 'created_at', 'label' => 'Uploaded'],
                    ['index' => 'action', 'label' => 'Action'],
                ],
                'rows' => Document::where('patient_id', auth()->id())
                    ->latest()
                    ->get(),
                'documentTypes' => [
                    ['label' => 'Image', 'value' => 'image'],
                    ['label' => 'PDF', 'value' => 'pdf'],
                    ['label' => 'Lab Report', 'value' => 'lab_report'],
                    ['label' => 'X-Ray', 'value' => 'xray'],
                    ['label' => 'Prescription', 'value' => 'prescription'],
                    ['label' => 'Insurance', 'value' => 'insurance'],
                    ['label' => 'Other', 'value' => 'other'],
                ],
            ];
        }

        public function save()
        {
            $this->validate();

            $path = $this->file->store('documents/' . auth()->id(), 'public');

            Document::create([
                'patient_id' => auth()->id(),
                'title' => $this->title,
                'description' => $this->description,
                'document_type' => $this->document_type,
                'file' => $path,
            ]);

            $this->reset(['title', 'description', 'document_type', 'file']);

            $this->toast()->success('Document uploaded')->send();
        }

        public function deleteDocument($id)
        {
            $document = Document::where('patient_id', auth()->id())->findOrFail($id);

            \Illuminate\Support\Facades\Storage::disk('public')->delete($document->file);

            $document->delete();

            $this->toast()->success('Document deleted')->send();
        }
    };
?>

<div class="space-y-6">
    <x-card header="Upload Document">
        <form wire:submit="save">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <x-input label="Title" placeholder="Document title" wire:model="title" />
                <x-select.styled label="Document Type" :options="$documentTypes" wire:model="document_type" />
            </div>
            <div class="mb-4">
                <x-textarea label="Description" placeholder="Optional description" wire:model="description" />
            </div>
            <div class="mb-4">
                <x-upload wire:model="file" label="File" tip="PDF, JPG, PNG — max 10MB" />
            </div>
            <x-button type="submit" text="Upload" icon="arrow-up-tray" loading />
        </form>
    </x-card>

    <x-card>
        <x-slot:header>
            <div class="flex items-center gap-2">
                <x-icon name="document" outline class="h-6 w-6" /> My Documents
            </div>
        </x-slot:header>

        @if(count($rows) > 0)
            <x-table :$headers :$rows>
                @interact('column_document_type', $row)
                @php
                    $typeColors = [
                        'image' => 'blue',
                        'pdf' => 'red',
                        'lab_report' => 'green',
                        'xray' => 'purple',
                        'prescription' => 'yellow',
                        'insurance' => 'orange',
                        'other' => 'zinc',
                    ];
                @endphp
                <x-badge :text="ucfirst(str_replace('_', ' ', $row->document_type))" :color="$typeColors[$row->document_type] ?? 'zinc'" light />
                @endinteract

                @interact('column_file', $row)
                <a href="{{ \Illuminate\Support\Facades\Storage::disk('public')->url($row->file) }}" target="_blank" class="flex items-center gap-1 text-primary-500 hover:underline">
                    <x-icon name="arrow-down-tray" class="h-4 w-4" />
                    Download
                </a>
                @endinteract

                @interact('column_created_at', $row)
                <span>{{ \Illuminate\Support\Carbon::parse($row->created_at)->format('M d, Y') }}</span>
                @endinteract

                @interact('column_action', $row)
                <x-button icon="trash" color="red" light xs wire:click="deleteDocument({{ $row->id }})" wire:confirm="Delete this document?" />
                @endinteract
            </x-table>
        @else
            <div class="flex flex-col items-center justify-center py-12 text-gray-400">
                <x-icon name="document" class="h-16 w-16 mb-4" />
                <p class="text-lg font-medium">No documents yet</p>
                <p class="text-sm">Upload your first document using the form above</p>
            </div>
        @endif
    </x-card>
</div>
