<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edytujesz dane firmy') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Zmieniasz firmę') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ __('Wypełnij wszystkie wymagane pola.') }}
                            </p>
                        </header>

                        <form method="post" action="{{ route('company.update', ['company' => $company->id]) }}" class="mt-6 space-y-6">
                            @csrf
                            @method('put')

                            <div>
                                <x-input-label for="name" :value="__('Nazwa firmy')" />
                                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $company->name)" autocomplete="name" />
                                <x-input-error :messages="$errors->updatePassword->get('name')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="address" :value="__('Adres firmy')" />
                                <x-textarea id="address" name="address" class="mt-1 block w-full">{{ old('name', $company->address) }}</x-textarea>
                                <x-input-error :messages="$errors->updatePassword->get('address')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="nip" :value="__('NIP')" />
                                <x-text-input id="nip" name="nip" type="text" class="mt-1 block w-full" :value="old('nip', $company->nip)" autocomplete="nip" />
                                <x-input-error :messages="$errors->updatePassword->get('nip')" class="mt-2" />
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ ('Zapisz') }}</x-primary-button>

                            </div>
                        </form>
                    </section>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
