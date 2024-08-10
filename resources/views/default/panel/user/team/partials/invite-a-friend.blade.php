<div class="flex flex-wrap justify-between gap-y-5">
    <x-card class="lqd-team-invite-instruction w-full lg:w-[48%]">
        <h2 class="mb-4">
            @lang('How it Works')
        </h2>
        <p>
            @lang('Adding and overseeing team members is a straightforward process. Here\'s a quick example to initiate collaboration within seconds.')
        </p>

        <hr class="my-8">

        <ol class="mb-12 flex flex-col gap-6 text-heading-foreground">
            <li>
                <span class="size-7 me-2 inline-flex items-center justify-center rounded-full bg-primary/10 font-extrabold text-primary">
                    1
                </span>
                @lang('Envie um <strong>link de convite</strong> para os membros de sua equipe')
            </li>
            <li>
                <span class="size-7 me-2 inline-flex items-center justify-center rounded-full bg-primary/10 font-extrabold text-primary">
                    2
                </span>
                @lang('<strong>Eles devem se registrar</strong> com email')
            </li>
            <li>
                <span class="size-7 me-2 inline-flex items-center justify-center rounded-full bg-primary/10 font-extrabold text-primary">
                    3
                </span>
                @lang('Assim que <strong>eles confirmarem sua conta</strong> eles serão adicionados a sua equipe.')
            </li>
        </ol>
    </x-card>

    <x-card class="lqd-team-invite-form w-full lg:w-[48%]">
        <figure class="mb-7">
            <img
                class="mx-auto w-full lg:w-7/12"
                src="{{ custom_theme_url('assets/img/team/team.png') }}"
                alt="Team"
            >
        </figure>
        <p class="mb-6 text-center text-xl font-semibold">
            @lang('Adicione o email do membro<br>para enviar o convite.')
            ðŸ“§
        </p>
        <form
            class="flex flex-col gap-3"
            action="{{ route('dashboard.user.team.invitation.store', $team->id) }}"
            method="post"
        >
            @csrf
            <input
                type="hidden"
                name="team_id"
                value="{{ $team?->id }}"
            >
            <x-forms.input
                id="email"
                size="lg"
                type="email"
                name="email"
                placeholder="{{ __('Email address') }}"
                required
            >
                <x-slot:icon>
                    <x-tabler-mail class="size-4 size-5 absolute end-3 top-1/2 -translate-y-1/2" />
                </x-slot:icon>
            </x-forms.input>
            @if ($app_is_demo)
                <x-button onclick="return toastr.info('This feature is disabled in Demo version.')">
                    @lang('Invite Friends')
                </x-button>
            @else
                <x-button type="submit">
                    @lang('Invite Friends')
                </x-button>
            @endif
        </form>
    </x-card>
</div>
