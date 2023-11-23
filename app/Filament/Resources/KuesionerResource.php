<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Kuesioner;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use App\Filament\Resources\KuesionerResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use IbrahimBougaoua\FilamentRatingStar\Actions\RatingStar;
use App\Filament\Resources\KuesionerResource\RelationManagers;
use IbrahimBougaoua\FilamentRatingStar\Actions\RatingStarColumn;
use IbrahimBougaoua\FilamentRatingStar\Facades\FilamentRatingStar;
use Althinect\FilamentSpatieRolesPermissions\Concerns\HasSuperAdmin;
use HasRoles;

class KuesionerResource extends Resource
{
    protected static ?string $model = Kuesioner::class;
   

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Driver';
    protected static ?string $navigationLabel= 'Form Penilaian';
    protected static ?string $title = 'kuesiner';
    protected static ?string $recordTitleAttribute = 'title';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Card::make()
                //     ->schema([
                //         TextInput::make('nama')->required(),
                //         TextInput::make('email')->required(),
                //         Select::make('departemen')->options([
                //             'cs'=> 'cs',
                //             'scurity'=> 'scurity',
                //             'driver'=> 'driver',
                //         ]
                            
                //         ),
                //         RatingStar::make('rating')
                // ->label('Rating')
                //     ])
                //     ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('nama'),
            TextColumn::make('nama_pengisi'),
            TextColumn::make('rating'),
            TextColumn::make('tanggal'),
            
            
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
            'index' => Pages\ListKuesioners::route('/'),
            'edit' => Pages\EditKuesioner::route('/{record}/edit'),
        ];
    }    
}
