<?php

namespace App\Filament\Pages;

use App\Models\AboutUs;
use BackedEnum;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Section;
use Visualbuilder\FilamentTinyEditor\TinyEditor;

class EditAboutUs extends Page implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-information-circle';

    protected static string|BackedEnum|null $activeNavigationIcon = 'heroicon-s-information-circle';

    protected static ?string $navigationLabel = 'About US';

    protected string $view = 'filament.pages.edit-about-us';

    public function mount(): void
    {
        $this->form->fill(
            AboutUs::first()?->toArray() ?? []
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
                ->directory('about-us')
                ->disk('public')
                ->image()
                ->maxSize(10240) // 10 MB
                ->columnSpanFull(),

            Section::make('Description')
                ->schema([
                    TinyEditor::make('en_description')->label('English Description'),
                    TinyEditor::make('ar_description')
                        ->label('Arabic Description')
                        ->extraAttributes(['dir' => 'rtl']),
                ])->columns(2),

            Section::make('Our Story')
                ->schema([
                    TinyEditor::make('en_ourstory')->label('English Our Story'),
                    TinyEditor::make('ar_ourstory')
                        ->label('Arabic Our Story')
                        ->extraAttributes(['dir' => 'rtl']),
                ])->columns(2),

            Section::make('Safety')
                ->schema([
                    Textarea::make('en_safety'),
                    Textarea::make('ar_safety')->extraAttributes(['dir' => 'rtl']),
                ])->columns(2),

            Section::make('Transparency')
                ->schema([
                    Textarea::make('en_transparency'),
                    Textarea::make('ar_transparency')->extraAttributes(['dir' => 'rtl']),
                ])->columns(2),

            Section::make('Innovation')
                ->schema([
                    Textarea::make('en_innovation'),
                    Textarea::make('ar_innovation')->extraAttributes(['dir' => 'rtl']),
                ])->columns(2),

            Section::make('Credibility')
                ->schema([
                    Textarea::make('en_credibility'),
                    Textarea::make('ar_credibility')->extraAttributes(['dir' => 'rtl']),
                ])->columns(2),

        ];
    }

    public function save(): void
    {
        $formData = $this->form->getState();

        $formData['image'] = $formData['image'] ?? null;

        AboutUs::updateOrCreate(['id' => 1], $formData);

        Notification::make()
            ->title('About Us updated successfully')
            ->success()
            ->send();
    }

    public static function getNavigationSort(): ?int
    {
        return 2;
    }
}
