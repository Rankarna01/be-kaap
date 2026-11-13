<?php

namespace App\Filament\Pages;

use App\Models\User;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Illuminate\Support\Facades\Hash;

class ManageUsers extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationGroup = 'Pengaturan Sistem';

    protected static ?string $navigationLabel = 'Manajemen Pengguna';

    protected static ?string $title = 'Manajemen Akun Administrator';

    protected static ?int $navigationSort = 3;

    protected static string $view = 'filament.pages.manage-users';

    public ?array $data = [];

    public function mount(): void
    {
        $user = auth()->user() ?? User::first();

        $this->form->fill([
            'name' => $user?->name,
            'email' => $user?->email,
        ]);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Profil Akun Administrator')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama Lengkap')
                            ->required(),
                        TextInput::make('email')
                            ->label('Alamat Email')
                            ->email()
                            ->required(),
                        TextInput::make('password')
                            ->label('Kata Sandi Baru (Kosongkan jika tidak diubah)')
                            ->password()
                            ->revealable()
                            ->dehydrated(fn ($state) => filled($state)),
                    ])->columns(2),
            ])
            ->statePath('data');
    }

    public function submit(): void
    {
        $state = $this->form->getState();
        $user = auth()->user() ?? User::first();

        if ($user) {
            $dataToUpdate = [
                'name' => $state['name'],
                'email' => $state['email'],
            ];

            if (!empty($state['password'])) {
                $dataToUpdate['password'] = Hash::make($state['password']);
            }

            $user->update($dataToUpdate);

            Notification::make()
                ->title('Akun administrator berhasil diperbarui')
                ->success()
                ->send();
        }
    }
}

