<?php

namespace App\Filament\Pages;

use App\Models\Contact;
use Filament\Actions\Action;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Support\Exceptions\Halt;

class ContactPage extends Page implements HasForms
{
    use InteractsWithForms;

    public ?array $data = []; 
    protected static ?string $navigationIcon = 'heroicon-o-identification';

    protected static string $view = 'filament.pages.contact-page';

    protected static ?string $navigationGroup = 'Contact Details';

    public static function getNavigationLabel(): string
    {
        return __('Contact Info');
    }

    public function getHeading(): string
    {
        return __('Contact Information');
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                TextInput::make('phone_number')
                    ->tel()
                    ->required()
                    ->maxLength(255),
            ])
            ->columns(2)
            ->statePath('data');
    }

    public function mount(): void
    {
        $about = Contact::firstOrNew();

        $this->form->fill($about->attributesToArray());
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
                ->submit('save'),
        ];
    }


    public function save(): void
    {
        try {
            $data = $this->form->getState();

            // Fetch the single record from the About model
            $about = Contact::firstOrNew();

            // Update the About record with the form data
            $about->fill($data);
            $about->save();
        } catch (Halt $exception) {
            return;
        }

        Notification::make() 
            ->success()
            ->title(__('filament-panels::resources/pages/edit-record.notifications.saved.title'))
            ->send(); 
    }
}
