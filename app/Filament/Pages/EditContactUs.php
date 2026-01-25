<?php

namespace App\Filament\Pages;

use App\Models\ContactUs;
use BackedEnum;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Section;
use Visualbuilder\FilamentTinyEditor\TinyEditor;

class EditContactUs extends Page implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-phone';

    protected static string|BackedEnum|null $activeNavigationIcon = 'heroicon-s-phone';

    protected static ?string $navigationLabel = 'Contact Us';

    protected string $view = 'filament.pages.edit-contact-us';

    public function mount(): void
    {
        $this->form->fill(
            ContactUs::first()?->toArray() ?? []
        );
    }

    public function form($form)
    {
        return $form
            ->schema($this->getFormSchema())
            ->statePath('data');
    }

    protected function getFormSchema(): array
    {
        return [

            FileUpload::make('image')
                ->directory('contact-us')
                ->disk('public')
                ->image()
                ->maxSize(10240)
                ->columnSpanFull(),

            Section::make('Description')
                ->schema([
                    TinyEditor::make('en_description')->label('English Description'),
                    TinyEditor::make('ar_description')
                        ->label('Arabic Description')
                        ->extraAttributes(['dir' => 'rtl']),
                ])->columns(2),

            Section::make('Contact Info')
                ->schema([
                    TextInput::make('phone')->label('Phone'),
                    TextInput::make('email')->label('Email'),
                    TextInput::make('facebook')->label('Facebook'),
                    TextInput::make('tiktok')->label('TikTok'),
                    TextInput::make('youtube')->label('YouTube'),
                ])->columns(2),

        ];
    }

    public function save(): void
    {
        $formData = $this->form->getState();

        $formData['image'] = $formData['image'] ?? null;

        ContactUs::updateOrCreate(['id' => 1], $formData);

        Notification::make()
            ->title('Contact Us updated successfully')
            ->success()
            ->send();
    }

    public static function getNavigationSort(): ?int
    {
        return 4;
    }
}
