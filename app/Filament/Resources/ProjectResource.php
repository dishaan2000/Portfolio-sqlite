<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('project')
                    ->required()
                    ->maxLength(255)
                    ->columnSpan('full'),
                Forms\Components\TextInput::make('role')
                    ->maxLength(255),
                Forms\Components\TextInput::make('mere_info')
                    ->maxLength(255),
                
                Forms\Components\FileUpload::make('image_mobile'),
                Forms\Components\FileUpload::make('image_desktop'),
                Forms\Components\TextInput::make('description')
                    ->required()
                    ->maxLength(255),
                FileUpload::make('image'),
                Forms\Components\TextInput::make('description_1')
                ->maxLength(255),
                Forms\Components\FileUpload::make('image_1'),
                Forms\Components\TextInput::make('description_2')
                ->maxLength(255),
                Forms\Components\FileUpload::make('image_2'),
                Forms\Components\TextInput::make('description_3')
                ->maxLength(255),
                Forms\Components\FileUpload::make('image_3'),
                Forms\Components\TextInput::make('description_4')
                ->maxLength(255),
                Forms\Components\FileUpload::make('image_4'),
                Forms\Components\TextInput::make('description_last')
                ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('project')
                    ->searchable(),
                Tables\Columns\TextColumn::make('role')
                    ->searchable(),
                Tables\Columns\TextColumn::make('mere_info')
                    ->searchable(),
                ImageColumn::make('image'),
                ImageColumn::make('image_1'),
                ImageColumn::make('image_2'),
                ImageColumn::make('image_3'),
                ImageColumn::make('image_4'),
                ImageColumn::make('image_mobile'),
                ImageColumn::make('image_desktop'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }    
}
