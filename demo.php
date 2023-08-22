<?php

namespace App\Filament\Resources;

class DemoResource extends Resource
{
    public static function table(Table $table): Table
    {
        return $table
            ->filters([
                Tables\Filters\SelectFilter::make('user_id')->options([1,2,3]),
                Tables\Filters\SelectFilter::make('type')->options([1,2,3]),
            ], Tables\Enums\FiltersLayout::AboveContent);
    }
}
