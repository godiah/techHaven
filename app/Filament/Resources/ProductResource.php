<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make('Product Information')->schema([
                        TextInput::make('name')
                            ->label('Name')
                            ->required()
                            ->placeholder('Enter the product name')
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (string $operation, $state, Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),

                        TextInput::make('slug')
                            ->label('Slug')
                            ->disabled()
                            ->required()
                            ->dehydrated()
                            ->unique(Product::class, 'slug', ignoreRecord: true)
                            ->maxLength(255),

                        TextInput::make('short_description')
                            ->label('Short Description')
                            ->placeholder('Provide a brief description of the product [Maximum of 50 Characters]')
                            ->columnSpanFull()
                            ->maxLength(50),

                        MarkdownEditor::make('description')
                            ->label('Description')
                            ->placeholder('Provide a description of the product.')
                            ->columnSpanFull()
                            ->fileAttachmentsDirectory('products'),
                    ])->columns(2),

                    Section::make('Product Images')->schema([
                        FileUpload::make('featured_image')
                            ->label('Featured Image')
                            ->image()
                            ->required()
                            ->directory('products'),
                        
                        FileUpload::make('images')
                            ->label('Other Images')
                            ->image()
                            ->multiple()
                            ->maxFiles(5)
                            ->reorderable()
                            ->directory('products'),
                    ])->columns(2),
                ])->columnSpan(2),

                Group::make()->schema([
                    Section::make('Pricing')->schema([
                        TextInput::make('price')
                            ->label('Price')
                            ->required()
                            ->numeric()
                            ->prefix('Ksh.'),
                    ]),

                    Section::make('Associations')->schema([
                        Select::make('category_id')
                            ->label('Category')
                            ->searchable()
                            ->preload()
                            ->relationship('category', 'name')
                            ->required(),

                        Select::make('brand_id')
                            ->label('Brand')
                            ->searchable()
                            ->preload()
                            ->relationship('brand', 'name')
                            ->required(),
                    ]),

                    Section::make('Status')->schema([
                        Toggle::make('in_stock')
                            ->label('In Stock')
                            ->required()
                            ->default(true),

                        Toggle::make('is_active')
                            ->label('Is Active')
                            ->required()
                            ->default(true),

                        Toggle::make('is_featured')
                            ->label('Is Featured')
                            ->required()
                            ->default(false),                        

                        Toggle::make('on_sale')
                            ->label('On Sale')
                            ->required()
                            ->default(false),

                        Toggle::make('is_new_arrival')
                            ->label('Is New Arrival')
                            ->required()
                            ->default(false),
                    ]),
                ])->columnSpan(1),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([                            
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('category.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('brand.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('price')
                    ->money('Ksh.')
                    ->sortable(),
                Tables\Columns\ImageColumn::make('featured_image')
                    ->alignCenter(),
                Tables\Columns\IconColumn::make('is_active')
                    ->alignCenter()
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_featured')
                    ->alignCenter()
                    ->boolean(),
                Tables\Columns\IconColumn::make('in_stock')
                    ->alignCenter()     
                    ->boolean(),
                Tables\Columns\IconColumn::make('on_sale')
                    ->alignCenter()
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_new_arrival')
                    ->alignCenter()
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('category')
                    ->label('Category')
                    ->relationship('category', 'name'),
                
                SelectFilter::make('brand')
                    ->label('Brand')
                    ->relationship('brand', 'name'),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
            'view' => Pages\ViewProduct::route('/{record}'),
        ];
    }
}
