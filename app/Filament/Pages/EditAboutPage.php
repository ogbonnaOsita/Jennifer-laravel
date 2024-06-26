<?php

namespace App\Filament\Pages;

use App\Models\About;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Support\Exceptions\Halt;

class EditAboutPage extends Page implements HasForms
{
    use InteractsWithForms;

    public ?array $data = []; 
    protected static ?string $navigationIcon = 'heroicon-o-user-circle';

    protected static string $view = 'filament.pages.edit-about-page';

    public static function getNavigationLabel(): string
    {
        return __('About Page');
    }

    public function getHeading(): string
    {
        return __('About Page');
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('image')
                ->preserveFilenames()
                    ->image()
                    ->required(),
                Textarea::make('content')
                    ->required()
                    ->columnSpanFull(),
            ])
            ->statePath('data');
    }

    public function mount(): void
    {
        $about = About::firstOrNew();

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
            $about = About::firstOrNew();

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
