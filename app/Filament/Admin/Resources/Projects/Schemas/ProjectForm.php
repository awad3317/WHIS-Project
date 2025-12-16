<?php

namespace App\Filament\Admin\Resources\Projects\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                Textarea::make('description')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('type')
                    ->required(),
                TextInput::make('link')
                    ->required(),
                FileUpload::make('image')
                    ->image()
                    ->directory('uploads/images')
                    ->visibility('public')
                    ->disk('public'),
                TextInput::make('service_id')
                    ->required()
                    ->numeric(),
                DatePicker::make('start_date'),
                DatePicker::make('delivery_date'),
                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
                TextInput::make('status')
                    ->required()
                    ->default('in_progress'),
            ]);
    }
}
