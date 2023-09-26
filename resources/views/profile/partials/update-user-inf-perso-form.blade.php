<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information personnel') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Vous pouvez aussi modifier vos information personnel.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('PUT')

        <div>
            <x-input-label for="image" :value="__('Image')" />
            <x-text-input id="image" name="image" type="file" class="mt-1 block w-full" :value="old('image', $user->image)" required autofocus autocomplete="image" />
            <x-input-error class="mt-2" :messages="$errors->get('image')" />{{ $user->image }}
        </div>

        <div>
            <x-input-label for="phoneNumber" :value="__('Phone Numbere')" />
            <x-text-input id="phoneNumber" name="phoneNumber" type="number" class="mt-1 block w-full" :value="old('phoneNumber', $user->phoneNumber)" required autofocus autocomplete="phoneNumber" />
            <x-input-error class="mt-2" :messages="$errors->get('phoneNumber')" />
        </div>

        <div>
            <x-input-label for="adresse" :value="__('Adresse')" />
            <x-text-input id="adress" name="adress" type="text" class="mt-1 block w-full" :value="old('adress', $user->adress)" required autofocus autocomplete="adress" />
            <x-input-error class="mt-2" :messages="$errors->get('adress')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
