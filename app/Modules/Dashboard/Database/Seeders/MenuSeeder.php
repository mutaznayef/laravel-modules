<?php

namespace App\Modules\Dashboard\Database\Seeders;

use App\Modules\Dashboard\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->dashboards();
        $this->userProfile();
        $this->account();
        $this->auth();
        $this->corporate();
        $this->social();
        $this->blog();
        $this->faq();
        $this->pricing();
        $this->careers();
        $this->widgets();
        $this->projects();
        $this->ecommerce();
        $this->contacts();
        $this->supportCenter();
        $this->userManagement();
        $this->customers();
        $this->subscription();
        $this->invoiceManager();
        $this->fileManager();
        $this->inbox();
        $this->chat();
        $this->calendar();
        $this->layoutOptions();
        $this->toolbars();
        $this->asides();
    }

    protected function dashboards(): void
    {
        $dashboard = Menu::create([
            'section' => 'dashboards',
            'title' => 'Dashboard',
            'slug' => 'dashboard',
            'icon_html' =>
            '<i class="ki-duotone ki-element-11 fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span></i>'
        ]);
        Menu::create([
            'title' => 'Default',
            'slug' => 'default',
            'url' => 'dashboards/default',
            'parent_id' => $dashboard->id
        ]);
        Menu::create([
            'title' => 'eCommerce',
            'slug' => 'e-commerce',
            'url' => '/dashboards/e-commerce',
            'parent_id' => $dashboard->id
        ]);

        Menu::create([
            'title' => 'Projects',
            'slug' => 'dashboards-projects',
            'url' => '/dashboards/projects',
            'parent_id' => $dashboard->id
        ]);

        Menu::create([
            'title' => 'Online Courses',
            'slug' => 'online-courses',
            'url' => '/dashboards/online-courses',
            'parent_id' => $dashboard->id
        ]);

        Menu::create([
            'title' => 'Marketing',
            'slug' => 'marketing',
            'url' => '/dashboards/marketing',
            'parent_id' => $dashboard->id
        ]);
        Menu::create([
            'title' => 'Bidding',
            'slug' => 'bidding',
            'url' => '/dashboards/bidding',
            'parent_id' => $dashboard->id
        ]);
        Menu::create([
            'title' => 'Call Center',
            'slug' => 'call-center',
            'url' => '/dashboards/call-center',
            'parent_id' => $dashboard->id
        ]);
        Menu::create([
            'title' => 'Logistics',
            'slug' => 'logistics',
            'url' => '/dashboards/logistics',
            'parent_id' => $dashboard->id
        ]);


        Menu::create([
            'title' => 'Website Analytics',
            'slug' => 'website-analytics',
            'url' => '/dashboards/website-analytics',
            'parent_id' => $dashboard->id
        ]);
        Menu::create([
            'title' => 'Finance Performance',
            'slug' => 'finance-performance',
            'url' => '/dashboards/finance-performance',
            'parent_id' => $dashboard->id
        ]);


        Menu::create([
            'title' => 'Store Analytics',
            'slug' => 'store-analytics',
            'url' => '/dashboards/store-analytics',
            'parent_id' => $dashboard->id
        ]);

        Menu::create([
            'title' => 'Social',
            'slug' => 'dashboards-social',
            'url' => '/dashboards/social',
            'parent_id' => $dashboard->id
        ]);
        Menu::create([
            'title' => 'Delivery',
            'slug' => 'delivery',
            'url' => '/dashboards/delivery',
            'parent_id' => $dashboard->id
        ]);

        Menu::create([
            'title' => 'School',
            'slug' => 'school',
            'url' => '/dashboards/school',
            'parent_id' => $dashboard->id
        ]);
    }

    protected function userProfile(): void
    {
        $userProfile = Menu::create([
            'section' => 'pages',
            'title' => 'User Profile',
            'slug' => 'user-profile',
            'icon_html' =>
            ' <i class="ki-duotone ki-address-book fs-2">
                <span class="path1"></span>
                <span class="path2"></span>
                <span class="path3"></span></i>'
        ]);
        Menu::create([
            'title' => 'Overview',
            'slug' => 'user-profile-overview',
            'url' => 'users/user-profile',
            'parent_id' => $userProfile->id
        ]);
        Menu::create([
            'title' => 'Activity',
            'slug' => 'user-profile-activity',
            'url' => 'users/user-profile/activity',
            'parent_id' => $userProfile->id
        ]);
    }

    protected function account(): void
    {
        $account = Menu::create([
            'section' => 'pages',
            'title' => 'Account',
            'slug' => 'account',
            'icon_html' => '<i class="ki-duotone ki-element-plus fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                    <span class="path5"></span></i>'
        ]);
        Menu::create([
            'title' => 'Overview',
            'slug' => 'account-overview',
            'url' => 'users/account',
            'parent_id' => $account->id
        ]);
        Menu::create([
            'title' => 'Settings',
            'slug' => 'account-settings',
            'url' => 'users/account/settings',
            'parent_id' => $account->id
        ]);
        Menu::create([
            'title' => 'Security',
            'slug' => 'security',
            'url' => 'users/account/security',
            'parent_id' => $account->id
        ]);
        Menu::create([
            'title' => 'Activity',
            'slug' => 'account-activity',
            'url' => 'users/account/activity',
            'parent_id' => $account->id
        ]);
        Menu::create([
            'title' => 'Billing',
            'slug' => 'billing',
            'url' => 'users/account/billing',
            'parent_id' => $account->id
        ]);
        Menu::create([
            'title' => 'Logs',
            'slug' => 'logs',
            'url' => 'users/account/logs',
            'parent_id' => $account->id
        ]);
    }

    protected function auth(): void
    {
        $auth = Menu::create([
            'section' => 'pages',
            'title' => 'Authentication',
            'slug' => 'authentication',
            'icon_html' => '  <i class="ki-duotone ki-user fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>'
        ]);
        $basic = Menu::create([
            'title' => 'Basic',
            'slug' => 'basic',
            'parent_id' => $auth->id
        ]);
        Menu::create([
            'title' => 'Login',
            'slug' => 'login',
            'url' => '/login',
            'parent_id' => $basic->id
        ]);
        Menu::create([
            'title' => 'Register',
            'slug' => 'register',
            'url' => '/register',
            'parent_id' => $basic->id
        ]);
        Menu::create([
            'title' => 'Two-Factor',
            'slug' => 'two-factor',
            'url' => '/two-factor',
            'parent_id' => $basic->id
        ]);
        Menu::create([
            'title' => 'Reset Password',
            'slug' => 'reset-password',
            'url' => '/reset-password',
            'parent_id' => $basic->id
        ]);
        Menu::create([
            'title' => 'New Password',
            'slug' => 'new-password',
            'url' => '/new-password',
            'parent_id' => $basic->id
        ]);


        $email = Menu::create([
            'title' => 'Email',
            'slug' => 'email',
            'parent_id' => $auth->id
        ]);
        Menu::create([
            'title' => 'Welcome Message',
            'slug' => 'email-welcome-message',
            'url' => '/email/welcome-message',
            'parent_id' => $email->id
        ]);
        Menu::create([
            'title' => 'Reset Password',
            'slug' => 'email-reset-password',
            'url' => '/email/reset-password',
            'parent_id' => $email->id
        ]);
        Menu::create([
            'title' => 'Subscription Confirmed',
            'slug' => 'subscription-confirmed',
            'url' => '/email/subscription-confirmed',
            'parent_id' => $email->id
        ]);
        Menu::create([
            'title' => 'Credit Card Declined',
            'slug' => 'credit-card-declined',
            'url' => '/email/credit-card-declined',
            'parent_id' => $email->id
        ]);

        Menu::create([
            'title' => 'Multi-steps Sign-up',
            'slug' => 'multi-steps-sign-up',
            'url' => '/multi-steps-sign-up',
            'parent_id' => $auth->id
        ]);
        Menu::create([
            'title' => 'Welcome Message',
            'slug' => 'welcome-message',
            'url' => '/welcome-message',
            'parent_id' => $auth->id
        ]);
        Menu::create([
            'title' => 'Verify Email',
            'slug' => 'verify-email',
            'url' => '/verify-email',
            'parent_id' => $auth->id
        ]);

        Menu::create([
            'title' => 'Password Confirmation',
            'slug' => 'password-confirmation',
            'url' => '/password-confirmation',
            'parent_id' => $auth->id
        ]);


        Menu::create([
            'title' => 'Account Deactivation',
            'slug' => 'account-deactivation',
            'url' => '/account-deactivation',
            'parent_id' => $auth->id
        ]);
    }

    protected function corporate(): void
    {

        $corporate = Menu::create([
            'section' => 'pages',
            'title' => 'Corporate',
            'slug' => 'corporate',
            'icon_html' => '   <i class="ki-duotone ki-file fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>'
        ]);


        Menu::create([
            'title' => 'About',
            'slug' => 'about',
            'url' => '/about',
            'parent_id' => $corporate->id
        ]);
        Menu::create([
            'title' => 'Our Team',
            'slug' => 'our-team',
            'url' => '/our-team',
            'parent_id' => $corporate->id
        ]);
        Menu::create([
            'title' => 'Contact Us',
            'slug' => 'contact-us',
            'url' => '/contact-us',
            'parent_id' => $corporate->id
        ]);
        Menu::create([
            'title' => 'Licenses',
            'slug' => 'licenses',
            'url' => '/licenses',
            'parent_id' => $corporate->id
        ]);
        Menu::create([
            'title' => 'Sitemap',
            'slug' => 'sitemap',
            'url' => '/sitemap',
            'parent_id' => $corporate->id
        ]);
    }

    protected function social(): void
    {

        $social = Menu::create([
            'section' => 'pages',
            'title' => 'Social',
            'slug' => 'social',
            'icon_html' => '    <i class="ki-duotone ki-abstract-39 fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>'
        ]);
        Menu::create([
            'title' => 'Feeds',
            'slug' => 'feeds',
            'url' => '/social/feeds',
            'parent_id' => $social->id
        ]);
        Menu::create([
            'title' => 'Activity',
            'slug' => 'social-activity',
            'url' => '/social/activity',
            'parent_id' => $social->id
        ]);
        Menu::create([
            'title' => 'Followers',
            'slug' => 'followers',
            'url' => '/social/followers',
            'parent_id' => $social->id
        ]);
        Menu::create([
            'title' => 'Settings',
            'slug' => 'social-settings',
            'url' => '/social/settings',
            'parent_id' => $social->id
        ]);
    }

    protected function blog(): void
    {

        $blog = Menu::create([
            'section' => 'pages',
            'title' => 'Blog',
            'slug' => 'blog',
            'icon_html' => '    <i class="ki-duotone ki-bank fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>'
        ]);
        Menu::create([
            'title' => 'Blog Home',
            'slug' => 'blog-home',
            'url' => '/blog/home',
            'parent_id' => $blog->id
        ]);
        Menu::create([
            'title' => 'Blog Post',
            'slug' => 'blog-post',
            'url' => '/blog/post',
            'parent_id' => $blog->id
        ]);
    }


    protected function faq(): void
    {

        $faq = Menu::create([
            'section' => 'pages',
            'title' => 'FAQ',
            'slug' => 'faq',
            'icon_html' => '     <i class="ki-duotone ki-chart-pie-3 fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>'
        ]);
        Menu::create([
            'title' => 'FAQ Classic',
            'slug' => 'faq-classic',
            'url' => '/faq/classic',
            'parent_id' => $faq->id
        ]);
        Menu::create([
            'title' => 'FAQ Extended',
            'slug' => 'faq-extended',
            'url' => '/faq/extended',
            'parent_id' => $faq->id
        ]);
    }

    protected function pricing(): void
    {

        $pricing = Menu::create([
            'section' => 'pages',
            'title' => 'Pricing',
            'slug' => 'pricing',
            'icon_html' => '      <i class="ki-duotone ki-bucket fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>'
        ]);
        Menu::create([
            'title' => 'Column Classic',
            'slug' => 'column-classic',
            'url' => '/pricing/column/classic',
            'parent_id' => $pricing->id
        ]);
        Menu::create([
            'title' => 'Table Pricing',
            'slug' => 'table-pricing',
            'url' => '/pricing/table-pricing',
            'parent_id' => $pricing->id
        ]);
    }

    protected function careers(): void
    {

        $careers = Menu::create([
            'section' => 'pages',
            'title' => 'Careers',
            'slug' => 'careers',
            'icon_html' => '<i class="ki-duotone ki-call fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                                <span class="path6"></span>
                                <span class="path7"></span>
                                <span class="path8"></span>
                            </i>',
        ]);

        Menu::create([
            'title' => 'Careers List',
            'slug' => 'careers-list',
            'url' => '/pages/careers/list', // normalized relative to app
            'parent_id' => $careers->id,
        ]);

        Menu::create([
            'title' => 'Careers Apply',
            'slug' => 'careers-apply',
            'url' => '/pages/careers/apply',
            'parent_id' => $careers->id,
        ]);
    }

    protected function widgets(): void
    {
        $widgets = Menu::create([
            'section' => 'pages',
            'title' => 'Widgets',
            'slug' => 'widgets',
            'icon_html' => '<i class="ki-duotone ki-element-7 fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>',
        ]);

        Menu::insert([
            [
                'title' => 'Lists',
                'slug' => 'widgets-lists',
                'url' => '/widgets/lists',
                'parent_id' => $widgets->id,
            ],
            [
                'title' => 'Statistics',
                'slug' => 'widgets-statistics',
                'url' => '/widgets/statistics',
                'parent_id' => $widgets->id,
            ],
            [
                'title' => 'Charts',
                'slug' => 'widgets-charts',
                'url' => '/widgets/charts',
                'parent_id' => $widgets->id,
            ],
            [
                'title' => 'Mixed',
                'slug' => 'widgets-mixed',
                'url' => '/widgets/mixed',
                'parent_id' => $widgets->id,
            ],
            [
                'title' => 'Tables',
                'slug' => 'widgets-tables',
                'url' => '/widgets/tables',
                'parent_id' => $widgets->id,
            ],
            [
                'title' => 'Feeds',
                'slug' => 'widgets-feeds',
                'url' => '/widgets/feeds',
                'parent_id' => $widgets->id,
            ],
        ]);
    }

    protected function projects(): void
    {
        $projects = Menu::create([
            'section' => 'apps',
            'title' => 'Projects',
            'slug' => 'projects',
            'icon_html' => '<i class="ki-duotone ki-abstract-41 fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>',
            // No URL for parent accordion
        ]);

        Menu::insert([
            [
                'title' => 'My Projects',
                'slug' => 'projects-my-projects',
                'url' => '/apps/projects/list',
                'parent_id' => $projects->id,
            ],
            [
                'title' => 'View Project',
                'slug' => 'projects-view',
                'url' => '/apps/projects/project',
                'parent_id' => $projects->id,
            ],
            [
                'title' => 'Targets',
                'slug' => 'projects-targets',
                'url' => '/apps/projects/targets',
                'parent_id' => $projects->id,
            ],
            [
                'title' => 'Budget',
                'slug' => 'projects-budget',
                'url' => '/apps/projects/budget',
                'parent_id' => $projects->id,
            ],
            [
                'title' => 'Users',
                'slug' => 'projects-users',
                'url' => '/apps/projects/users',
                'parent_id' => $projects->id,
            ],
            [
                'title' => 'Files',
                'slug' => 'projects-files',
                'url' => '/apps/projects/files',
                'parent_id' => $projects->id,
            ],
            [
                'title' => 'Activity',
                'slug' => 'projects-activity',
                'url' => '/apps/projects/activity',
                'parent_id' => $projects->id,
            ],
            [
                'title' => 'Settings',
                'slug' => 'projects-settings',
                'url' => '/apps/projects/settings',
                'parent_id' => $projects->id,
            ],
        ]);
    }

    protected function ecommerce(): void
    {
        $ecommerce = Menu::create([
            'section' => 'apps',
            'title' => 'eCommerce',
            'slug' => 'ecommerce',
            'icon_html' => '<i class="ki-duotone ki-basket fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>',
        ]);

        // Catalog
        $catalog = Menu::create([
            'title' => 'Catalog',
            'slug' => 'ecommerce-catalog',
            'parent_id' => $ecommerce->id,
        ]);

        Menu::insert([
            ['title' => 'Products', 'slug' => 'ecommerce-products', 'url' => '/apps/ecommerce/catalog/products', 'parent_id' => $catalog->id],
            ['title' => 'Categories', 'slug' => 'ecommerce-categories', 'url' => '/apps/ecommerce/catalog/categories', 'parent_id' => $catalog->id],
            ['title' => 'Add Product', 'slug' => 'ecommerce-add-product', 'url' => '/apps/ecommerce/catalog/add-product', 'parent_id' => $catalog->id],
            ['title' => 'Edit Product', 'slug' => 'ecommerce-edit-product', 'url' => '/apps/ecommerce/catalog/edit-product', 'parent_id' => $catalog->id],
            ['title' => 'Add Category', 'slug' => 'ecommerce-add-category', 'url' => '/apps/ecommerce/catalog/add-category', 'parent_id' => $catalog->id],
            ['title' => 'Edit Category', 'slug' => 'ecommerce-edit-category', 'url' => '/apps/ecommerce/catalog/edit-category', 'parent_id' => $catalog->id],
        ]);

        // Sales
        $sales = Menu::create([
            'title' => 'Sales',
            'slug' => 'ecommerce-sales',
            'parent_id' => $ecommerce->id,
        ]);

        Menu::insert([
            ['title' => 'Orders Listing', 'slug' => 'ecommerce-orders-listing', 'url' => '/apps/ecommerce/sales/listing', 'parent_id' => $sales->id],
            ['title' => 'Order Details', 'slug' => 'ecommerce-order-details', 'url' => '/apps/ecommerce/sales/details', 'parent_id' => $sales->id],
            ['title' => 'Add Order', 'slug' => 'ecommerce-add-order', 'url' => '/apps/ecommerce/sales/add-order', 'parent_id' => $sales->id],
            ['title' => 'Edit Order', 'slug' => 'ecommerce-edit-order', 'url' => '/apps/ecommerce/sales/edit-order', 'parent_id' => $sales->id],
        ]);

        // Customers
        $customers = Menu::create([
            'title' => 'Customers',
            'slug' => 'ecommerce-customers',
            'parent_id' => $ecommerce->id,
        ]);

        Menu::insert([
            ['title' => 'Customer Listing', 'slug' => 'ecommerce-customer-listing', 'url' => '/apps/ecommerce/customers/listing', 'parent_id' => $customers->id],
            ['title' => 'Customer Details', 'slug' => 'ecommerce-customer-details', 'url' => '/apps/ecommerce/customers/details', 'parent_id' => $customers->id],
        ]);

        // Reports
        $reports = Menu::create([
            'title' => 'Reports',
            'slug' => 'ecommerce-reports',
            'parent_id' => $ecommerce->id,
        ]);

        Menu::insert([
            ['title' => 'Products Viewed', 'slug' => 'ecommerce-products-viewed', 'url' => '/apps/ecommerce/reports/view', 'parent_id' => $reports->id],
            ['title' => 'Sales', 'slug' => 'ecommerce-sales-report', 'url' => '/apps/ecommerce/reports/sales', 'parent_id' => $reports->id],
            ['title' => 'Returns', 'slug' => 'ecommerce-returns', 'url' => '/apps/ecommerce/reports/returns', 'parent_id' => $reports->id],
            ['title' => 'Customer Orders', 'slug' => 'ecommerce-customer-orders', 'url' => '/apps/ecommerce/reports/customer-orders', 'parent_id' => $reports->id],
            ['title' => 'Shipping', 'slug' => 'ecommerce-shipping', 'url' => '/apps/ecommerce/reports/shipping', 'parent_id' => $reports->id],
        ]);

        // Settings
        Menu::create([
            'title' => 'Settings',
            'slug' => 'ecommerce-settings',
            'url' => '/apps/ecommerce/settings',
            'parent_id' => $ecommerce->id,
        ]);
    }


    protected function contacts(): void
    {
        $contacts = Menu::create([
            'section' => 'apps',
            'title' => 'Contacts',
            'slug' => 'contacts',
            'icon_html' => '<i class="ki-duotone ki-abstract-25 fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>',
        ]);

        Menu::insert([
            [
                'title' => 'Getting Started',
                'slug' => 'contacts-getting-started',
                'url' => '/apps/contacts/getting-started',
                'parent_id' => $contacts->id,
            ],
            [
                'title' => 'Add Contact',
                'slug' => 'contacts-add-contact',
                'url' => '/apps/contacts/add-contact',
                'parent_id' => $contacts->id,
            ],
            [
                'title' => 'Edit Contact',
                'slug' => 'contacts-edit-contact',
                'url' => '/apps/contacts/edit-contact',
                'parent_id' => $contacts->id,
            ],
            [
                'title' => 'View Contact',
                'slug' => 'contacts-view-contact',
                'url' => '/apps/contacts/view-contact',
                'parent_id' => $contacts->id,
            ],
        ]);
    }

    protected function supportCenter(): void
    {
        $support = Menu::create([
            'section' => 'apps',
            'title' => 'Support Center',
            'slug' => 'support-center',
            'icon_html' => '<i class="ki-duotone ki-chart fs-2"><span class="path1"></span><span class="path2"></span></i>',
        ]);

        Menu::create([
            'title' => 'Overview',
            'slug' => 'support-overview',
            'url' => '/apps/support-center/overview',
            'parent_id' => $support->id,
        ]);

        $tickets = Menu::create([
            'title' => 'Tickets',
            'slug' => 'support-tickets',
            'parent_id' => $support->id,
        ]);

        Menu::insert([
            [
                'title' => 'Tickets List',
                'slug' => 'support-tickets-list',
                'url' => '/apps/support-center/tickets/list',
                'parent_id' => $tickets->id,
            ],
            [
                'title' => 'View Ticket',
                'slug' => 'support-tickets-view',
                'url' => '/apps/support-center/tickets/view',
                'parent_id' => $tickets->id,
            ],
        ]);

        $tutorials = Menu::create([
            'title' => 'Tutorials',
            'slug' => 'support-tutorials',
            'parent_id' => $support->id,
        ]);

        Menu::insert([
            [
                'title' => 'Tutorials List',
                'slug' => 'support-tutorials-list',
                'url' => '/apps/support-center/tutorials/list',
                'parent_id' => $tutorials->id,
            ],
            [
                'title' => 'Tutorial Post',
                'slug' => 'support-tutorials-post',
                'url' => '/apps/support-center/tutorials/post',
                'parent_id' => $tutorials->id,
            ],
        ]);

        Menu::insert([
            [
                'title' => 'FAQ',
                'slug' => 'support-faq',
                'url' => '/apps/support-center/faq',
                'parent_id' => $support->id,
            ],
            [
                'title' => 'Licenses',
                'slug' => 'support-licenses',
                'url' => '/apps/support-center/licenses',
                'parent_id' => $support->id,
            ],
            [
                'title' => 'Contact Us',
                'slug' => 'support-contact',
                'url' => '/apps/support-center/contact',
                'parent_id' => $support->id,
            ],
        ]);
    }
    protected function userManagement(): void
    {
        $userManagement = Menu::create([
            'section' => 'apps',
            'title' => 'User Management',
            'slug' => 'user-management',
            'icon_html' => '<i class="ki-duotone ki-abstract-28 fs-2"><span class="path1"></span><span class="path2"></span></i>',
        ]);

        // Users parent menu
        $users = Menu::create([
            'title' => 'Users',
            'slug' => 'user-management-users',
            'parent_id' => $userManagement->id,
        ]);

        Menu::insert([
            [
                'title' => 'Users List',
                'slug' => 'user-management-users-list',
                'url' => '/apps/user-management/users/list',
                'parent_id' => $users->id,
            ],
            [
                'title' => 'View User',
                'slug' => 'user-management-users-view',
                'url' => '/apps/user-management/users/view',
                'parent_id' => $users->id,
            ],
        ]);

        // Roles parent menu
        $roles = Menu::create([
            'title' => 'Roles',
            'slug' => 'user-management-roles',
            'parent_id' => $userManagement->id,
        ]);

        Menu::insert([
            [
                'title' => 'Roles List',
                'slug' => 'user-management-roles-list',
                'url' => '/apps/user-management/roles/list',
                'parent_id' => $roles->id,
            ],
            [
                'title' => 'View Role',
                'slug' => 'user-management-roles-view',
                'url' => '/apps/user-management/roles/view',
                'parent_id' => $roles->id,
            ],
        ]);

        // Permissions menu (no children)
        Menu::create([
            'title' => 'Permissions',
            'slug' => 'user-management-permissions',
            'url' => '/apps/user-management/permissions',
            'parent_id' => $userManagement->id,
        ]);
    }

    protected function customers(): void
    {
        $customers = Menu::create([
            'section' => 'apps',
            'title' => 'Customers',
            'slug' => 'customers',
            'icon_html' => '<i class="ki-duotone ki-abstract-38 fs-2"><span class="path1"></span><span class="path2"></span></i>',
        ]);

        Menu::insert([
            [
                'title' => 'Getting Started',
                'slug' => 'customers-getting-started',
                'url' => '/apps/customers/getting-started',
                'parent_id' => $customers->id,
            ],
            [
                'title' => 'Customer Listing',
                'slug' => 'customers-listing',
                'url' => '/apps/customers/list',
                'parent_id' => $customers->id,
            ],
            [
                'title' => 'Customer Details',
                'slug' => 'customers-details',
                'url' => '/apps/customers/view',
                'parent_id' => $customers->id,
            ],
        ]);
    }

    protected function subscription(): void
    {
        $subscription = Menu::create([
            'section' => 'apps',
            'title' => 'Subscription',
            'slug' => 'subscription',
            'icon_html' => '<i class="ki-duotone ki-map fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>',
        ]);

        Menu::insert([
            [
                'title' => 'Getting Started',
                'slug' => 'subscription-getting-started',
                'url' => '/apps/subscriptions/getting-started',
                'parent_id' => $subscription->id,
            ],
            [
                'title' => 'Subscription List',
                'slug' => 'subscription-list',
                'url' => '/apps/subscriptions/list',
                'parent_id' => $subscription->id,
            ],
            [
                'title' => 'Add Subscription',
                'slug' => 'subscription-add',
                'url' => '/apps/subscriptions/add',
                'parent_id' => $subscription->id,
            ],
            [
                'title' => 'View Subscription',
                'slug' => 'subscription-view',
                'url' => '/apps/subscriptions/view',
                'parent_id' => $subscription->id,
            ],
        ]);
    }

    protected function invoiceManager(): void
    {
        $invoiceManager = Menu::create([
            'section' => 'apps',
            'title' => 'Invoice Manager',
            'slug' => 'invoice-manager',
            'icon_html' => '<i class="ki-duotone ki-credit-cart fs-2"><span class="path1"></span><span class="path2"></span></i>',
        ]);

        $viewInvoices = Menu::create([
            'title' => 'View Invoices',
            'slug' => 'invoice-view-invoices',
            'parent_id' => $invoiceManager->id,
        ]);

        Menu::insert([
            [
                'title' => 'Invoice 1',
                'slug' => 'invoice-1',
                'url' => '/apps/invoices/view/invoice-1',
                'parent_id' => $viewInvoices->id,
            ],
            [
                'title' => 'Invoice 2',
                'slug' => 'invoice-2',
                'url' => '/apps/invoices/view/invoice-2',
                'parent_id' => $viewInvoices->id,
            ],
            [
                'title' => 'Invoice 3',
                'slug' => 'invoice-3',
                'url' => '/apps/invoices/view/invoice-3',
                'parent_id' => $viewInvoices->id,
            ],
        ]);

        Menu::create([
            'title' => 'Create Invoice',
            'slug' => 'invoice-create',
            'url' => '/apps/invoices/create',
            'parent_id' => $invoiceManager->id,
        ]);
    }

    protected function fileManager(): void
    {
        $fileManager = Menu::create([
            'section' => 'apps',
            'title' => 'File Manager',
            'slug' => 'file-manager',
            'icon_html' => '<i class="ki-duotone ki-switch fs-2"><span class="path1"></span><span class="path2"></span></i>',
        ]);

        Menu::insert([
            [
                'title' => 'Folders',
                'slug' => 'file-manager-folders',
                'url' => '/apps/file-manager/folders',
                'parent_id' => $fileManager->id,
            ],
            [
                'title' => 'Files',
                'slug' => 'file-manager-files',
                'url' => '/apps/file-manager/files',
                'parent_id' => $fileManager->id,
            ],
            [
                'title' => 'Blank Directory',
                'slug' => 'file-manager-blank-directory',
                'url' => '/apps/file-manager/blank',
                'parent_id' => $fileManager->id,
            ],
            [
                'title' => 'Settings',
                'slug' => 'file-manager-settings',
                'url' => '/apps/file-manager/settings',
                'parent_id' => $fileManager->id,
            ],
        ]);
    }

    protected function inbox(): void
    {
        $inbox = Menu::create([
            'section' => 'apps',
            'title' => 'Inbox',
            'slug' => 'inbox',
            'icon_html' => '<i class="ki-duotone ki-sms fs-2"><span class="path1"></span><span class="path2"></span></i>',
        ]);

        Menu::insert([
            [
                'title' => 'Messages',
                'slug' => 'inbox-messages',
                'url' => '/apps/inbox/listing',
                'parent_id' => $inbox->id,
            ],
            [
                'title' => 'Compose',
                'slug' => 'inbox-compose',
                'url' => '/apps/inbox/compose',
                'parent_id' => $inbox->id,
            ],
            [
                'title' => 'View & Reply',
                'slug' => 'inbox-view-reply',
                'url' => '/apps/inbox/reply',
                'parent_id' => $inbox->id,
            ],
        ]);
    }

    protected function chat(): void
    {
        $chat = Menu::create([
            'section' => 'apps',
            'title' => 'Chat',
            'slug' => 'chat',
            'icon_html' => '<i class="ki-duotone ki-message-text-2 fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>',
        ]);

        Menu::insert([
            [
                'title' => 'Private Chat',
                'slug' => 'chat-private',
                'url' => '/apps/chat/private',
                'parent_id' => $chat->id,
            ],
            [
                'title' => 'Group Chat',
                'slug' => 'chat-group',
                'url' => '/apps/chat/group',
                'parent_id' => $chat->id,
            ],
            [
                'title' => 'Drawer Chat',
                'slug' => 'chat-drawer',
                'url' => '/apps/chat/drawer',
                'parent_id' => $chat->id,
            ],
        ]);
    }
    protected function calendar(): void
    {
        Menu::create([
            'section' => 'apps',
            'title' => 'Calendar',
            'slug' => 'calendar',
            'url' => '/apps/calendar',
            'icon_html' => '<i class="ki-duotone ki-calendar-8 fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                            <span class="path5"></span>
                            <span class="path6"></span>
                        </i>',
        ]);
    }


    protected function layoutOptions(): void
    {
        $layout = Menu::create([
            'section' => 'layouts',
            'title' => 'Layout Options',
            'slug' => 'layout-options',
            'icon_html' => '<i class="ki-duotone ki-element-7 fs-2"><span class="path1"></span><span class="path2"></span></i>',
        ]);

        Menu::insert([
            [
                'title' => 'Light Sidebar',
                'slug' => 'layout-light-sidebar',
                'url' => '/layouts/light-sidebar',
                'parent_id' => $layout->id,
            ],
            [
                'title' => 'Dark Sidebar',
                'slug' => 'layout-dark-sidebar',
                'url' => '/layouts/dark-sidebar',
                'parent_id' => $layout->id,
            ],
            [
                'title' => 'Light Header',
                'slug' => 'layout-light-header',
                'url' => '/layouts/light-header',
                'parent_id' => $layout->id,
            ],
            [
                'title' => 'Dark Header',
                'slug' => 'layout-dark-header',
                'url' => '/layouts/dark-header',
                'parent_id' => $layout->id,
            ],
        ]);
    }
    protected function toolbars(): void
    {
        $toolbars = Menu::create([
            'section' => 'layouts',
            'title' => 'Toolbars',
            'slug' => 'toolbars',
            'icon_html' => '<i class="ki-duotone ki-text-align-center fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>',
        ]);

        Menu::insert([
            [
                'title' => 'Classic',
                'slug' => 'toolbars-classic',
                'url' => '/toolbars/classic',
                'parent_id' => $toolbars->id,
            ],
            [
                'title' => 'SaaS',
                'slug' => 'toolbars-saas',
                'url' => '/toolbars/saas',
                'parent_id' => $toolbars->id,
            ],
            [
                'title' => 'Accounting',
                'slug' => 'toolbars-accounting',
                'url' => '/toolbars/accounting',
                'parent_id' => $toolbars->id,
            ],
            [
                'title' => 'Extended',
                'slug' => 'toolbars-extended',
                'url' => '/toolbars/extended',
                'parent_id' => $toolbars->id,
            ],
            [
                'title' => 'Reports',
                'slug' => 'toolbars-reports',
                'url' => '/toolbars/reports',
                'parent_id' => $toolbars->id,
            ],
        ]);
    }
    protected function asides(): void
    {
        $asides = Menu::create([
            'section' => 'layouts',
            'title' => 'Asides',
            'slug' => 'asides',
            'icon_html' => '<i class="ki-duotone ki-menu fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>',
        ]);

        Menu::insert([
            [
                'title' => 'Filters',
                'slug' => 'asides-filters',
                'url' => '/asides/aside-1',
                'parent_id' => $asides->id,
            ],
            [
                'title' => 'Segments',
                'slug' => 'asides-segments',
                'url' => '/asides/aside-2',
                'parent_id' => $asides->id,
            ],
            [
                'title' => 'Shipment History',
                'slug' => 'asides-shipment-history',
                'url' => '/asides/aside-3',
                'parent_id' => $asides->id,
            ],
            [
                'title' => 'Courier Activity',
                'slug' => 'asides-courier-activity',
                'url' => '/asides/aside-4',
                'parent_id' => $asides->id,
            ],
            [
                'title' => 'Calendar',
                'slug' => 'asides-calendar',
                'url' => '/asides/aside-5',
                'parent_id' => $asides->id,
            ],
        ]);
    }
}
