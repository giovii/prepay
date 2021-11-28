<nav class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
    <div class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
        <button class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" type="button" onclick="toggleNavbar('example-collapse-sidebar')">
            <i class="fas fa-bars"></i>
        </button>
        <a class="md:block text-left md:pb-2 text-blueGray-700 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0" href="{{ route('admin.home') }}">
            {{ trans('panel.site_title') }}
        </a>
        <div class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden" id="example-collapse-sidebar">
            <div class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-blueGray-300">
                <div class="flex flex-wrap">
                    <div class="w-6/12">
                        <a class="md:block text-left md:pb-2 text-blueGray-700 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0" href="{{ route('admin.home') }}">
                            {{ trans('panel.site_title') }}
                        </a>
                    </div>
                    <div class="w-6/12 flex justify-end">
                        <button type="button" class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" onclick="toggleNavbar('example-collapse-sidebar')">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>



            <!-- Divider -->
            <div class="flex md:hidden">
                @if(file_exists(app_path('Http/Livewire/LanguageSwitcher.php')))
                    <livewire:language-switcher />
                @endif
            </div>
            <hr class="mb-6 md:min-w-full" />
            <!-- Heading -->

            <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                <li class="items-center">
                    <a href="{{ route("admin.home") }}" class="{{ request()->is("admin") ? "sidebar-nav-active" : "sidebar-nav" }}">
                        <i class="fas fa-tv"></i>
                        {{ trans('global.dashboard') }}
                    </a>
                </li>

                @can('user_management_access')
                    <li class="items-center">
                        <a class="has-sub {{ request()->is("admin/permissions*")||request()->is("admin/roles*")||request()->is("admin/users*")||request()->is("admin/transactions*")||request()->is("admin/wallets*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="#" onclick="window.openSubNav(this)">
                            <i class="fa-fw fas c-sidebar-nav-icon fa-users">
                            </i>
                            {{ trans('cruds.userManagement.title') }}
                        </a>
                        <ul class="ml-4 subnav hidden">
                            @can('permission_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/permissions*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.permissions.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-unlock-alt">
                                        </i>
                                        {{ trans('cruds.permission.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('role_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/roles*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.roles.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-briefcase">
                                        </i>
                                        {{ trans('cruds.role.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('user_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/users*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.users.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-user">
                                        </i>
                                        {{ trans('cruds.user.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('transaction_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/transactions*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.transactions.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-money-check-alt">
                                        </i>
                                        {{ trans('cruds.transaction.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('wallet_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/wallets*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.wallets.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-wallet">
                                        </i>
                                        {{ trans('cruds.wallet.title') }}
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('product_management_access')
                    <li class="items-center">
                        <a class="has-sub {{ request()->is("admin/product-categories*")||request()->is("admin/product-tags*")||request()->is("admin/products*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="#" onclick="window.openSubNav(this)">
                            <i class="fa-fw fas c-sidebar-nav-icon fa-shopping-cart">
                            </i>
                            {{ trans('cruds.productManagement.title') }}
                        </a>
                        <ul class="ml-4 subnav hidden">
                            @can('product_category_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/product-categories*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.product-categories.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-folder">
                                        </i>
                                        {{ trans('cruds.productCategory.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('product_tag_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/product-tags*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.product-tags.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-folder">
                                        </i>
                                        {{ trans('cruds.productTag.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('product_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/products*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.products.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-shopping-cart">
                                        </i>
                                        {{ trans('cruds.product.title') }}
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('faq_management_access')
                    <li class="items-center">
                        <a class="has-sub {{ request()->is("admin/faq-categories*")||request()->is("admin/faq-questions*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="#" onclick="window.openSubNav(this)">
                            <i class="fa-fw fas c-sidebar-nav-icon fa-question">
                            </i>
                            {{ trans('cruds.faqManagement.title') }}
                        </a>
                        <ul class="ml-4 subnav hidden">
                            @can('faq_category_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/faq-categories*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.faq-categories.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-briefcase">
                                        </i>
                                        {{ trans('cruds.faqCategory.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('faq_question_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/faq-questions*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.faq-questions.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-question">
                                        </i>
                                        {{ trans('cruds.faqQuestion.title') }}
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('smart_wallet_access')
                    <li class="items-center">
                        <a class="has-sub {{ request()->is("admin/manual-bonus*")||request()->is("admin/extra-bonus*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="#" onclick="window.openSubNav(this)">
                            <i class="fa-fw fas c-sidebar-nav-icon fa-wallet">
                            </i>
                            {{ trans('cruds.smartWallet.title') }}
                        </a>
                        <ul class="ml-4 subnav hidden">
                            @can('manual_bonu_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/manual-bonus*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.manual-bonus.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.manualBonu.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('extra_bonu_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/extra-bonus*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.extra-bonus.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-external-link-square-alt">
                                        </i>
                                        {{ trans('cruds.extraBonu.title') }}
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('ambassador_access')
                    <li class="items-center">
                        <a class="{{ request()->is("admin/ambassadors*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.ambassadors.index") }}">
                            <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                            </i>
                            {{ trans('cruds.ambassador.title') }}
                        </a>
                    </li>
                @endcan
                @can('advisor_access')
                    <li class="items-center">
                        <a class="{{ request()->is("admin/advisors*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.advisors.index") }}">
                            <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                            </i>
                            {{ trans('cruds.advisor.title') }}
                        </a>
                    </li>
                @endcan

                @if(file_exists(app_path('Http/Controllers/Auth/UserProfileController.php')))
                    @can('auth_profile_edit')
                        <li class="items-center">
                            <a href="{{ route("profile.show") }}" class="{{ request()->is("profile") ? "sidebar-nav-active" : "sidebar-nav" }}">
                                <i class="fa-fw c-sidebar-nav-icon fas fa-user-circle"></i>
                                {{ trans('global.my_profile') }}
                            </a>
                        </li>
                    @endcan
                @endif

                <li class="items-center">
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();" class="sidebar-nav">
                        <i class="fa-fw fas fa-sign-out-alt"></i>
                        {{ trans('global.logout') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>