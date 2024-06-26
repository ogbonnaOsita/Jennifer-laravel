<?php

namespace App\Filament\Pages;

use App\Models\Social;
use Filament\Actions\Action;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Support\Exceptions\Halt;

class SocialMediaPage extends Page implements HasForms
{
    use InteractsWithForms;

    public ?array $data = []; 
    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-bottom-center-text';

    protected static string $view = 'filament.pages.social-media-page';

    protected static ?string $navigationGroup = 'Contact Details';

    public static function getNavigationLabel(): string
    {
        return __('Social Media Links');
    }

    public function getHeading(): string
    {
        return __('Social Media Links');
    }
    

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('facebook')
                    ->required()
                    ->maxLength(255),
                TextInput::make('twitter')
                    ->required()
                    ->maxLength(255),
                TextInput::make('linkedin')
                    ->required()
                    ->maxLength(255),
                TextInput::make('instagram')
                    ->required()
                    ->maxLength(255),
            ])
            ->columns(2)
            ->statePath('data');
    }

    public function mount(): void
    {
        $socials = Social::firstOrNew();

        $this->form->fill($socials->attributesToArray());
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
            $about = Social::firstOrNew();

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
