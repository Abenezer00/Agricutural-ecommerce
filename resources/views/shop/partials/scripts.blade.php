<script defer>
    document.addEventListener('alpine:init', () => {
        Alpine.data('alpineShop', () => ({
            isCategorySidebar: false,
            isMobileAccountSidebar: false,
            isCartOpen: false,
            isSearchOpen: false,
            isCatergoryFilterSidebarOpen: false,
            isCategorySortDropdownOpen: false,
            isCategorySortActive: "",

            toggleCart() {
                this.isCartOpen = !this.isCartOpen;
            },
        }))
    })
</script>


@if (isset($lowerScripts))
    {!! $lowerScripts !!}
@endif
