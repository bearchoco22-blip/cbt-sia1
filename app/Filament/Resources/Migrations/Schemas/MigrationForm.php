<?php

namespace App\Filament\Resources\Migrations\Schemas;

use Filament\Forms;
use Filament\Schemas\Schema;

class MigrationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Forms\Components\TextInput::make('migration')->required(),
            Forms\Components\TextInput::make('batch')->numeric()->required(),
        ]);
    }
}