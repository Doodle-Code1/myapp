<?php

namespace App\Livewire;

use App\Models\Contact;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Concerns\InteractsWithSchemas;
use Filament\Schemas\Contracts\HasSchemas;
use Filament\Schemas\Schema;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ContactForm extends Component implements HasActions, HasSchemas
{
    use InteractsWithActions;
    use InteractsWithSchemas;

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Full Name')
                    ->required()
                    ->placeholder('Enter your name')
                    ->prefixIcon('heroicon-o-user')
                    ->extraAttributes(['class' => 'mb-4']),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required()
                    ->placeholder('Enter your email')
                    ->prefixIcon('heroicon-o-envelope')
                    ->extraAttributes(['class' => 'mb-4'])
                    ->required(),
                TextInput::make('subject')
                    ->label('message subject')
                    ->required()
                    ->placeholder('Enter a subject')
                    ->prefixIcon('heroicon-o-inbox-arrow-down')
                    ->extraAttributes(['class' => 'mb-4']),
                Textarea::make('message')
                    ->label('Message')
                    ->required()
                    ->placeholder('Ask about a free call!')
                    ->extraAttributes(['class' => 'mb-4'])
                    ->columnSpanFull(),
            ])
            ->statePath('data')
            ->model(Contact::class);
    }

    public function create(): void
    {
        $data = $this->form->getState();

        $record = Contact::create($data);

        $this->form->model($record)->saveRelationships();


        // Show success message
        session()->flash('success', 'Success');
    }

    public function render(): View
    {
        return view('livewire.contact-form');
    }
}
