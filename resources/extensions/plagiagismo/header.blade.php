<li class="nav-item">
    <a class="nav-link {{ activeRoute('dashboard.user.openai.plagiarism.index') }}"
        href="{{ route('dashboard.user.openai.plagiarism.index') }}">
        <span class="nav-link-icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-progress-check" width="24"
                height="24" viewBox="0 0 24 24" stroke-width="1.5"  fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M10 20.777a8.942 8.942 0 0 1 -2.48 -.969" />
                <path d="M14 3.223a9.003 9.003 0 0 1 0 17.554" />
                <path d="M4.579 17.093a8.961 8.961 0 0 1 -1.227 -2.592" />
                <path d="M3.124 10.5c.16 -.95 .468 -1.85 .9 -2.675l.169 -.305" />
                <path d="M6.907 4.579a8.954 8.954 0 0 1 3.093 -1.356" />
                <path d="M9 12l2 2l4 -4" />
            </svg>

        </span>
        <span class="flex items-center transition-[opacity,transform] nav-link-title grow">
            {{ __('AI Plagiarism') }}
        </span>
        @if ($app_is_demo)
            <span
                class="lqd-nav-item-badge inline-flex items-center px-2 py-1 text-[0.75em] font-medium text-black rounded-md bg-[--lqd-pink]">{{ __('New') }}</span>
        @endif
    </a>
</li>

<li class="nav-item">
    <a class="nav-link {{ activeRoute('dashboard.user.openai.detectaicontent.index') }}"
        href="{{ route('dashboard.user.openai.detectaicontent.index') }}">
        <span class="nav-link-icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-text-scan-2" width="24"
                height="24" viewBox="0 0 24 24" stroke-width="1.5" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M4 8v-2a2 2 0 0 1 2 -2h2" />
                <path d="M4 16v2a2 2 0 0 0 2 2h2" />
                <path d="M16 4h2a2 2 0 0 1 2 2v2" />
                <path d="M16 20h2a2 2 0 0 0 2 -2v-2" />
                <path d="M8 12h8" />
                <path d="M8 9h6" />
                <path d="M8 15h4" />
            </svg>

        </span>
        <span class="flex items-center transition-[opacity,transform] nav-link-title grow">
            {{ __('AI Detector') }}
        </span>
        @if ($app_is_demo)
            <span
                class="lqd-nav-item-badge inline-flex items-center px-2 py-1 text-[0.75em] font-medium text-black rounded-md bg-[--lqd-pink]">{{ __('New') }}</span>
        @endif
    </a>
</li>
