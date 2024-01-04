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
use Filament\Forms\Components\RichEditor;

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
                RichEditor::make('mere_info')
                ->toolbarButtons([
                    'attachFiles',
                    'blockquote',
                    'bold',
                    'bulletList',
                    'codeBlock',
                    'italic',
                    'link',
                    'orderedList',
                    'redo',
                    'strike',
                    'underline',
                    'undo',
                ]),
                Forms\Components\FileUpload::make('image_mobile')
                    ->image()
                    ->imageResizeMode('cover')
                    ->imageCropAspectRatio('1:1.6')
                    ->imageEditor(),
                Forms\Components\FileUpload::make('image_desktop')
                    ->image()
                    ->imageResizeMode('cover')
                    ->imageCropAspectRatio('2:1')
                    ->imageEditor(),
                RichEditor::make('description')
                ->toolbarButtons([
                    'attachFiles',
                    'blockquote',
                    'bold',
                    'bulletList',
                    'codeBlock',
                    'italic',
                    'link',
                    'orderedList',
                    'redo',
                    'strike',
                    'underline',
                    'undo',
                ]),
                FileUpload::make('image'),
                Forms\Components\TextInput::make('titel_1')
                ->maxLength(255)
                ->columnSpan('full'),  
                RichEditor::make('description_1')
                ->toolbarButtons([
                    'attachFiles',
                    'blockquote',
                    'bold',
                    'bulletList',
                    'codeBlock',
                    'italic',
                    'link',
                    'orderedList',
                    'redo',
                    'strike',
                    'underline',
                    'undo',
                ]),
                Forms\Components\FileUpload::make('image_1')                    
                ->image()
                ->imageResizeMode('cover')
                ->imageCropAspectRatio('2:1')
                ->imageEditor(),     
                Forms\Components\TextInput::make('titel_2')
                ->maxLength(255)
                ->columnSpan('full'),      
                RichEditor::make('description_2')
                ->toolbarButtons([
                    'attachFiles',
                    'blockquote',
                    'bold',
                    'bulletList',
                    'codeBlock',
                    'italic',
                    'link',
                    'orderedList',
                    'redo',
                    'strike',
                    'underline',
                    'undo',
                ]),
                Forms\Components\FileUpload::make('image_2')
                ->image()
                ->imageResizeMode('cover')
                ->imageCropAspectRatio('2:1')
                ->imageEditor(),
                Forms\Components\TextInput::make('titel_3')
                ->maxLength(255)
                ->columnSpan('full'),
                RichEditor::make('description_3')
                ->toolbarButtons([
                    'attachFiles',
                    'blockquote',
                    'bold',
                    'bulletList',
                    'codeBlock',
                    'italic',
                    'link',
                    'orderedList',
                    'redo',
                    'strike',
                    'underline',
                    'undo',
                ]),
                Forms\Components\FileUpload::make('image_3')
                ->image()
                ->imageResizeMode('cover')
                ->imageCropAspectRatio('2:1')
                ->imageEditor(),
                Forms\Components\TextInput::make('titel_4')
                ->maxLength(255)
                ->columnSpan('full'),
                RichEditor::make('description_4')
                ->toolbarButtons([
                    'attachFiles',
                    'blockquote',
                    'bold',
                    'bulletList',
                    'codeBlock',
                    'italic',
                    'link',
                    'orderedList',
                    'redo',
                    'strike',
                    'underline',
                    'undo',
                ]),
                Forms\Components\FileUpload::make('image_4')
                ->image()
                ->imageResizeMode('cover')
                ->imageCropAspectRatio('2:1')
                ->imageEditor(),
                Forms\Components\TextInput::make('titel_last')
                ->maxLength(255)
                ->columnSpan('full'),
                RichEditor::make('description_last')
                ->toolbarButtons([
                    'attachFiles',
                    'blockquote',
                    'bold',
                    'bulletList',
                    'codeBlock',
                    'italic',
                    'link',
                    'orderedList',
                    'redo',
                    'strike',
                    'underline',
                    'undo',
                ]),
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
