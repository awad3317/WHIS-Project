<?php

namespace App\Filament\Admin\Resources\Orders\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class OrderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('customer_name')
                    ->label('اسم العميل')
                    ->required(),
                TextInput::make('number')
                    ->label('رقم الهاتف')
                    ->required(),
                TextInput::make('email')
                    ->label('البريد الإلكتروني')
                    ->email()
                    ->required(),
                Textarea::make('message')
                    ->label('رسالة العميل')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }
}