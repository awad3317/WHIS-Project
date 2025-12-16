<?php

namespace App\Filament\Admin\Resources\Services\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Forms\Components\SelectFilter;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter as FiltersSelectFilter;
use Filament\Tables\Table;

class ServicesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                ImageColumn::make('icon_service')
                    ->label('الأيقونة')
                    ->disk('public')
                    ->width(50)
                    ->circular(),

                TextColumn::make('name')
                    ->label('اسم الخدمة')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                TextColumn::make('description')
                    ->label('الوصف')
                    ->limit(50)
                    ->wrap(),

              

                TextColumn::make('created_at')
                    ->label('تاريخ الإنشاء')
                    ->dateTime('Y-m-d')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

            ])

            ->filters([
                FiltersSelectFilter::make('status')
                    ->label('حالة الخدمة')
                    ->options([
                        'active' => 'نشطة',
                        'inactive' => 'غير نشطة',
                    ]),
            ])

            ->recordActions([
                EditAction::make()->label('تعديل'),
                DeleteAction::make()->label('حذف'),
            ])

            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()->label('حذف المحدد'),
                ]),
            ])

            ->defaultSort('created_at', 'DESC')

            ->striped()
            ->paginated([10, 25, 50]);
    
    }
}