<x-app-layout>

    <div class="flex">
		<nav class="sidebar sidebar-offcanvas" id="sidebar">
			<ul class="nav">
			<li class="nav-item active">
				<a class="nav-link" href="/home">
					<i class="fa-solid fa-border-all"></i>
					<span class="menu-title">Dashboard</span>
				</a>
			</li>
			<li class="nav-item nav-category">
				<a class="nav-link" href="/staff">
					<i class="fa-solid fa-users"></i>
					<span class="menu-title">Staff</span>
				</a>
			</li>
			</ul>
		</nav>
		<div class="side-content">
            <x-jet-authentication-card>
            <x-slot name="logo">

            </x-slot>

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div>
                    <x-jet-label for="name" value="{{ __('Name') }}" />
                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                </div>

                <div>
                    <x-jet-label for="staffType" value="{{ __('staffType') }}" />
                    <x-jet-input id="staffType" class="block mt-1 w-full" type="text" name="name" :value="old('staffType')" required autofocus autocomplete="name" />
                </div>


                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-jet-label for="terms">
                            <div class="flex items-center">
                                <x-jet-checkbox name="terms" id="terms"/>

                                <div class="ml-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-jet-label>
                    </div>
                @endif

                <div class="flex items-center justify-end mt-4">
                    <x-jet-button class="ml-4">
                        {{ __('Add Staff') }}
                    </x-jet-button>
                </div>
            </form>
        </x-jet-authentication-card>

		</div>
	</div>

</x-app-layout>
