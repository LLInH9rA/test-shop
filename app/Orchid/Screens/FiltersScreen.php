<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Fields\Input;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Screen;
use App\Models\FilterCollection;
use App\Orchid\Layouts\Filters\CollectionsLayout;

class FiltersScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'collections' => FilterCollection::all(),
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Фильтры';
    }

    public function description(): ?string
    {
        return 'Управление фильтрами';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::columns([
                Layout::rows([
                    CollectionsLayout::class,
                ])->title('name'),

                Layout::rows([
                    Input::make('name')
                        ->title('Full Name:')
                        ->placeholder('Enter full name')
                        ->required()
                        ->help('Please enter your full name'),
                ])->title('name'),
            ]),

            Layout::columns([
                Layout::rows([
                    Input::make('name')
                        ->title('Full Name:')
                        ->placeholder('Enter full name')
                        ->required()
                        ->help('Please enter your full name'),

                    Input::make('name')
                        ->title('Full Name:')
                        ->placeholder('Enter full name')
                        ->required()
                        ->help('Please enter your full name'),
                ])->title('name'),

                Layout::rows([
                    Input::make('name')
                        ->title('Full Name:')
                        ->placeholder('Enter full name')
                        ->required()
                        ->help('Please enter your full name'),
                ])->title('name'),
            ]),
        ];
    }
}
