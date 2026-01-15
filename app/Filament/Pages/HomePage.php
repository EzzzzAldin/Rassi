<?php

namespace App\Filament\Pages;

use App\Models\HomePage as HomePageModel;
use BackedEnum;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Grid;

class HomePage extends Page implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-home';

    protected static string|BackedEnum|null $activeNavigationIcon = 'heroicon-s-home';

    protected static ?string $navigationLabel = 'Home Page';

    protected string $view = 'filament.pages.home-page';

    public function mount(): void
    {
        $this->form->fill(
            HomePageModel::first()?->toArray() ?? []
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
            Grid::make(2)
                ->schema([
                    TextInput::make('en_title')
                        ->label(false)
                        ->placeholder('English Title'),

                    TextInput::make('ar_title')
                        ->label(false)
                        ->placeholder('Arabic Title')
                        ->extraAttributes(['dir' => 'rtl']),
                ]),

            Grid::make(2)
                ->schema([
                    RichEditor::make('en_description')
                        ->label(false),

                    RichEditor::make('ar_description')
                        ->label(false)

                        ->extraAttributes(['dir' => 'rtl']),
                ]),

            FileUpload::make('video')
                ->label(false)
                ->directory('videos')
                ->multiple(false)
                ->acceptedFileTypes(['video/mp4', 'video/webm', 'video/ogg'])
                ->maxSize(10240) // 100 MB
                ->disk('public')
                ->columnSpanFull(),
        ];
    }

    public function save(): void
    {
        $formData = $this->form->getState();

        if (is_array($formData['video'])) {
            $formData['video'] = reset($formData['video']);
        }

        HomePageModel::updateOrCreate(['id' => 1], $formData);

        Notification::make()
            ->title('Home Page updated successfully')
            ->success()
            ->send();
    }
}
