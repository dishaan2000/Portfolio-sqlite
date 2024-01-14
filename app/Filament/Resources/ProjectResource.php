<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\ToggleColumn;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Tabs::make('Tabs')
                ->columnSpan('full')
                ->tabs([
                    Tabs\Tab::make('Preview')
                        ->columns(2)
                        ->schema([
                        Forms\Components\TextInput::make('project')
                            ->required()
                            ->maxLength(255)
                            ->columnSpan('full'),
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
                        MarkdownEditor::make('description')
                            ->required()
                            ->columnSpan('full'),
                        Toggle::make('active')
                            ->onColor('success')
                            ->onIcon('heroicon-s-document-text')
                            ->offColor('info')
                            ->offIcon('heroicon-s-pencil-square')
                    ]),
                    Tabs\Tab::make('Start')
                        ->columns(2)
                        ->schema([
                        Forms\Components\Select::make('role_id')
                            ->relationship('role', 'name')
                            ->required()
                            ->columnSpan('full')
                            ->createOptionForm([
                                Forms\Components\TextInput::make('name')
                                    ->required()
                                    ->maxLength(255),
                            ]),
                        MarkdownEditor::make('mere_info')
                        ->columnSpan('full'),
                        TextInput::make('github_url')
                            ->url()
                            ->suffixIcon('heroicon-m-globe-alt'),
                        TextInput::make('other_url')
                            ->url()
                            ->suffixIcon('heroicon-m-globe-alt'),
                        FileUpload::make('image')
                            ->columnSpan('full'),
                    ]),
                    Tabs\Tab::make('Section 1')
                        ->columns(2)
                        ->schema([
                        Forms\Components\TextInput::make('titel_1')
                            ->maxLength(255)
                            ->columnSpan('full'),  
                        MarkdownEditor::make('description_1'),
                        Forms\Components\FileUpload::make('image_1')                    
                            ->image()
                            ->imageResizeMode('cover')
                            ->imageCropAspectRatio('2:1')
                            ->imageEditor(),     
                    ]),
                    Tabs\Tab::make('Section 2')
                        ->columns(2)
                        ->schema([
                        Forms\Components\TextInput::make('titel_2')
                            ->maxLength(255)
                            ->columnSpan('full'),      
                        MarkdownEditor::make('description_2'),
                        Forms\Components\FileUpload::make('image_2')
                            ->image()
                            ->imageResizeMode('cover')
                            ->imageCropAspectRatio('2:1')
                            ->imageEditor(),  
                    ]),
                    Tabs\Tab::make('Section 3')
                        ->columns(2)
                        ->schema([
                        Forms\Components\TextInput::make('titel_3')
                            ->maxLength(255)
                            ->columnSpan('full'),
                        MarkdownEditor::make('description_3'),
                        Forms\Components\FileUpload::make('image_3')
                            ->image()
                            ->imageResizeMode('cover')
                            ->imageCropAspectRatio('2:1')
                            ->imageEditor(),
                    ]),
                    Tabs\Tab::make('Section 4')
                        ->columns(2)
                        ->schema([
                        Forms\Components\TextInput::make('titel_4')
                            ->maxLength(255)
                            ->columnSpan('full'),
                        MarkdownEditor::make('description_4'),
                        Forms\Components\FileUpload::make('image_4')
                            ->image()
                            ->imageResizeMode('cover')
                            ->imageCropAspectRatio('2:1')
                            ->imageEditor(),
                    ]),
                    Tabs\Tab::make('Last section')
                        ->columns(2)
                        ->schema([
                        Forms\Components\TextInput::make('titel_last')
                            ->maxLength(255)
                            ->columnSpan('full'),
                        MarkdownEditor::make('description_last')
                            ->columnSpan('full'),
                    ]),
                ])
        ]);
    }
    
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('project')
                    ->searchable(),
                Tables\Columns\TextColumn::make('role.name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('mere_info')
                    ->searchable(),
                ToggleColumn::make('active')
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
