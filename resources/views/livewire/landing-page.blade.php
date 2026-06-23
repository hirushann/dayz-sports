<div class="min-h-screen bg-background text-foreground">

    {{-- ===================== NAVBAR ===================== --}}
    <header class="sticky top-0 z-50 w-full border-b border-border/60 bg-background/70 backdrop-blur-xl">
        <div class="container mx-auto flex h-16 items-center justify-between gap-4 px-4 sm:px-6">
            <a href="#" class="flex items-center gap-2 font-display text-lg font-bold no-underline text-foreground">
                <span class="grid h-8 w-8 place-items-center rounded-lg bg-gradient-primary text-primary-foreground shadow-glow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                </span>
                <span class="tracking-tight">Dayz Sports</span>
            </a>

            <nav class="hidden items-center gap-7 lg:flex">
                @foreach([['Sports','#sports'],['Features','#features'],['API','#api'],['Use Cases','#use-cases'],['Pricing','#pricing'],['Contact','#contact']] as [$label,$href])
                <a href="{{ $href }}" class="text-sm text-muted-foreground transition-colors hover:text-foreground no-underline">{{ $label }}</a>
                @endforeach
            </nav>

            <div class="flex items-center gap-2">
                <a href="#api" class="hidden sm:inline-flex items-center gap-2 rounded-md border border-border/60 bg-transparent px-3 py-1.5 text-sm font-medium text-foreground transition-colors hover:bg-card no-underline">View Sample API</a>
                <a href="#contact" class="inline-flex items-center rounded-md bg-gradient-primary px-3 py-1.5 text-sm font-semibold text-primary-foreground shadow-glow transition-opacity hover:opacity-90 no-underline">Get API Access</a>
            </div>
        </div>
    </header>

    <main>
        {{-- ===================== HERO ===================== --}}
        <section class="relative overflow-hidden bg-gradient-hero">
            <div class="absolute inset-0 grid-pattern opacity-40 [mask-image:radial-gradient(ellipse_at_center,black_30%,transparent_75%)]"></div>
            <div class="absolute -top-32 left-1/2 h-[500px] w-[900px] -translate-x-1/2 rounded-full bg-primary/20 blur-[140px]"></div>

            <div class="container relative mx-auto px-4 py-20 sm:px-6 lg:py-28">
                <div class="grid gap-12 lg:grid-cols-[1.05fr_1fr] lg:gap-10 items-center">

                    {{-- Left col --}}
                    <div class="flex flex-col justify-center">
                        <div class="inline-flex w-fit items-center gap-2 rounded-full border border-primary/30 bg-primary/10 px-3 py-1 text-xs font-medium text-primary">
                            <span class="relative flex h-1.5 w-1.5">
                                <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-primary opacity-75"></span>
                                <span class="relative inline-flex h-1.5 w-1.5 rounded-full bg-primary"></span>
                            </span>
                            Live &amp; Historical Sports Data
                        </div>

                        <h1 class="mt-6 text-4xl font-bold leading-[1.05] tracking-tight sm:text-5xl lg:text-6xl">
                            Powerful Sports Data <span class="text-gradient-primary">APIs for Modern Apps</span>
                        </h1>

                        <p class="mt-6 max-w-xl text-base leading-relaxed text-muted-foreground sm:text-lg">
                            Access reliable sports data endpoints for football, basketball, Formula 1, MMA, rugby,
                            volleyball, and more — built for developers, platforms, and digital sports products.
                        </p>

                        <div class="mt-8 flex flex-wrap gap-3">
                            <a href="#contact" class="group inline-flex items-center gap-2 rounded-md bg-gradient-primary px-5 py-3 text-base font-semibold text-primary-foreground shadow-glow transition-opacity hover:opacity-90 no-underline">
                                Get API Access
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="transition-transform group-hover:translate-x-0.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                            </a>
                            <a href="#sports" class="inline-flex items-center rounded-md border border-primary/30 bg-primary/5 px-5 py-3 text-base font-semibold text-foreground transition-colors hover:border-primary/60 hover:bg-primary/10 no-underline">Explore Sports Coverage</a>
                        </div>

                        <div class="mt-10 flex flex-wrap items-center gap-x-8 gap-y-3 text-xs text-muted-foreground">
                            <div class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                                99.9% Uptime
                            </div>
                            <div class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                                Low-Latency JSON
                            </div>
                            <div class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                                Real-Time Updates
                            </div>
                        </div>
                    </div>

                    {{-- Right col: API dashboard --}}
                    <div class="relative">
                        <div class="absolute -inset-4 rounded-3xl bg-gradient-primary opacity-20 blur-2xl"></div>
                        <div class="relative glass-strong rounded-2xl p-4 shadow-card">
                            <div class="flex items-center justify-between border-b border-border/60 pb-3">
                                <div class="flex items-center gap-2">
                                    <div class="flex gap-1.5">
                                        <span class="h-2.5 w-2.5 rounded-full bg-destructive/70"></span>
                                        <span class="h-2.5 w-2.5 rounded-full" style="background:oklch(0.83 0.19 84/0.7)"></span>
                                        <span class="h-2.5 w-2.5 rounded-full bg-accent/70"></span>
                                    </div>
                                    <span class="ml-2 font-mono text-xs text-muted-foreground">dayzsports.console</span>
                                </div>
                                <div class="flex items-center gap-1.5 rounded-full bg-accent/10 px-2 py-0.5 text-[10px] font-medium text-accent">
                                    <span class="h-1.5 w-1.5 animate-pulse-dot rounded-full bg-accent"></span>
                                    API ONLINE
                                </div>
                            </div>

                            <div class="mt-4 grid gap-3 sm:grid-cols-2">
                                {{-- Match card: PL --}}
                                <div class="glass rounded-xl p-3">
                                    <div class="flex items-center justify-between text-[10px] uppercase tracking-wider text-muted-foreground">
                                        <span>Premier League</span><span class="text-primary">68'</span>
                                    </div>
                                    <div class="mt-2 flex items-baseline justify-between gap-2">
                                        <div class="text-sm font-semibold">
                                            <div>Man City</div>
                                            <div class="text-muted-foreground">Liverpool</div>
                                        </div>
                                        <div class="font-display text-xl font-bold tabular-nums">2 — 1</div>
                                    </div>
                                </div>
                                {{-- Match card: NBA --}}
                                <div class="glass rounded-xl p-3">
                                    <div class="flex items-center justify-between text-[10px] uppercase tracking-wider text-muted-foreground">
                                        <span>NBA</span><span class="text-accent">Q4 4:21</span>
                                    </div>
                                    <div class="mt-2 flex items-baseline justify-between gap-2">
                                        <div class="text-sm font-semibold">
                                            <div>Lakers</div>
                                            <div class="text-muted-foreground">Celtics</div>
                                        </div>
                                        <div class="font-display text-xl font-bold tabular-nums">92 — 88</div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3 grid grid-cols-3 gap-3">
                                @foreach([['Requests','1.2M','+12%'],['Avg latency','42ms','-8%'],['Sports','12+','live']] as [$l,$v,$t])
                                <div class="glass rounded-lg px-3 py-2">
                                    <div class="text-[10px] uppercase tracking-wider text-muted-foreground">{{ $l }}</div>
                                    <div class="mt-1 flex items-baseline justify-between gap-1">
                                        <span class="font-display text-base font-bold tabular-nums">{{ $v }}</span>
                                        <span class="text-[10px] text-accent">{{ $t }}</span>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                            <div class="mt-3 rounded-lg border border-border/60 bg-background/60 p-3 font-mono text-[11px] leading-relaxed">
                                <div class="flex items-center gap-2">
                                    <span class="rounded bg-accent/15 px-1.5 py-0.5 text-[10px] font-semibold text-accent">GET</span>
                                    <span class="truncate text-muted-foreground">/v1/football/matches/live</span>
                                </div>
                                <pre class="mt-2 overflow-hidden text-foreground/90" style="margin:0;">{
  "sport": "football",
  "status": "live",
  "match": { "score": "2-1", "minute": 68 }
}</pre>
                            </div>
                        </div>
                        <div class="absolute -right-4 -top-4 hidden h-16 w-16 animate-float items-center justify-center rounded-2xl glass-strong shadow-glow sm:flex">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="text-accent"><path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"/><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"/><path d="M4 22h16"/><path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"/><path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"/><path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"/></svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================== STATS BAR ===================== --}}
        <section class="border-y border-border/60 bg-background/40">
            <div class="container mx-auto grid grid-cols-2 gap-px overflow-hidden bg-border/60 px-0 sm:grid-cols-4">
                @foreach([
                    ['trophy',  '12+',            'Sports Covered'],
                    ['radio',   'Real-Time',       '& Historical Data'],
                    ['code',    'Developer-First', 'JSON APIs'],
                    ['server',  'Scalable',        'Built for Platforms'],
                ] as [$icon,$val,$label])
                <div class="flex items-center gap-3 bg-background px-5 py-6 sm:px-7">
                    <div class="grid h-10 w-10 shrink-0 place-items-center rounded-lg bg-primary/10 text-primary ring-1 ring-primary/20">
                        @if($icon === 'trophy')
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"/><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"/><path d="M4 22h16"/><path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"/><path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"/><path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"/></svg>
                        @elseif($icon === 'radio')
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4.9 19.1C1 15.2 1 8.8 4.9 4.9"/><path d="M7.8 16.2c-2.3-2.3-2.3-6.1 0-8.5"/><circle cx="12" cy="12" r="2"/><path d="M16.2 7.8c2.3 2.3 2.3 6.1 0 8.5"/><path d="M19.1 4.9C23 8.8 23 15.2 19.1 19.1"/></svg>
                        @elseif($icon === 'code')
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 16 4-4-4-4"/><path d="m6 8-4 4 4 4"/><path d="m14.5 4-5 16"/></svg>
                        @else
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="8" x="2" y="2" rx="2" ry="2"/><rect width="20" height="8" x="2" y="14" rx="2" ry="2"/><line x1="6" x2="6.01" y1="6" y2="6"/><line x1="6" x2="6.01" y1="18" y2="18"/></svg>
                        @endif
                    </div>
                    <div class="min-w-0">
                        <div class="font-display text-lg font-bold leading-tight">{{ $val }}</div>
                        <div class="truncate text-xs text-muted-foreground">{{ $label }}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>

        {{-- ===================== SPORTS COVERAGE ===================== --}}
        <section id="sports" class="relative py-24">
            <div class="container mx-auto px-4 sm:px-6">
                <div class="mx-auto max-w-2xl text-center">
                    <div class="inline-flex items-center gap-2 rounded-full border border-primary/30 bg-primary/10 px-3 py-1 text-[11px] font-medium uppercase tracking-wider text-primary">Sports Coverage</div>
                    <h2 class="mt-4 text-3xl font-bold tracking-tight sm:text-4xl">12+ sports through a single API platform</h2>
                    <p class="mt-4 text-base leading-relaxed text-muted-foreground">Structured endpoints for fixtures, scores, teams, standings, and statistics across every sport we cover.</p>
                </div>

                @php
                $sports = [
                    ['Football',   'M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22ZM12 2L8 14.5H16L12 2ZM12 14.5V17',  'Fixtures, teams, scores, standings, events, and stats.'],
                    ['AFL',        'trophy',        'Australian Football League fixtures, results, and ladders.'],
                    ['Baseball',   'circle-dot',    'MLB & league matches, player stats, and standings.'],
                    ['Basketball', 'dribbble',      'Global leagues, scores, rosters, and box scores.'],
                    ['Formula 1',  'flag',          'Races, qualifying, drivers, constructors, and lap data.'],
                    ['Handball',   'hand',          'Match schedules, scores, standings, and team stats.'],
                    ['Hockey',     'snowflake',     'Ice & field hockey fixtures, scores, and season data.'],
                    ['MMA',        'swords',        'Events, fighters, fight cards, results, and rankings.'],
                    ['NBA',        'dribbble',      'Live scores, schedules, players, and team analytics.'],
                    ['NFL & NCAA', 'shield',        'American football matchups, stats, and standings.'],
                    ['Rugby',      'trophy',        'Union & league fixtures, results, and team data.'],
                    ['Volleyball', 'volleyball',    'Indoor & beach matches, scores, and tournaments.'],
                ];
                @endphp

                <div class="mt-12 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                    @foreach($sports as [$name, $icon, $desc])
                    <div class="group relative overflow-hidden rounded-xl border border-border/60 bg-card/60 p-5 transition-all duration-300 hover:-translate-y-0.5 hover:border-primary/50 hover:shadow-glow">
                        <div class="pointer-events-none absolute inset-0 bg-gradient-to-br from-primary/0 to-accent/0 opacity-0 transition-opacity duration-300 group-hover:from-primary/5 group-hover:to-accent/5 group-hover:opacity-100"></div>
                        <div class="relative flex items-start gap-3">
                            <div class="grid h-10 w-10 shrink-0 place-items-center rounded-lg bg-primary/10 text-primary ring-1 ring-primary/20 transition-colors group-hover:bg-primary/15">
                                @php $si = $icon; @endphp
                                @if($si === 'trophy')
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"/><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"/><path d="M4 22h16"/><path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"/><path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"/><path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"/></svg>
                                @elseif($si === 'circle-dot')
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="1"/></svg>
                                @elseif($si === 'dribbble')
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M19.13 5.09C15.22 9.14 10 10.44 2.25 10.94"/><path d="M21.75 12.84c-6.62-1.41-12.14 1-16.38 6.32"/><path d="M8.56 2.75c4.37 6 6 9.42 8 17.72"/></svg>
                                @elseif($si === 'flag')
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"/><line x1="4" x2="4" y1="22" y2="15"/></svg>
                                @elseif($si === 'hand')
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 11V6a2 2 0 0 0-2-2v0a2 2 0 0 0-2 2v0"/><path d="M14 10V4a2 2 0 0 0-2-2v0a2 2 0 0 0-2 2v2"/><path d="M10 10.5V6a2 2 0 0 0-2-2v0a2 2 0 0 0-2 2v8"/><path d="M18 8a2 2 0 1 1 4 0v6a8 8 0 0 1-8 8h-2c-2.8 0-4.5-.86-5.99-2.34l-3.6-3.6a2 2 0 0 1 2.83-2.82L7 15"/></svg>
                                @elseif($si === 'snowflake')
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="2" x2="22" y1="12" y2="12"/><line x1="12" x2="12" y1="2" y2="22"/><path d="m20 16-4-4 4-4"/><path d="m4 8 4 4-4 4"/><path d="m16 4-4 4-4-4"/><path d="m8 20 4-4 4 4"/></svg>
                                @elseif($si === 'swords')
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="14.5 17.5 3 6 3 3 6 3 17.5 14.5"/><line x1="13" x2="19" y1="19" y2="13"/><line x1="16" x2="20" y1="16" y2="20"/><line x1="19" x2="21" y1="21" y2="19"/><polyline points="14.5 6.5 18 3 21 3 21 6 17.5 9.5"/><line x1="5" x2="9" y1="14" y2="18"/><line x1="7" x2="4" y1="17" y2="20"/><line x1="3" x2="5" y1="19" y2="21"/></svg>
                                @elseif($si === 'shield')
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"/><path d="M12 22V2"/></svg>
                                @else
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/><line x1="2" x2="22" y1="12" y2="12"/></svg>
                                @endif
                            </div>
                            <div class="min-w-0">
                                <h3 class="font-display text-base font-semibold">{{ $name }}</h3>
                                <p class="mt-1 text-xs leading-relaxed text-muted-foreground">{{ $desc }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- ===================== FEATURES ===================== --}}
        <section id="features" class="relative border-t border-border/60 bg-background/40 py-24">
            <div class="container mx-auto px-4 sm:px-6">
                <div class="mx-auto max-w-2xl text-center">
                    <div class="inline-flex items-center gap-2 rounded-full border border-primary/30 bg-primary/10 px-3 py-1 text-[11px] font-medium uppercase tracking-wider text-primary">API Features</div>
                    <h2 class="mt-4 text-3xl font-bold tracking-tight sm:text-4xl">Everything you need to ship sports products</h2>
                    <p class="mt-4 text-base leading-relaxed text-muted-foreground">A complete toolkit for live data, historical archives, and production-grade integrations.</p>
                </div>

                @php
                $features = [
                    ['radio',    'Live Scores & Match Updates',   'Real-time score updates and event feeds as matches unfold.'],
                    ['calendar', 'Fixtures & Schedules',          'Up-to-date schedules for leagues, tournaments, and events.'],
                    ['users',    'Teams, Players & Leagues',      'Structured team rosters, player profiles, and league metadata.'],
                    ['list',     'Standings & Rankings',          'Conference tables, ladders, and tournament rankings.'],
                    ['database', 'Historical Match Data',         'Deep historical archives for analytics and ML pipelines.'],
                    ['gauge',    'Fast JSON Responses',           'Low-latency endpoints engineered for production traffic.'],
                    ['key',      'Secure API Key Access',         'Authenticated requests with per-key scoping and limits.'],
                    ['plug',     'Easy Integration',              'Predictable REST endpoints that drop into any stack.'],
                ];
                @endphp

                <div class="mt-12 grid grid-cols-1 gap-px overflow-hidden rounded-2xl bg-border/60 sm:grid-cols-2 lg:grid-cols-4">
                    @foreach($features as [$ficon, $ftitle, $fdesc])
                    <div class="group relative bg-card/60 p-6 transition-colors hover:bg-card">
                        <div class="grid h-10 w-10 place-items-center rounded-lg bg-primary/10 text-primary ring-1 ring-primary/20 transition-all group-hover:bg-gradient-primary group-hover:text-primary-foreground group-hover:ring-0">
                            @if($ficon === 'radio')
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4.9 19.1C1 15.2 1 8.8 4.9 4.9"/><path d="M7.8 16.2c-2.3-2.3-2.3-6.1 0-8.5"/><circle cx="12" cy="12" r="2"/><path d="M16.2 7.8c2.3 2.3 2.3 6.1 0 8.5"/><path d="M19.1 4.9C23 8.8 23 15.2 19.1 19.1"/></svg>
                            @elseif($ficon === 'calendar')
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/></svg>
                            @elseif($ficon === 'users')
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                            @elseif($ficon === 'list')
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="10" x2="21" y1="6" y2="6"/><line x1="10" x2="21" y1="12" y2="12"/><line x1="10" x2="21" y1="18" y2="18"/><path d="M4 6h1v4"/><path d="M4 10h2"/><path d="M6 18H4c0-1 2-2 2-3s-1-1.5-2-1"/></svg>
                            @elseif($ficon === 'database')
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/></svg>
                            @elseif($ficon === 'gauge')
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 14 4-4"/><path d="M3.34 19a10 10 0 1 1 17.32 0"/></svg>
                            @elseif($ficon === 'key')
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 18v3c0 .6.4 1 1 1h4v-3h3v-3h2l1.4-1.4a6.5 6.5 0 1 0-4-4Z"/><circle cx="16.5" cy="7.5" r=".5"/></svg>
                            @else
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22v-5"/><path d="M9 8V2"/><path d="M15 8V2"/><path d="M18 8H6a2 2 0 0 0-2 2v3a6 6 0 0 0 12 0v-3a2 2 0 0 0-2-2Z"/></svg>
                            @endif
                        </div>
                        <h3 class="mt-4 font-display text-base font-semibold">{{ $ftitle }}</h3>
                        <p class="mt-2 text-sm leading-relaxed text-muted-foreground">{{ $fdesc }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- ===================== DEVELOPER PREVIEW ===================== --}}
        <section id="api" class="relative py-24">
            <div class="absolute inset-0 -z-10 grid-pattern opacity-30 [mask-image:radial-gradient(ellipse_at_center,black_20%,transparent_70%)]"></div>
            <div class="container mx-auto grid gap-12 px-4 sm:px-6 lg:grid-cols-2 lg:items-center">
                <div>
                    <div class="max-w-2xl">
                        <div class="inline-flex items-center gap-2 rounded-full border border-primary/30 bg-primary/10 px-3 py-1 text-[11px] font-medium uppercase tracking-wider text-primary">Developer Preview</div>
                        <h2 class="mt-4 text-3xl font-bold tracking-tight sm:text-4xl">Clean, predictable JSON your team will love</h2>
                        <p class="mt-4 text-base leading-relaxed text-muted-foreground">Consistent response shapes, sensible defaults, and stable versioning. Drop our SDK-friendly endpoints into your stack and start building in minutes.</p>
                    </div>
                    <div class="mt-8 flex flex-wrap gap-3">
                        <a href="#contact" class="group inline-flex items-center gap-2 rounded-md bg-gradient-primary px-5 py-3 text-base font-semibold text-primary-foreground shadow-glow transition-opacity hover:opacity-90 no-underline">
                            Get API Access
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="transition-transform group-hover:translate-x-0.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                        <a href="#api" class="inline-flex items-center rounded-md border border-primary/30 bg-primary/5 px-5 py-3 text-base font-semibold text-foreground transition-colors hover:border-primary/60 hover:bg-primary/10 no-underline">View Sample API</a>
                    </div>
                    <p class="mt-5 text-xs text-muted-foreground">Clean, predictable API responses designed for fast integration.</p>
                </div>

                <div class="relative">
                    <div class="absolute -inset-3 rounded-3xl bg-gradient-primary opacity-20 blur-2xl"></div>
                    <div class="relative overflow-hidden rounded-2xl border border-border/70 bg-card/80 shadow-card">
                        <div class="flex items-center justify-between border-b border-border/60 bg-background/60 px-4 py-2.5">
                            <div class="flex items-center gap-2 text-xs text-muted-foreground">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="4 17 10 11 4 5"/><line x1="12" x2="20" y1="19" y2="19"/></svg>
                                <span class="font-mono">api.dayzsports.com</span>
                            </div>
                            <button onclick="navigator.clipboard?.writeText('https://api.dayzsports.com/v1/football/matches/live')" class="flex items-center gap-1.5 rounded-md border border-border/60 px-2 py-1 text-[10px] text-muted-foreground transition-colors hover:text-foreground">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="14" height="14" x="8" y="8" rx="2" ry="2"/><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"/></svg>
                                Copy
                            </button>
                        </div>
                        <div class="px-4 pb-5 pt-4 font-mono text-[12.5px] leading-relaxed">
                            <div class="flex items-start gap-2">
                                <span class="mt-0.5 shrink-0 rounded bg-accent/15 px-1.5 py-0.5 text-[10px] font-semibold text-accent">GET</span>
                                <span class="break-all text-foreground">https://api.dayzsports.com/v1/football/matches/live</span>
                            </div>
                            <div class="mt-4 rounded-lg border border-border/60 bg-background/70 p-4 text-[12.5px]">
                                <pre style="margin:0; overflow-x:auto;"><code><span class="text-muted-foreground">{</span>
  <span class="text-primary">"sport"</span>: <span class="text-accent">"football"</span>,
  <span class="text-primary">"status"</span>: <span class="text-accent">"live"</span>,
  <span class="text-primary">"match"</span>: <span class="text-muted-foreground">{</span>
    <span class="text-primary">"home_team"</span>: <span class="text-accent">"Manchester City"</span>,
    <span class="text-primary">"away_team"</span>: <span class="text-accent">"Liverpool"</span>,
    <span class="text-primary">"score"</span>: <span class="text-accent">"2-1"</span>,
    <span class="text-primary">"minute"</span>: <span style="color:oklch(0.83 0.19 84)">68</span>
  <span class="text-muted-foreground">}</span>
<span class="text-muted-foreground">}</span></code></pre>
                            </div>
                            <div class="mt-3 flex items-center gap-2 text-[11px] text-muted-foreground">
                                <span class="flex h-1.5 w-1.5 animate-pulse-dot rounded-full bg-accent"></span>
                                200 OK · 42ms · application/json
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================== USE CASES ===================== --}}
        <section id="use-cases" class="border-t border-border/60 bg-background/40 py-24">
            <div class="container mx-auto px-4 sm:px-6">
                <div class="mx-auto max-w-2xl text-center">
                    <div class="inline-flex items-center gap-2 rounded-full border border-primary/30 bg-primary/10 px-3 py-1 text-[11px] font-medium uppercase tracking-wider text-primary">Use Cases</div>
                    <h2 class="mt-4 text-3xl font-bold tracking-tight sm:text-4xl">Built for the products powering modern sports</h2>
                    <p class="mt-4 text-base leading-relaxed text-muted-foreground">From betting platforms to fantasy products and media dashboards, teams ship faster with Dayz Sports.</p>
                </div>
                <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
                    @foreach([
                        ['Sports Apps',                  'Power mobile and web apps with live scores, fixtures, and team data.',             'M12 18H.375a.375.375 0 0 1-.375-.375v-12a.375.375 0 0 1 .375-.375H12'],
                        ['Betting & Odds Platforms',     'Drive real-time markets with low-latency match and event feeds.',                  'trending-up'],
                        ['Fantasy Sports Products',      'Build fantasy leagues with player stats, rosters, and historical performance.',    'joystick'],
                        ['Media & Analytics Dashboards', 'Fuel editorial coverage, analytics, and data storytelling at scale.',             'bar-chart'],
                    ] as [$ctitle, $cdesc, $cicon])
                    <div class="group relative overflow-hidden rounded-2xl border border-border/60 bg-card/60 p-6 transition-all hover:-translate-y-0.5 hover:border-primary/50 hover:shadow-glow">
                        <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-primary/60 to-transparent opacity-0 transition-opacity group-hover:opacity-100"></div>
                        <div class="grid h-11 w-11 place-items-center rounded-xl bg-gradient-primary text-primary-foreground shadow-glow">
                            @if($cicon === 'trending-up')
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg>
                            @elseif($cicon === 'joystick')
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 17a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-2Z"/><path d="M12 15V9"/><path d="M8 9h8"/><circle cx="12" cy="6" r="3"/></svg>
                            @elseif($cicon === 'bar-chart')
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><path d="M18 17V9"/><path d="M13 17V5"/><path d="M8 17v-3"/></svg>
                            @else
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="14" height="20" x="5" y="2" rx="2" ry="2"/><path d="M12 18h.01"/></svg>
                            @endif
                        </div>
                        <h3 class="mt-5 font-display text-lg font-semibold">{{ $ctitle }}</h3>
                        <p class="mt-2 text-sm leading-relaxed text-muted-foreground">{{ $cdesc }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- ===================== WHY CHOOSE ===================== --}}
        <section id="why-choose" class="relative py-24">
            <div class="container mx-auto grid gap-12 px-4 sm:px-6 lg:grid-cols-2 lg:items-center">
                <div>
                    <div class="max-w-2xl">
                        <div class="inline-flex items-center gap-2 rounded-full border border-primary/30 bg-primary/10 px-3 py-1 text-[11px] font-medium uppercase tracking-wider text-primary">Why Dayz Sports</div>
                        <h2 class="mt-4 text-3xl font-bold tracking-tight sm:text-4xl">A commercial-grade data backbone for sports products</h2>
                        <p class="mt-4 text-base leading-relaxed text-muted-foreground">One reliable platform for every sport you cover — engineered for speed, scale, and developer experience.</p>
                    </div>
                    <ul class="mt-8 space-y-3">
                        @foreach([
                            'Multi-sport data from one API platform',
                            'Simple developer-first integration',
                            'Scalable infrastructure for growing products',
                            'Designed for web apps, mobile apps, and dashboards',
                            'Clear API documentation coming soon',
                        ] as $benefit)
                        <li class="flex items-start gap-3">
                            <span class="mt-0.5 grid h-5 w-5 shrink-0 place-items-center rounded-full bg-gradient-primary text-primary-foreground">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            </span>
                            <span class="text-sm text-foreground/90">{{ $benefit }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="relative">
                    <div class="absolute -inset-6 rounded-[2rem] bg-gradient-primary opacity-15 blur-3xl"></div>
                    <div class="relative grid gap-4 sm:grid-cols-2">
                        @foreach([['Avg latency','42ms','P95 globally'],['Uptime SLA','99.9%','Production-ready'],['Sports covered','12+','From one API'],['Endpoints','120+','Across categories']] as [$ml,$mv,$ms])
                        <div class="glass-strong rounded-2xl p-5 shadow-card">
                            <div class="text-[11px] uppercase tracking-wider text-muted-foreground">{{ $ml }}</div>
                            <div class="mt-2 font-display text-3xl font-bold tabular-nums text-gradient-primary">{{ $mv }}</div>
                            <div class="mt-1 text-xs text-muted-foreground">{{ $ms }}</div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================== PRICING ===================== --}}
        <section id="pricing" class="border-t border-border/60 bg-background/40 py-24">
            <div class="container mx-auto px-4 sm:px-6">
                <div class="mx-auto max-w-2xl text-center">
                    <div class="inline-flex items-center gap-2 rounded-full border border-primary/30 bg-primary/10 px-3 py-1 text-[11px] font-medium uppercase tracking-wider text-primary">Simple Pricing</div>
                    <h2 class="mt-4 text-3xl font-bold tracking-tight sm:text-4xl">Transparent plans for every scale</h2>
                    <p class="mt-4 text-base leading-relaxed text-muted-foreground">Choose the plan that fits your integration. Upgrade anytime as your platform grows.</p>
                </div>

                <div class="mt-12 grid gap-6 lg:grid-cols-3 lg:items-center">
                    {{-- Basic API --}}
                    <div class="relative flex flex-col rounded-3xl border border-border/60 bg-card/60 p-8 shadow-sm transition-all hover:border-primary/30 hover:shadow-glow">
                        <div class="mb-4">
                            <h3 class="font-display text-xl font-bold">Basic API</h3>
                            <p class="mt-2 text-sm text-muted-foreground">Perfect for side projects and local apps.</p>
                        </div>
                        <div class="mb-6 flex items-baseline text-foreground">
                            <span class="font-display text-4xl font-extrabold tracking-tight">$29</span>
                            <span class="ml-1 text-sm font-medium text-muted-foreground">/mo</span>
                        </div>
                        <ul class="mb-8 flex-1 space-y-4 text-sm text-muted-foreground">
                            <li class="flex items-start gap-3">
                                <svg class="h-5 w-5 shrink-0 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                                <span>Access to 5 major sports leagues</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="h-5 w-5 shrink-0 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                                <span>Daily data updates</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="h-5 w-5 shrink-0 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                                <span>10,000 API requests / month</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="h-5 w-5 shrink-0 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                                <span>Standard email support</span>
                            </li>
                        </ul>
                        <a href="#contact" class="inline-flex w-full items-center justify-center rounded-lg border border-primary/30 bg-primary/5 px-4 py-2.5 text-sm font-semibold text-foreground transition-colors hover:bg-primary/10 no-underline">
                            Get Started
                        </a>
                    </div>

                    {{-- Pro API (Highlighted) --}}
                    <div class="relative flex flex-col rounded-3xl border-2 border-primary bg-card p-8 shadow-glow lg:scale-105 lg:z-10">
                        <div class="absolute -top-4 left-0 right-0 mx-auto w-fit rounded-full bg-gradient-primary px-3 py-1 text-[10px] font-bold uppercase tracking-wider text-primary-foreground shadow-sm">
                            Most Popular
                        </div>
                        <div class="mb-4">
                            <h3 class="font-display text-xl font-bold">Pro API</h3>
                            <p class="mt-2 text-sm text-muted-foreground">Ideal for live score apps and growing platforms.</p>
                        </div>
                        <div class="mb-6 flex items-baseline text-foreground">
                            <span class="font-display text-4xl font-extrabold tracking-tight">$99</span>
                            <span class="ml-1 text-sm font-medium text-muted-foreground">/mo</span>
                        </div>
                        <ul class="mb-8 flex-1 space-y-4 text-sm text-foreground/90">
                            <li class="flex items-start gap-3">
                                <svg class="h-5 w-5 shrink-0 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                                <span>All 50+ global sports leagues</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="h-5 w-5 shrink-0 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                                <span>Real-time live scores & stats</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="h-5 w-5 shrink-0 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                                <span>500,000 API requests / month</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="h-5 w-5 shrink-0 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                                <span>Historical data access (5 years)</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="h-5 w-5 shrink-0 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                                <span>Priority 24/7 support</span>
                            </li>
                        </ul>
                        <a href="#contact" class="inline-flex w-full items-center justify-center rounded-lg bg-gradient-primary px-4 py-2.5 text-sm font-semibold text-primary-foreground shadow-glow transition-opacity hover:opacity-90 no-underline">
                            Start Free Trial
                        </a>
                    </div>

                    {{-- Enterprise --}}
                    <div class="relative flex flex-col rounded-3xl border border-border/60 bg-card/60 p-8 shadow-sm transition-all hover:border-primary/30 hover:shadow-glow">
                        <div class="mb-4">
                            <h3 class="font-display text-xl font-bold">Enterprise</h3>
                            <p class="mt-2 text-sm text-muted-foreground">For large scale betting & media platforms.</p>
                        </div>
                        <div class="mb-6 flex items-baseline text-foreground">
                            <span class="font-display text-4xl font-extrabold tracking-tight">$499</span>
                            <span class="ml-1 text-sm font-medium text-muted-foreground">/mo</span>
                        </div>
                        <ul class="mb-8 flex-1 space-y-4 text-sm text-muted-foreground">
                            <li class="flex items-start gap-3">
                                <svg class="h-5 w-5 shrink-0 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                                <span>Unlimited API requests</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="h-5 w-5 shrink-0 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                                <span>WebSocket & Webhook streams</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="h-5 w-5 shrink-0 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                                <span>Historical data (10+ years)</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="h-5 w-5 shrink-0 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                                <span>Dedicated Account Manager</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="h-5 w-5 shrink-0 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                                <span>Custom Integrations & SLA</span>
                            </li>
                        </ul>
                        <a href="#contact" class="inline-flex w-full items-center justify-center rounded-lg border border-primary/30 bg-primary/5 px-4 py-2.5 text-sm font-semibold text-foreground transition-colors hover:bg-primary/10 no-underline">
                            Contact Sales
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================== CONTACT ===================== --}}
        <section id="contact" class="relative py-24">
            <div class="container mx-auto px-4 sm:px-6">
                <div class="relative overflow-hidden rounded-3xl border border-primary/30 bg-card/60 px-6 py-16 shadow-glow sm:px-12 lg:px-16">
                    <div class="absolute inset-0 -z-10 bg-gradient-hero"></div>
                    <div class="absolute inset-0 -z-10 grid-pattern opacity-30 [mask-image:radial-gradient(ellipse_at_center,black_20%,transparent_70%)]"></div>
                    <div class="absolute -top-24 left-1/2 -z-10 h-64 w-[600px] -translate-x-1/2 rounded-full bg-primary/30 blur-[120px]"></div>

                    <div class="grid gap-12 lg:grid-cols-2 lg:items-center">
                        <div>
                            <h2 class="text-3xl font-bold tracking-tight sm:text-4xl">
                                Ready to build with <span class="text-gradient-primary">Dayz Sports?</span>
                            </h2>
                            <p class="mt-4 text-base text-muted-foreground">
                                Have questions about our APIs, pricing, or custom enterprise solutions? Fill out the form and our team will get back to you shortly.
                            </p>
                            
                            <div class="mt-8 space-y-4">
                                <div class="flex items-center gap-3">
                                    <div class="grid h-10 w-10 shrink-0 place-items-center rounded-lg bg-primary/10 text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                                    </div>
                                    <span class="text-sm font-medium text-foreground">+1 (800) 123-4567</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="grid h-10 w-10 shrink-0 place-items-center rounded-lg bg-primary/10 text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                                    </div>
                                    <span class="text-sm font-medium text-foreground">sales@dayzsports.com</span>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-2xl border border-border/60 bg-background/50 p-6 backdrop-blur-sm sm:p-8">
                            @if($formSubmitted)
                                <div class="text-center py-8">
                                    <div class="mx-auto mb-4 flex h-12 w-12 items-center justify-center rounded-full bg-green-500/20 text-green-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                    </div>
                                    <h3 class="text-xl font-semibold text-foreground">Message Sent!</h3>
                                    <p class="mt-2 text-sm text-muted-foreground">Thanks for reaching out. We'll be in touch soon.</p>
                                    <button wire:click="$set('formSubmitted', false)" class="mt-6 text-sm font-medium text-primary hover:text-primary/80">
                                        Send another message
                                    </button>
                                </div>
                            @else
                                <form wire:submit.prevent="submitContactForm" class="space-y-4">
                                    <div>
                                        <label for="name" class="mb-1.5 block text-sm font-medium text-foreground">Name</label>
                                        <input wire:model="name" type="text" id="name" class="w-full rounded-md border border-border/60 bg-background/50 px-3 py-2 text-sm text-foreground placeholder:text-muted-foreground focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary" placeholder="John Doe">
                                        @error('name') <span class="mt-1 block text-xs text-destructive">{{ $message }}</span> @enderror
                                    </div>
                                    
                                    <div>
                                        <label for="email" class="mb-1.5 block text-sm font-medium text-foreground">Email Address</label>
                                        <input wire:model="email" type="email" id="email" class="w-full rounded-md border border-border/60 bg-background/50 px-3 py-2 text-sm text-foreground placeholder:text-muted-foreground focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary" placeholder="john@example.com">
                                        @error('email') <span class="mt-1 block text-xs text-destructive">{{ $message }}</span> @enderror
                                    </div>
                                    
                                    <div>
                                        <label for="message" class="mb-1.5 block text-sm font-medium text-foreground">Message</label>
                                        <textarea wire:model="message" id="message" rows="4" class="w-full rounded-md border border-border/60 bg-background/50 px-3 py-2 text-sm text-foreground placeholder:text-muted-foreground focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary" placeholder="How can we help you?"></textarea>
                                        @error('message') <span class="mt-1 block text-xs text-destructive">{{ $message }}</span> @enderror
                                    </div>
                                    
                                    <button type="submit" class="inline-flex w-full items-center justify-center gap-2 rounded-md bg-gradient-primary px-4 py-2.5 text-sm font-semibold text-primary-foreground shadow-glow transition-opacity hover:opacity-90">
                                        <span wire:loading.remove wire:target="submitContactForm">Send Message</span>
                                        <span wire:loading wire:target="submitContactForm">Sending...</span>
                                        <svg wire:loading.remove wire:target="submitContactForm" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                                    </button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    {{-- ===================== FOOTER ===================== --}}
    <footer class="border-t border-border/60 bg-background/60">
        <div class="container mx-auto grid gap-10 px-4 py-14 sm:px-6 md:grid-cols-[1.2fr_1fr]">
            <div>
                <div class="flex items-center gap-2 font-display text-lg font-bold">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-gradient-primary text-primary-foreground shadow-glow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                    </span>
                    Dayz Sports
                </div>
                <p class="mt-3 max-w-sm text-sm text-muted-foreground">
                    Sports Data API Platform — reliable live and historical data endpoints across every major sport.
                </p>
            </div>
            <div class="grid grid-cols-2 gap-4 sm:grid-cols-3">
                @foreach([
                    ['Sports Coverage',   '#sports',  null],
                    ['API Documentation', '#',        'Coming soon'],
                    ['Pricing',           '#pricing', null],
                    ['Contact',           '#contact', null],
                    ['Privacy Policy',    '#',        null],
                ] as [$fl, $fh, $fn])
                <a href="{{ $fh }}" class="text-sm text-muted-foreground transition-colors hover:text-foreground no-underline">
                    {{ $fl }}
                    @if($fn)
                    <span class="ml-1 rounded bg-primary/10 px-1.5 py-0.5 text-[10px] font-medium text-primary">{{ $fn }}</span>
                    @endif
                </a>
                @endforeach
            </div>
        </div>
        <div class="border-t border-border/60 py-5 text-center text-xs text-muted-foreground">
            &copy; {{ date('Y') }} Dayz Sports. All rights reserved.
        </div>
    </footer>

</div>
