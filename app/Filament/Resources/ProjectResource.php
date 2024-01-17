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
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Builder;
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
                            TextInput::make('project')
                                ->required()
                                ->maxLength(255)
                                ->columnSpan('full'),
                            FileUpload::make('image_mobile')
                                ->image()
                                ->imageResizeMode('cover')
                                ->imageCropAspectRatio('1:1.6')
                                ->imageEditor(),
                            FileUpload::make('image_desktop')
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
                                ->offIcon('heroicon-s-pencil-square'),
                        ]),
                    Tabs\Tab::make('Start')
                        ->columns(2)
                        ->schema([
                        MarkdownEditor::make('mere_info')
                        ->columnSpan('full'),
                        TextInput::make('github_url')
                            ->url()
                            ->suffixIcon('heroicon-m-globe-alt'),
                        TextInput::make('other_url')
                            ->url()
                            ->suffixIcon('heroicon-m-globe-alt'),
                        ]),
                    Tabs\Tab::make('Sections')
                        ->columns(2)
                        ->schema([
                            Builder::make('sections')
                                ->columnSpan('full')
                                ->blocks([
                                    Builder\Block::make('section')
                                        ->schema([
                                            TextInput::make('title')->required(),
                                            MarkdownEditor::make('description'),
                                            FileUpload::make('image')
                                                ->image()
                                                ->imageResizeMode('cover')
                                                ->imageCropAspectRatio('2:1')
                                                ->imageEditor(),
                                        ]),
                                ]),
                        ]),
                ]),
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
