<div class="cover-fold  bg-5">
    @include('page::shared.nav')
    <header class="{{ $class_name or " main " }}" data-aos="fade-up">
        <section class="cover">
            <div class="layout-table">
                <div class="layout-row">
                    <div class="logo">

                        @if(config('pakgekit.branding') && config('pakgekit.brand.logo'))
                        <img src="/img/{{ config('pagekit.brand.logo' )}}" title="{{ config('pagekit.company_name') }}" />                        @endif

                        <h1 class="oswald" style="font-family: Oswald">ENGAGE.EDUCATE.EMPOWER.</h1>

                        <p class="lead text-uppercase oswald"> Building Tomorrows Workforce </p>

                    </div>
                </div>
            </div>
        </section>
    </header>
</div>
