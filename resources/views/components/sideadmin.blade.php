<!-- Sidebar -->
<aside class="w-64 bg-white shadow-lg p-6">
    <h2 class="text-2xl font-bold text-blue-800 mb-6 flex items-center">
        <img src="https://kelurahan-taman.madiunkota.go.id/wp-content/uploads/2017/03/300.png" class="h-6 w-6 mr-2 text-blue-800">
        Admin Panel
    </h2>

    <nav>
        <ul class="space-y-4">
            <li>
                <a href="{{ url('/') }}" class="flex items-center p-3 rounded-lg hover:bg-blue-100 {{ request()->is('/') ? 'bg-blue-200' : '' }}">
                    <svg class="w-5 h-5 mr-3 text-blue-700" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5"/>
                    </svg>
                    Back to Main
                </a>
            </li>
            <li>
                <a href="/admin" class="flex items-center p-3 rounded-lg hover:bg-blue-100 {{ request()->is('admin') ? 'bg-blue-200' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                    Menu Management
                </a>
            </li>
            <li>
                <a href="/admin/blog" class="flex items-center p-3 rounded-lg hover:bg-blue-100 {{ request()->is('admin/blog*') ? 'bg-blue-200' : '' }}">
                    <svg class="w-5 h-5 mr-3 text-blue-700"
                    xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5 5V0.221174C4.81709 0.315174 4.64812 0.437664 4.5 0.585786L0.585786 4.5C0.437664 4.64812 0.315174 4.81709 0.221174 5H5ZM7 5V0H14C15.1046 0 16 0.89543 16 2V2.1259C15.6282 2.04073 15.2472 1.99744 14.864 1.99744C14.1941 1.99744 13.5307 2.12976 12.9121 2.38682C12.2942 2.64357 11.7324 3.02035 11.2601 3.49429L11.2592 3.49515L4.61768 10.1367C4.19899 10.5553 3.91357 11.0886 3.79735 11.6692L3.05835 15.3612C2.86145 16.3449 3.16928 17.3619 3.87863 18.0712C4.58797 18.7806 5.60496 19.0885 6.58866 18.8917L10.2817 18.1527C10.862 18.0365 11.395 17.7513 11.8137 17.3329L16 13.1491V18C16 19.1046 15.1046 20 14 20H2C0.895431 20 0 19.1046 0 18V7H5C6.10457 7 7 6.10457 7 5Z" fill="#1D4ED8"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4469 6.08064C14.5791 6.02571 14.7208 5.99744 14.864 5.99744C15.0072 5.99744 15.1489 6.02571 15.2811 6.08064C15.4133 6.13557 15.5333 6.21607 15.6343 6.31752L15.6363 6.31946C15.7373 6.42041 15.8175 6.54029 15.8722 6.67224C15.9269 6.8042 15.955 6.94564 15.955 7.08848C15.955 7.23132 15.9269 7.37276 15.8722 7.50472C15.8175 7.63667 15.7372 7.75671 15.6361 7.85766L15.259 8.23455L13.7181 6.6931L14.0921 6.31909L14.0937 6.31752C14.1947 6.21607 14.3147 6.13557 14.4469 6.08064ZM12.3039 8.10731L7.66014 12.7511L7.27504 14.675L9.20011 14.2898L13.8444 9.64834L12.3039 8.10731ZM14.864 3.99744C14.4575 3.99744 14.0549 4.07774 13.6795 4.23373C13.3044 4.38957 12.9638 4.61788 12.6772 4.90558L12.6763 4.90644L6.03189 11.5509C5.89233 11.6904 5.79719 11.8682 5.75845 12.0617L5.01945 15.7537C4.95382 16.0816 5.05643 16.4206 5.29288 16.6571C5.52933 16.8935 5.86832 16.9962 6.19622 16.9305L9.88922 16.1915C10.0827 16.1528 10.2604 16.0578 10.3999 15.9183L17.0499 9.2723C17.3368 8.98563 17.5644 8.64524 17.7197 8.27057C17.8751 7.89582 17.955 7.49414 17.955 7.08848C17.955 6.68282 17.8751 6.28114 17.7197 5.90639C17.5648 5.5325 17.3378 5.19274 17.0517 4.90644C16.7648 4.61834 16.4239 4.38972 16.0485 4.23373C15.6731 4.07774 15.2705 3.99744 14.864 3.99744Z" fill="#1D4ED8"/>
                    </svg>
                    Blog Management
                </a>
            </li>
            <li>
                <a href="/admin/settings" class="flex items-center p-3 rounded-lg hover:bg-blue-100 {{ request()->is('admin/settings') ? 'bg-blue-200' : '' }}">
                    <svg class="w-5 h-5 mr-3 text-blue-700"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M21 13V11C21 10.7348 20.8946 10.4804 20.7071 10.2929C20.5196 10.1054 20.2652 10 20 10H19.243L18.536 8.293L19.071 7.757C19.2585 7.56947 19.3638 7.31516 19.3638 7.05C19.3638 6.78484 19.2585 6.53053 19.071 6.343L17.657 4.929C17.4695 4.74153 17.2152 4.63621 16.95 4.63621C16.6848 4.63621 16.4305 4.74153 16.243 4.929L15.707 5.464L14 4.757V4C14 3.73478 13.8946 3.48043 13.7071 3.29289C13.5196 3.10536 13.2652 3 13 3H11C10.7348 3 10.4804 3.10536 10.2929 3.29289C10.1054 3.48043 10 3.73478 10 4V4.757L8.293 5.464L7.757 4.929C7.56947 4.74153 7.31516 4.63621 7.05 4.63621C6.78484 4.63621 6.53053 4.74153 6.343 4.929L4.929 6.343C4.74153 6.53053 4.63621 6.78484 4.63621 7.05C4.63621 7.31516 4.74153 7.56947 4.929 7.757L5.465 8.293L4.757 10H4C3.73478 10 3.48043 10.1054 3.29289 10.2929C3.10536 10.4804 3 10.7348 3 11V13C3 13.2652 3.10536 13.5196 3.29289 13.7071C3.48043 13.8946 3.73478 14 4 14H4.757L5.464 15.707L4.929 16.243C4.74153 16.4305 4.63621 16.6848 4.63621 16.95C4.63621 17.2152 4.74153 17.4695 4.929 17.657L6.343 19.071C6.53053 19.2585 6.78484 19.3638 7.05 19.3638C7.31516 19.3638 7.56947 19.2585 7.757 19.071L8.293 18.536L10 19.243V20C10 20.2652 10.1054 20.5196 10.2929 20.7071C10.4804 20.8946 10.7348 21 11 21H13C13.2652 21 13.5196 20.8946 13.7071 20.7071C13.8946 20.5196 14 20.2652 14 20V19.243L15.707 18.535L16.243 19.071C16.4305 19.2585 16.6848 19.3638 16.95 19.3638C17.2152 19.3638 17.4695 19.2585 17.657 19.071L19.071 17.657C19.2585 17.4695 19.3638 17.2152 19.3638 16.95C19.3638 16.6848 19.2585 16.4305 19.071 16.243L18.536 15.707L19.243 14H20C20.2652 14 20.5196 13.8946 20.7071 13.7071C20.8946 13.5196 21 13.2652 21 13Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>               
                    Settings
                </a>
            </li>
        </ul>
    </nav>
</aside>
